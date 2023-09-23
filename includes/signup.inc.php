<?php
if (isset($_POST['signupbtn'])) {
    require 'db.inc.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $condition = $_POST['condition'];
    if (empty($username) || empty($email) || empty($password) || empty($age) || empty($address) || !isset($condition)){
        header("Location:../signup.php?error=empty-fields&username=".$username."&email=".$email."&password=".$password."&age=".$age."&address=".$address);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/",$username) && !filter_var($email, FILTER_VALIDATE_EMAIL) && $age > 100){
        header("Location:../signup.php?error=not-valid-email-not-vaid-username-age-sup-100&address=".$address);   
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/",$username) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:../signup.php?error=not-valid-username-not-valid-email&age=".$age."&address=".$address);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/",$username) && $age > 100) {
        header("Location:../signup.php?error=not-valid-username-age-sup-100&email=".$email."&address=".$address);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && $age > 100) {
        header("Location:../signup.php?error=not-valid-mail-age-sup-100&username=".$username."&address=".$address);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
        header("Location:../signup.php?error=not-valid-username&email=".$email."&age=".$age."&address=".$address);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:../signup.php?error=not-valid-email&username=".$username."&age=".$age."&address=".$address);
        exit();
    }
    else if ($age > 100) {
        header("Location:../signup.php?error=age-sup-100&username=".$username."&email=".$email."&address=".$address);
        exit();
    }
    else {
        $query = "SELECT username FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $query)) {
            header("Location:../signup.php?error=sql-error");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) > 0) {
                header("Location:../signup.php?error=username-taken");
                exit();
            }
            else {
                $query = "SELECT email FROM users WHERE email = ?";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $query)) {
                    header("Location:../signup.php?error=sql-error");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt,"s",$email);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    if (mysqli_stmt_num_rows($stmt) > 0) {
                        header("Location:../signup.php?error=email-taken");
                        exit();
                    }
                    else {
                        $hashpass = password_hash($password,PASSWORD_DEFAULT);
                        $query = "INSERT INTO users (username,age,address,email,password) VALUES (?,?,?,?,?)";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $query)) {
                            header("Location:../signup.php?error=sql-error");
                            exit();
                        }
                        else {
                            mysqli_stmt_bind_param($stmt,"sisss",$username,$age,$address,$email,$hashpass);
                            mysqli_stmt_execute($stmt);
                            header("Location:../dashboard.php?signup=success");
                            exit();
                        }
                    }
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header("Location:../signup.php");
}
