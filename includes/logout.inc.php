<?php
if (isset($_POST['logoutbtn'])) {
    session_start();
    session_unset();
    session_destroy();
    header("Location:../index.php");
}
