<?php require 'includes/session.inc.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="bg-dark col-auto min-vh-100 d-flex flex-column justify-content-between">
                <div class="bg-dark p-1">
                    <a class="d-flex text-decoration-none mt-1 align-items-center text-white ps-3">
                        <span class="fs-4 d-none d-sm-inline"><i class="fa-solid fa-bars"></i></span>
                    </a>
                    <ul class="nav nav-pills flex-column mt-4">
                        <li class="nav-items py-2 py-sm-0">
                            <a class="nav-link text-white">
                            <i class="fs-5 fa fa-table-list"></i>  <span class="fs-4 d-none d-sm-inline">Products</span>
                            </a>
                            <ul class="nav nav-pills flex-column ms-4">
                                <li class="nav-items py-2 py-sm-0">
                                    <a href="" class="nav-link text-white">
                                        <i class="fs-6 fa-solid fa-volleyball"></i>  <span class="fs-4 d-none d-sm-inline">Sport</span>
                                    </a>
                                </li>
                                <li class="nav-items py-2 py-sm-0">
                                    <a href="" class="nav-link text-white">
                                        <i class="fs-6 fa-solid fa-laptop"></i>  <span class="fs-4 d-none d-sm-inline">PCs</span>
                                    </a>
                                </li>
                                <li class="nav-items py-2 py-sm-0">
                                    <a href="" class="nav-link text-white">
                                        <i class="fs-6 fa-solid fa-kitchen-set"></i>  <span class="fs-4 d-none d-sm-inline">Kitchen</span>
                                    </a>
                                </li>
                                <li class="nav-items py-2 py-sm-0">
                                    <a href="" class="nav-link text-white">
                                        <i class="fs-6 fa-solid fa-shirt"></i>  <span class="fs-4 d-none d-sm-inline">Clothes</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-items py-2 py-sm-0">
                            <a href="" class="nav-link text-white">
                            <i class="fs-5 fa fa-table-list"></i>  <span class="fs-4 d-none d-sm-inline">Orders</span>
                            </a>
                        </li>
                        <li class="nav-items py-2 py-sm-0">
                            <a href="" class="nav-link text-white">
                                <i class="fs-5 fa fa-table-list"></i>  <span class="fs-4 d-none d-sm-inline">Repository</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown open p-3">
                    <button class="btn border-none btn-secondary dropdown-toggle text-white" id="triggerId" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user"></i><span class="ms-2"><?php echo $_SESSION['username']?></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledly="triggerId">
                        <li><a class="dropdown-item" href="">Settings</a></li>
                        <li><a class="dropdown-item" href="">Profile</a></li>
                    </div>
                </div>
            </div>
            <div class="p-3">
                <h3>content area</h3>
                <form action="includes/logout.inc.php" method="post">
                    <input type="submit" value="Logout" class="d-flex text-decoration-none mt-1 btn bg-white text-black me-5" name="logoutbtn" id="logoutbtn">
                </form>
            </div>
        </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <style>
        [href]:hover {
            background-color: blue;
        }
    </style>
</body>
</html>