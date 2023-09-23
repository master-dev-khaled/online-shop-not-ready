<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-danger d-flex flex-column justify-content-center align-items-between p-4 ">
            <form action="includes/login.inc.php" method="post" id="loginform">
                <div class="row d-flex flex-column justify-content-between align-items-center">
                    <div class="mb-3">
                        <label for="exampleInputUsername2" class="form-label fs-4">Username</label>
                        <input type="text" class="form-control" id="exampleInputUsername2" name="username2">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label fs-4">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" name="password2">
                    </div>
                    <input type="submit" value="Login" class="btn text-danger bg-light" name="loginbtn" id="loginbtn">
                </div>
            </form>
        </div>
    </div>
    <script src="jQuery.min.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="ajax.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    body {
        margin: 0;
        background-color: #dedede;
    }
    .container-fluid > div {
        width: calc(100vw - 600px);
    }
    .btn {
        width: 200px;
    }
</style>
</body>
</html>