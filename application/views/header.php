<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <?php include ('pages/seo.php') ?>
    <base href="<?=base_url()?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/lib/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/web.css?v='.time())?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/reponsive.css?v='.time())?>">
    <link rel="stylesheet" href="<?=base_url('assets/lib/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/lib/slick/slick.css')?>">
    <script src="<?=base_url('assets/lib/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/slick/slick.min.js')?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="main-nav <?=check_isMobile() ? 'mobile':''?>">
    <?php 
    if (!check_isMobile()){ ?>
    <div class="top-nav hidden-xs">
        <div class="container"> 
            <div class="row">
                <div class="col-md-6">
                    <div class="text-left">
                        <li><span class="fa fa-home"></span><a href="">Trang chủ</a></li>
                        <li><span class="fa fa-phone"></span><a href="tel:<?=$info[0]['hotline']?>"><?=$info[0]['hotline']?></a></li>
                        <li><span class="fa fa-envelope"></span><a href="mailto:<?=$info[0]['email']?>"><?=$info[0]['email']?></a></li>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-right">
                        <li><span class="fa fa-question-circle"></span><a href="<?=base_url('cham-soc-khach-hang')?>.html">FAQ</a></li>
                        <li><span class="fa fa-phone"></span><a onclick="$('#form-dangky').addClass('opened')" href="javascript:void(0)">Đăng ký thử nghiệm</a></li>
                        <li><span class="fa fa-facebook"></span><a href="<?=$info[0]['facebook']?>"></a></li>
                        <li><span class="fa fa-youtube"></span><a href="<?=$info[0]['youtube']?>"></a></li>
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
                        <img src="<?=resizeImg($info[0]['logo'],190,80,0)?>" alt="">
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
                        <!-- <li class="hidden-lg hidden-md">
                            <a href="">
                                <img src="<?=base_url('upload/logo.png')?>" alt="">
                            </a>
                        </li> -->
                        <li><a href="<?=base_url()?>">Trang chủ</a></li>
                        <?php 
                            $all_category = $this->Category_M->all(['hien_thi'=>1,'id_loai'=>0]);
                            foreach ($all_category as $item)
                            {
                            $list_sub = $this->Category_M->all(['hien_thi'=>1,'id_loai'=>$item['id']]);
                        ?>
                        <li class="<?=!empty($list_sub) ? 'have-menu':''?>">
                            <a href="<?=base_url($item['alias_vn'])?>.html"><?=$item['ten_vn']?></a>

                            <?php  
                                if (!empty($list_sub)) {
                            ?>
                            <ul class="sub-menu" style="width: 550px">
                                <?php 
                                    foreach ($list_sub as $key => $sub) {
                                ?>
                                <li style="width: 45%"><img src="<?=resizeImg($sub['hinh_anh'],25,25,0)?>" alt="">&nbsp;
                                    <a href="<?=base_url($item['alias_vn'])?>.html#<?=$sub['id']?>" style="font-size: 14px"><?=$sub['ten_vn']?></a>
                                    <br>
                                    <p class="sub-title"><?=strip_tags(mb_substr($sub['mo_ta_vn'], 0, 100,"UTF-8").' ...');?></p>
                                </li>
                        
                                <?php } ?>
                            </ul>
                        <?php } ?>
                        </li>
                        <?php 
                            } 
                        ?>

                        <li><a href="<?=base_url('lien-he-tu-van-va-hop-tac-voi-ipcall.html')?>" class="btn btn-color" style="padding: 5px 15px;background: #248a63;">Liên hệ</a></li>
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

<div id="backtop"  title="Về đầu trang">
    <span class="fa fa-arrow-up"></span>
</div>
<script>
    $("#backtop").click(function() {
        $("html,body").animate({ scrollTop: 0 },200);
        return false;
    });
</script>