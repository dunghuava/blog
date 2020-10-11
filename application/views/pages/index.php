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
                $gioi_thieu=$this->Category_M->all(['id_loai'=>1]);
            ?>
            
            <?php foreach ($gioi_thieu as $key => $item) {?>
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
<section class="sec-content" id="7">
    <div class="container">
        <h3 class="main-title">Dịch vụ IPCALL là gì ?</h3>
        <div class="row">
            <div class="col-md-12 text-center">
                <?php  
                    $dich_vu=$this->Category_M->find(['id'=>7]);
                ?>
                <div style="text-align: left;"><?=$dich_vu['mo_ta_vn']?></div>
                <br><p>
                    <iframe class="frm-reponsive" width="560" height="315" src="https://www.youtube.com/embed/gssduBBhbc4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="sec-content bg-blue" id="8">
    <div class="container">
        <h3 class="main-title">Đối tượng sử dụng IPCALL</h3>
        <div class="row">
            <?php  
                $doi_tuong=$this->Category_M->find(['id'=>8]);
                $list_doi_tuong=$this->Category_M->all(['id_loai'=>8]);
            ?>
            <div class="col-md-12 text-center">
                <p><?=$doi_tuong['mo_ta_vn']?></p>
                <br>
            </div>
            <?php foreach ($list_doi_tuong as $key => $item) {?>
            <div class="col-md-3">
                <div class="item-view">
                    <p><img src="<?=resizeImg($item['hinh_anh'],70,70,0)?>" alt=""></p>
                    <h4><b><?=$item['ten_vn']?></b></h4>
                    <div style="height: 90px;"><?=$item['mo_ta_vn']?></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="sec-content" id="9">
    <div class="container">
        <h3 class="main-title">Tại sao nên chọn IPCALL</h3>
        <div class="row">
            <?php  
                $tai_sao=$this->Category_M->find(['id'=>9]);
                $list_tai_sao=$this->Category_M->all(['id_loai'=>9]);
            ?>
            <div class="col-md-12 text-center">
                <p><?=$tai_sao['mo_ta_vn']?></p>
                <br>
            </div>
            <?php foreach ($list_tai_sao as $key => $item) {?>
            <div class="col-md-3 col-xs-6">
                <div class="item-view">
                    <p><img src="<?=resizeImg($item['hinh_anh'],70,70,0)?>" alt=""></p>
                    <h4><b><?=$item['ten_vn']?></b></h4>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="sec-content bg-blue">
    <div class="container">
        <h3 class="main-title">Những câu hỏi thường gặp</h3><br>
        <div class="row">
           <div class="col-md-6">
               <?php foreach ($data['list_question'] as $key => $question) {
                    if($key<5){
                ?>
                    <div class="item-question">
                        <div class="q-border" data-toggle="collapse" data-target="#content_<?=$key?>">
                            <p class="text-overflow-mb" style="width: 10%;float: left;"><span class="q-btn"><span class="fa fa-angle-down"></span></span>&nbsp;<?=$question['cau_hoi_vn']?></p>
                        </div>
                        <div class="item-anwser collapse" id="content_<?=$key?>">
                            <p><?=$question['dap_an_vn']?></p>
                        </div>
                    </div>
               <?php } } ?>
           </div>
           <div class="col-md-6">
                <?php foreach ($data['list_question'] as $key1 => $question) {
                    if($key1>4 && $key1<10){
                ?>
                    <div class="item-question">
                        <div class="q-border" data-toggle="collapse" data-target="#content_<?=$key1?>">
                            <p class="text-overflow-mb" style="width: 10%;float: left;"><span class="q-btn"><span class="fa fa-angle-down"></span></span>&nbsp;<?=$question['cau_hoi_vn']?></p>
                        </div>
                        <div class="item-anwser collapse" id="content_<?=$key1?>">
                            <p><?=$question['dap_an_vn']?></p>
                        </div>
                    </div>
               <?php } } ?>
           </div>
        </div>
    </div>
</section>
<section class="sec-content" id="21">
    <div class="container">
        <h3 class="main-title">Khách hàng của IPCALL</h3><br>
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
<section class="sec-content bg-blue">
    <div class="container">
        <h3 class="main-title">Phản hồi của khách hàng</h3><br>
        <div class="row">
            <div class="slick-feedback">
                <?php foreach ($data['list_feedback'] as $feedback) {?>
                <div class="col-md-12">
                    <div class="item-feedback">
                        <blockquote>
                           <p><?=$feedback['noi_dung_vn']?></p>
                        </blockquote>
                        <div class="item-cus">
                            <img src="<?=base_url('upload/images/').$feedback['hinh_anh']?>" alt="">
                            <h3 style="font-weight: bold;"><?=$feedback['ten_vn']?></h3>
                            <p><?=$feedback['chucvu_vn']?></p>
                            <p><?=$feedback['congty_vn']?></p>
                            <a href="">>> Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="sec-content">
    <div class="container">
        <h3 class="main-title">Liên hệ ngay để được tư vấn</h3><br>
        <div class="row">
            <div class="sov text-center">
                <div class="text-center">
                    <div class="btn-contact-now">
                        <a href="<?=base_url('lien-he')?>"><span class="fa fa-phone"></span>&nbsp;Liên hệ tư vấn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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