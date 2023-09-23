<?php
if (isset($_POST['loginbtn'])) {
    require 'db.inc.php';
    $username = $_POST['username2'];
    $password = $_POST['password2'];
    if (empty($username) || empty($password)) {
        header('Location:../login.php?username='.$username);
        exit();
    }
    else {
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $query)) {
            header('Location:../login.php?error=sql-error');
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($result);
            if (!$row) {
                header('Location:../login.php?error=user-not-found');
                exit();
            }
            else {
                $hashpass = password_hash($password, PASSWORD_DEFAULT);
                if (password_verify($hashpass, $row['password'])) {
                    header('Location:../login.php?error=wrong-password');
                    exit();
                }
                else {
                    session_start();
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['age'] = $row['age'];
                    $_SESSION['address'] = $row['address'];
                    header('Location:../dashboard.php?login=success');
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header('Location:../login.php');
    exit();
}