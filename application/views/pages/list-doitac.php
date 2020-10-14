<?php 
	$data['list_partner']=$this->Customer_M->all(['loai' => 2]);
?>
<section class="sec-content <?=isset($setbg) ? $setbg:''?>">
    <div class="container">
        <h3 class="main-title">Đối tác tích hợp</h3><br>
        <div class="row">
            <div class="slick-cus">
                <?php foreach ($data['list_partner'] as $partner) {?>
                <div class="col-md-2">
                    <div class="item-small-slide">
                        <a href="">
                            <img src="<?=resizeImg($partner['hinh_anh'],145,145,0)?>" alt="">
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>