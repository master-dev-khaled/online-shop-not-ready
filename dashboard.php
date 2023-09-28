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
            <div class="cont1 col-auto d-flex flex-column justify-content-between sticky-top">
                <div class="cont2 p-1">
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
                                    <a href="" class="nav-link text-white" id="sport">
                                        <i class="fs-6 fa-solid fa-volleyball"></i>  <span class="fs-4 d-none d-sm-inline">Sport</span>
                                    </a>
                                </li>
                                <li class="nav-items py-2 py-sm-0">
                                    <a href="" class="nav-link text-white" id="pcs">
                                        <i class="fs-6 fa-solid fa-laptop"></i>  <span class="fs-4 d-none d-sm-inline">PCs</span>
                                    </a>
                                </li>
                                <li class="nav-items py-2 py-sm-0">
                                    <a href="" class="nav-link text-white" id="kitchen">
                                        <i class="fs-6 fa-solid fa-kitchen-set"></i>  <span class="fs-4 d-none d-sm-inline">Kitchen</span>
                                    </a>
                                </li>
                                <li class="nav-items py-2 py-sm-0">
                                    <a href="" class="nav-link text-white" id="clothes">
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
            <div class="p-3" style="width: 80vw;">
                <form action="includes/logout.inc.php" method="post">
                    <input class="d-flex text-decoration-none mt-1 btn me-5 bg-danger text-white border-0" type="submit" value="Logout" name="logoutbtn" id="logoutbtn">
                </form>
                <div id="productlist" class="fs-3">
                    <p class="load">products loading ...</p>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="jQuery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="ajax.js"></script> -->
    <script>
    $(function() {
        function getSport(){
            $.ajax({
                url: 'includes/dashboard.inc.php',
                method: 'post',
                data: {action: 'fetchsp'},
                success: function(data) {
                    $('#productlist').html(data);
                }
            });
        }
        function getPCs(){
            $.ajax({
                url: 'includes/dashboard.inc.php',
                method: 'post',
                data: {action: 'fetchpc'},
                success: function(data) {
                    $('#productlist').html(data);
                }
            });
        }
        function getKitchen(){
            $.ajax({
                url: 'includes/dashboard.inc.php',
                method: 'post',
                data: {action: 'fetchkit'},
                success: function(data) {
                    $('#productlist').html(data);
                }
            });
        }
        function getClothes(){
            $.ajax({
                url: 'includes/dashboard.inc.php',
                method: 'post',
                data: {action: 'fetchcl'},
                success: function(data) {
                    $('#productlist').html(data);
                }
            });
        }
        $(document).ready(function() {
            getSport();
        });
        $('#sport').on('click', function(e) {
            e.preventDefault();
            getSport();
        })
        $('#pcs').on('click', function(e) {
            e.preventDefault();
            getPCs();
        })
        $('#kitchen').on('click', function(e) {
            e.preventDefault();
            getKitchen();
        })
        $('#clothes').on('click', function(e) {
            e.preventDefault();
            getClothes();
        })
        $('body').on('click','.infobtn', function(e) {
            e.preventDefault();
            $.ajax({
                url: 'includes/dashboard.inc.php',
                method: 'post',
                data: {infoRef: this.dataset.id},
                success: function(response) {   
                    let infos = JSON.parse(response);
                    console.log(response); 
                    let sold = "";
                    let newprice = "";
                    if (infos.sold === null) {
                        sold = "--";
                        newprice = "--";
                    }
                    else {
                        sold = infos.sold;
                        newprice = infos.newprice;
                    }
                    Swal.fire({
                        title: `<strong>Product num ${infos.reference}</strong>`,
                        icon: 'info',
                        html:
                            `<img src=\"images/${infos.image}\" alt=\"error\" style=\"width: 25rem; height: 25rem;\">
                            Product name: <b>${infos.name}</b><br/>
                            Product type: <b>${infos.type}</b><br/>
                            Quantity stored: <b>${infos.quantity}</b><br/>
                            Price: <b>${infos.price}€</b><br/>
                            Sold: <b>${sold}%</b><br/>
                            New price: <b>${newprice}€</b><br/>
                            Description: <p>${infos.description}</p>
                            `,
                        showCloseButton: true,
                        showCancelButton: false,
                        focusConfirm: false,
                        confirmButtonText:
                        '<i class="fa fa-thumbs-up"></i> Great!',
                        confirmButtonAriaLabel: 'Thumbs up, great!',
                  })
                }
            })
        })
    })
    </script>
    <style>
        [href]:hover {
            background-color: red;
        }
        #productlist {
            margin-top: 50px;
            margin-left: 50px;
        }
        .load {
            margin-left: 400px;
        }
        .cont1,.cont2 {
            background-color: #910000;
        }
        .cont1 {
            height: 100vh;
        }
    </style>
</body>
</html>