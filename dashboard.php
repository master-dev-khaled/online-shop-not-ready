<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="bg-dark col-auto min-vh-100 d-flex flex-column justify-content-between">
                <div class="bg-dark p-1">
                    <a href="#" class="d-flex text-decoration-none mt-1 align-items-center text-white">
                        <span class="fs-4 d-none d-sm-inline">Sidebar</span>
                    </a>
                    <ul class="nav nav-pills flex-column mt-4">
                        <li class="nav-items py-2 py-sm-0">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-gauge"></i>  <span class="fs-4 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-items py-2 py-sm-0">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-house"></i>  <span class="fs-4 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="nav-items py-2 py-sm-0">
                        <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-table-list"></i>  <span class="fs-4 d-none d-sm-inline">Articles</span>
                            </a>
                        </li>
                        <li class="nav-items py-2 py-sm-0">
                        <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-table-list"></i>  <span class="fs-4 d-none d-sm-inline">Products</span>
                            </a>
                        </li>
                        <li class="nav-items py-2 py-sm-0">
                        <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-clipboard"></i>  <span class="fs-4 d-none d-sm-inline">Orders</span>
                            </a>
                        </li>
                        <li class="nav-items py-2 py-sm-0">
                        <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-users"></i>  <span class="fs-4 d-none d-sm-inline">Customers</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown open p-3">
                    <button class="btn border-none btn-secondary dropdown-toggle text-white" id="triggerId" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user"></i><span class="ms-2">Khaled</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledly="triggerId">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                    </div>
                </div>
            </div>
            <div class="p-3">
                <h3>content area</h3>
            </div>
        </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
</body>
</html>