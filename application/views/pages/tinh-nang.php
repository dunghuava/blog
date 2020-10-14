<section class="sec-slider">
    <div class="main-slider">
        <div class="slider-item">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 hidden-xs">
                        <img src="<?=base_url('upload/img01.png')?>" alt="">
                    </div>
                    <div class="col-md-6">
                        <h2>
                            CRM Contact Center <br>
                        </h2>
                        <h3>Case management  - Quản lý chăm sóc khách hàng đa kênh hợp nhất <br>
                            Hợp nhất đa kênh omni-channel như thoại, email, website, live chat, sms, social media (facebook, zalo,...) tại một giao diện duy nhất.    </h3>
                            <br>
                            <br>
                            <button type="button" onclick="$('#form-dangky').addClass('opened')" class="btn btn-default btn-sm">Tư vấn triển khai</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?=base_url('upload/img02.png')?>" alt="">
                    </div>
                    <div class="col-md-6">
                        <h2>
                            CRM Contact Center <br>
                        </h2>
                        <h3> Giúp nâng cao hiệu suất làm việc của nhân viên telesales với chiến dịch quy số tự động Predictive Dialer</h3>
                        <br>
                        <br>
                        <button type="button" onclick="$('#form-dangky').addClass('opened')" class="btn btn-default btn-sm">Tư vấn triển khai</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="over-section" id="over-section">
    <div class="container">
        <div class="row">
            <?php  
                $submenu=$this->Category_M->all(['id_loai'=>$data['id']]);
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
<?php foreach ($submenu as $key =>$item){ ?>
<section id="<?=$item['id']?>" class="sec-content <?=$key%2==0 ? 'bg-blue':''?>" id="7">
    <div class="container">
        <h3 class="main-title"><?=$item['ten_vn']?></h3>
        <div class="row">
            <div class="col-md-12 text-center">
               
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

<?php if (!check_isMobile()){ ?>
    <script>
        window.onscroll = function() {myFunction()};
        var navbar = document.getElementById("over-section");
        var sticky = navbar.offsetTop;
        function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
        }
    </script>
<?php } ?>