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
            <form action="includes/signup.inc.php" method="post" id="signupform">
                <div class="row">
                    <div class="col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label fs-4">Username</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fs-4">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            <div id="emailHelp" class="text-black">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label fs-4">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                        <div class="mb-3">
                            <label for="exampleInputAge1" class="form-label fs-4">Age</label>
                            <input type="number" class="form-control" id="exampleInputAge1" name="age">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputAddress1" class="form-label fs-4">Address</label>
                            <input type="text" class="form-control" id="exampleInputAddress1" name="address">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="condition">
                            <label class="form-check-label" for="exampleCheck1">I agree with all the conditions.</label>
                        </div>
                        <input type="submit" value="signUp" class="btn text-danger bg-light" name="signupbtn" id="signupbtn">
                    </div>
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
        width: calc(100vw - 300px);
    }
</style>
</body>
</html>