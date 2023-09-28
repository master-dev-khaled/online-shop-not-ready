<?php
require 'db.inc.php';
function getProducts($type) {
    require 'db.inc.php';
    $query = "SELECT * FROM products WHERE type = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$query)) {
        header('Location: dashboard.php?error=sqlerror');
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$type);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $num = mysqli_stmt_num_rows($stmt);
    $stmt1 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt1,$query)) {
        header('Location: dashboard.php?error=sqlerror');
        exit();
    }
    mysqli_stmt_bind_param($stmt1,"s",$type);
    mysqli_stmt_execute($stmt1);
    $result1 = mysqli_stmt_get_result($stmt1);
    $sportarray = mysqli_fetch_all($result1, MYSQLI_BOTH);
    if ($sportarray) {
        $output =  "<div class=\"row\">";
        foreach ($sportarray as $product) {
            $image = $product['image'];
            $reference = $product['reference'];
            $type = $product['type'];
            $name = $product['name'];
            $quantity = $product['quantity'];
            $supplier = $product['supplier'];
            $price = $product['price'];
            if ($product['sold'] === NULL) {
                $sold = "--";
                $newprice = "--";
            }
            else {
                $sold = $product['sold'];
                $newprice = ($price * $sold)/100;
            }
            $description = $product['description'];
            $output .= "<div class=\"card col-lg-4 col-md-6 col-sm-12 ms-3 mb-3\" style=\"width: 18rem;\">
                            <img src=\"images/$image\" class=\"card-img-top\" alt=\"error\" style=\"width: 18rem; height: 15rem;\">
                            <div class=\"card-body d-flex flex-column justify-content-center\">
                                <h3 class=\"card-title\">$name</h3>
                                <h5 class=\"card-title\">price: $price €</h5>
                                <h5 class=\"card-title\">sold: $sold %</h5>
                                <h5 class=\"card-title\">new price: $newprice €</h5>
                                <button class=\"btn bg-danger text-white infobtn\" data-id=\"$reference\">details</button>
                            </div>
                        </div>";
        }
        $output .= "</div>";
        echo $output;
    }
    else {
        echo "<p class=\"load\">no products to show</p>";
    }
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt1);
    mysqli_close($conn);
}
if (isset($_POST['action']) && $_POST['action'] === 'fetchsp') {
    getProducts('sport');
}
if (isset($_POST['action']) && $_POST['action'] === 'fetchpc') {
    getProducts('pc');
}
if (isset($_POST['action']) && $_POST['action'] === 'fetchkit') {
    getProducts('kitchen');
}
if (isset($_POST['action']) && $_POST['action'] === 'fetchcl') {
    getProducts('clothes');
}
if (isset($_POST['infoRef'])) {
    $infoRef = (int)$_POST['infoRef'];
    $query = "SELECT * FROM products WHERE reference = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $query)) {
        header('Location: dashboard.php?error=sql-error');
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "i", $infoRef);
        mysqli_stmt_execute($stmt);
        $result2 = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($result2)) {
            echo json_encode($row);
        }
    }
}
?>