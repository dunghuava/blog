<style>
    .nav-tabs{
        border-bottom:0px;
        width:fit-content;
        margin:auto;
    }
</style>
<?php include ('slider.php') ?>
<section class="over-section" id="over-section">
    <div class="container">
        <div class="row">
            <?php  
                $submenu=$this->Category_M->all(['id_loai'=>$data['id'],'hien_thi'=>1]);
            ?>
            <?php foreach ($submenu as $key => $item) {?>
                <a href="<?=fullAddress().'#'.$item['id']?>">
                <div class="col-md-3 col-xs-6">
                    <div class="item-over">
                        <p><img src="<?=resizeImg($item['hinh_anh'],48,48,0)?>" alt=""></p>
                        <p><?= $item['ten_vn'] ?></p>
                    </div>
                </div>
                </a>
            <?php } ?>
        </div>
    </div>
</section>
<?php 
    foreach ($submenu as $key =>$item){ 
    $post = $this->Post_M->all(['id_loai'=>$item['id'],'hien_thi'=>1]);
?>
<section id="<?=$item['id']?>" class="sec-content <?=$key%2==0 ? 'bg-blue':''?>" id="7">
    <div class="container">
        <h3 class="main-title"><?=$item['ten_vn']?></h3>
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="nav nav-tabs">
                    <?php foreach ($post as $i =>$p){ ?>
                        <li class="<?=$i==0 ? 'active':'no-active'?>" style="background: #0c714b !important;margin:5px;border-radius:8px">
                            <a style="color:#fff;text-decoration:none;background: #0c714b !important;border:none !important;border-radius:8px" data-toggle="tab" href="#tab_<?=$p['id']?>"><?=$p['ten_vn']?></a>
                        </li>
                    <?php } ?>
                </ul>
                <div class="tab-content">
                    <?php foreach ($post as $k =>$p){ ?>
                        <div id="tab_<?=$p['id']?>" class="tab-pane fade in <?=$k==0 ? 'active':'no-active'?>">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <img src="<?=base_url('upload/images/'.$p['hinh_anh'])?>" alt="">
                                </div>
                                <div class="col-md-6 text-left"><br>
                                    <h3 style="color:red"><?=$p['ten_vn']?></h3>
                                    <p><?=$p['noi_dung_vn']?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php
    $setbg='bg-blue';
    include ('list-khachhang.php') 
?>
<?php 
    $setbg='';
    include ('button-lienhe.php') 
?>