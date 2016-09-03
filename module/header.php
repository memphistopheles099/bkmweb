<?php require "module/config.php" ?>
<div class="allcontain">
    <div class="header">
            <ul class="socialicon">
                <li><a href="https://www.facebook.com/WeAreBKMedia/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/user/bkmediahcm/"><i class="fa fa-youtube"></i></a></li>
                <li><a href="contact.html"><i class="fa fa-envelope-o"></i></a></li>
            </ul>
            <ul class="givusacall"></ul>
            <ul class="socialicon"></ul>
            <ul class="givusacall">
                <li>Gọi ngay : (84)90 511 9679 </li>
            </ul>
            <!--<ul class="logreg">
                <li><a href="#">Login </a> </li>
                <li><a href="#"><span class="register">Register</span></a></li>
            </ul>-->
    </div>
    <!-- Navbar Up -->
    <nav class="topnavbar navbar-default topnav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
                    <span class="sr-only"> Toggle navigaion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="#"><img src="image/logo1.jpg" alt="logo"></a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="upmenu">
            <ul class="nav navbar-nav" id="navbarontop">
                <li class="active"><a href="<?php echo URL ?>/index.php">TRANG CHỦ</a> </li>
                <li class="active"><a href="#">GIỚI THIỆU</a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SẢN PHẨM<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdowncostume">
                        <li><a href="<?php echo URL ?>/products.php">Ấn phẩm</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">Nhiếp ảnh</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DỊCH VỤ <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdowncostume">
                            <li><a href="#">Thiết kế - Dựng clip</a></li>
                            <li><a href="#">Quay phim - Chụp ảnh</a></li>
                            <li><a href="3">Livestream</a></li>
                            <li><a href="#">Truyền thông</a></li>
                        </ul>
                </li>
                <li>
                    <a href="contact.html">HÌNH ẢNH HOẠT ĐỘNG</a>
                </li>
                <li>
                    <a href="<?php echo URL?>/contact.php">LIÊN LẠC</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
