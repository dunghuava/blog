<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <base href="<?=base_url()?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/lib/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/web.css?v='.time())?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/reponsive.css?v='.time())?>">
    <link rel="stylesheet" href="<?=base_url('assets/lib/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/lib/slick/slick.css')?>">
    <script src="<?=base_url('assets/lib/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/slick/slick.min.js')?>"></script>
    <title>Trang chủ</title>

</head>
<body>
<nav class="main-nav <?=check_isMobile() ? 'mobile':''?>">
    <?php if (!check_isMobile()){ ?>
    <div class="top-nav hidden-xs">
        <div class="container"> 
            <div class="row">
                <div class="col-md-6">
                    <div class="text-left">
                        <li><span class="fa fa-home"></span><a href="">Trang chủ</a></li>
                        <li><span class="fa fa-phone"></span><a href="">0383868205</a></li>
                        <li><span class="fa fa-envelope"></span><a href="">dunghua@pavietnam.vn</a></li>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-right">
                        <li><span class="fa fa-home"></span><a href="">FAQ</a></li>
                        <li><span class="fa fa-phone"></span><a href="">Đăng ký thử nghiệm</a></li>
                        <li><span class="fa fa-facebook"></span><a href=""></a></li>
                        <li><span class="fa fa-youtube"></span><a href=""></a></li>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <?php } ?>
    <div class="main-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="">
                        <img src="<?=base_url('upload/logo.png')?>" alt="">
                    </a>
                    <span id="btn-bars" class="hidden-lg hidden-md" style="color:#fff;float:right;font-size:20px;margin-top:15px">
                        <span class="fa fa-bars"></span>&nbsp;menu
                    </span>
                </div>
                <div class="col-md-8">
                    <ul class="ls-main-menu closed">
                        <li class="btn-close hidden-lg hidden-md text-right" style="color:#fff;font-size:20px">
                            <span class="fa fa-close"></span>
                        </li>
                        <li class="hidden-lg hidden-md">
                            <a href="">
                                <img src="<?=base_url('upload/logo.png')?>" alt="">
                            </a>
                        </li>
                        <li><a href="">Trang chủ</a></li>
                        <li class="have-menu">
                            <a href="">Giới thiệu</a>
                            <ul class="sub-menu">
                                <li><img src="<?=base_url('upload/icon8.png')?>" alt="">&nbsp;<a href="">Sub 1</a></li>
                                <li><img src="<?=base_url('upload/icon8.png')?>" alt="">&nbsp;<a href="">Sub 2</a></li>
                                <li><img src="<?=base_url('upload/icon8.png')?>" alt="">&nbsp;<a href="">Sub 3</a></li>
                                <li><img src="<?=base_url('upload/icon8.png')?>" alt="">&nbsp;<a href="">Sub 4</a></li>
                                <li><img src="<?=base_url('upload/icon8.png')?>" alt="">&nbsp;<a href="">Sub 5</a></li>
                            </ul>
                        </li>
                        <li><a href="">Tính năng</a></li>
                        <li><a href="">Giải pháp</a></li>
                        <li class="have-menu">
                            <a href="">Lĩnh vực</a>
                            <ul class="sub-menu">
                                <li><img src="<?=base_url('upload/icon8.png')?>" alt="">&nbsp;<a href="">Sub 1</a></li>
                                <li><img src="<?=base_url('upload/icon8.png')?>" alt="">&nbsp;<a href="">Sub 2</a></li>
                                <li><img src="<?=base_url('upload/icon8.png')?>" alt="">&nbsp;<a href="">Sub 3</a></li>
                                <li><img src="<?=base_url('upload/icon8.png')?>" alt="">&nbsp;<a href="">Sub 4</a></li>
                                <li><img src="<?=base_url('upload/icon8.png')?>" alt="">&nbsp;<a href="">Sub 5</a></li>
                            </ul>
                        </li>
                        <li><a href="">Bảng giá</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<?php 
    if (check_isMobile()){
?>
<script>
    $('li.have-menu .sub-menu').hide();
</script>
<?php } ?>