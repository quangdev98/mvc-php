<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TechAsia - Sales_history_Details</title>
    <link rel="stylesheet" href="<?php echo Helper::urlAsset('Admin_asset') ?>css/bootstrap4_3_1.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Helper::urlAsset('Admin_asset') ?>css/font-awesome/all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Helper::urlAsset('Admin_asset') ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Helper::urlAsset('Admin_asset') ?>css/responsive.css">
</head>

<body>
    <header id="header">
        <div class="showMenu"><img src="<?php echo Helper::urlAsset('Admin_asset') ?>images/iconBar.png"></div>
        <div class="container">
            <div class="logo-web">
                <a href="index.html"><img class="displayNone" src="<?php echo Helper::urlAsset('Admin_asset') ?>images/logo-TechAsia.png">
                </a>
            </div>
        </div>
    </header>
    <nav class="tab-control" id="tab-controls">
        <ul>
            <li class="d-flex justify-content-between align-items-center">
                <a href=""><img src="<?php echo Helper::urlAsset('Admin_asset') ?>images/logo-TechAsia.png" alt=""></a>
                <img class="icon-bar hide-menu" src="<?php echo Helper::urlAsset('Admin_asset') ?>images/iconBar.png" alt="">
            </li>
            <li class="item-sidebar <?php echo $_GET['url'] == 'admin' ? 'active' : '' ?>">
                <a class="d-flex align-items-center" href="/admin"><i class="fad fa-home fa-fw"></i> Trang chủ</a>
            </li>
            <li class="item-sidebar <?php echo $_GET['url'] == 'category' ? 'active' : '' ?>">
            	<a class="d-flex align-items-center"  href="/category"><i class="fad fa-chart-line fa-fw"></i> Thể loại</a>
            </li>
            <li class="item-sidebar <?php echo $_GET['url'] == 'posts' ? 'active' : '' ?>">
            	<a class="d-flex align-items-center"  href="/posts"><i class="fad fa-cube"></i> Bài viết</a>
            </li>
            <li class="item-sidebar <?php echo $_GET['url'] == 'users' ? 'active' : '' ?>">
            	<a class="d-flex align-items-center"  href="/users"><i class="fad fa-users"></i> User</a>
            </li>
        </ul>
    </nav>
    <main id="wrap-main">
        
        <div class="wrapper">
            <div class="wrap-form">
                <?php require_once 'Views/Admin/'.$data["Page"].'.php' ?>
            </div>
        </div>
    </main>
    <footer id="footer" class="position">
        <div class="container">
            <p>&copy; <span id="fecthYear"></span> Techasiavn | All Rights Reserved.</p>
        </div>
    </footer>
</body>
<script src="<?php echo Helper::urlAsset('Admin_asset') ?>js/jquery.min.js"></script>
<script src="<?php echo Helper::urlAsset('Admin_asset') ?>js/popper.min.js"></script>
<script src="<?php echo Helper::urlAsset('Admin_asset') ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo Helper::urlAsset('Admin_asset') ?>js/main.js"></script>

</html>


