<?php 
	$data['list_customer']=$this->Customer_M->all(['loai' => 1]);
?>
<section class="sec-content">
    <div class="container">
        <h3 class="main-title">Khách hàng tin dùng</h3><br>
        <div class="row">
            <div class="slick-cus">
                <?php foreach ($data['list_customer'] as $customer) {?>
                <div class="col-md-2">
                    <div class="item-small-slide">
                        <a href="">
                            <img src="<?=resizeImg($customer['hinh_anh'],145,145,0)?>" alt="">
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>