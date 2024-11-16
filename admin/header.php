<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN Rolex</title>
    <link rel="icon" href="./img/admin-logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/custom-admin.css">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">

        <!-- Slide -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSlidebar">

            <!-- Slide - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <!-- <div class="slide-brand-icon">
                </div> -->
                <!-- <div class="slidebar-brand-text mx-3"><img src="./img/logo_shop.jpg" width="225" alt=""></div> -->
            </a>

            <!-- Divider -->
            <hr class="slidbar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a href="index.php" class="nav-link">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Trang quản trị</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="slidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Danh mục quản trị
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-brands fa-slack"></i>
                    <span>Quản lý danh mục</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?act=add_dm">Thêm danh mục</a>
                        <a class="collapse-item" href="?act=list_dm">Danh sách danh mục</a>
                    </div>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-brands fa-slack"></i>
                    <span>Quản lý sản phẩm</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?act=add_dm">Thêm danh mục</a>
                        <a class="collapse-item" href="?act=list_dm">Danh sách danh mục</a>
                    </div>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-brands fa-slack"></i>
                    <span>Quản lý tài khoản</span>
                </a>
            </li>
        </ul>
    </div>
</body>

</html>