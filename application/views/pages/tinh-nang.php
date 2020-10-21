<style>
    
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
                        <p><img src="<?=resizeImg($item['hinh_anh'],38,38,0)?>" alt=""></p>
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
                <ul class="nav-my-tab">
                    <?php foreach ($post as $i =>$p){ ?>
                        <li idloai="<?=$p['id_loai']?>" idshow="tab_<?=$p['id']?>" class="btn-tab <?=$p['id_loai']?> <?=$i==0 ? 'active':''?>">
                           <?=$p['ten_vn']?></a>
                        </li>
                    <?php } ?>
                    <br>
                </ul>
                <div class="tab-content">
                    <?php foreach ($post as $k =>$p){ ?>
                        <div id="tab_<?=$p['id']?>" class="btn-tab-content <?=$p['id_loai']?>" style="display:<?=$k==0 ? 'block':'none'?>">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <img src="<?=base_url('upload/images/'.$p['hinh_anh'])?>" alt="">
                                </div>
                                <div class="col-md-6 text-left">
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
<script>
 $('.btn-tab').click(function (e) { 
     e.preventDefault();
     var content = $(this).attr('idshow');
     var idloai = $(this).attr('idloai');

     $('.btn-tab.'+idloai).removeClass('active');
     $(this).addClass('active');
     $('.btn-tab-content.'+idloai).hide();
     $('#'+content).show();
 });
</script>