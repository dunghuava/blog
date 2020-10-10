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
            <div class="col-md-3 col-xs-6">
                <div class="item-over">
                    <p><img src="<?=base_url('upload/icon1.png')?>" alt=""></p>
                    <p>Dịch vụ Mixci là gì ?</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="item-over">
                    <p><img src="<?=base_url('upload/icon2.png')?>" alt=""></p>
                    <p>Đối tượng sử dụng Mixci</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="item-over">
                    <p><img src="<?=base_url('upload/icon3.png')?>" alt=""></p>
                    <p>Tại sao nên chọn Mixci ?</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="item-over">
                    <p><img src="<?=base_url('upload/icon4.png')?>" alt=""></p>
                    <p>Khách hàng của Mixci</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-content">
    <div class="container">
        <h3 class="main-title">Dịch vụ MiCXM là gì ?</h3>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>MiCXM hay còn gọi là Contact Center là hệ thống tổng đài chăm sóc khách hàng, bán hàng được tích hợp qua nhiều kênh như thoại, live chat, email, sms, facebook…..tại một nơi duy nhất. Đây được xem là công cụ liên kết đa chiều giữa doanh nghiệp và khách hàng giúp tiếp cận, chăm sóc khách hàng một cách hiệu quả và nâng cao tính trải nghiệm của người dùng.</p>
                <br><p>
                    <iframe class="frm-reponsive" width="560" height="315" src="https://www.youtube.com/embed/gssduBBhbc4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="sec-content bg-blue">
    <div class="container">
        <h3 class="main-title">Đối tượng sử dụng MiCXM</h3>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Đối tượng sử dụng dịch vụ MiCXM là các doanh nghiệp, các tổ chức, các cửa hàng, siêu thị,… có thể phân loại theo mục đích sử dụng như sau</p>
                <br>
            </div>
            <?php for ($i=0;$i<=7;$i++){ ?>
            <div class="col-md-3">
                <div class="item-view">
                    <p><img src="<?=base_url('upload/icon5.png')?>" alt=""></p>
                    <h4><b>Telesales</b></h4>
                    <p>Ngân hàng, bảo hiểm, tài chính, giáo dục và hầu hết các loại hình doanh nghiệp khác muốn tìm kiếm khách hàng qua điện thoại</p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="sec-content">
    <div class="container">
        <h3 class="main-title">Tại sao nên chọn MiCXM</h3>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Đối tượng sử dụng dịch vụ MiCXM là các doanh nghiệp, các tổ chức, các cửa hàng, siêu thị,… có thể phân loại theo mục đích sử dụng như sau</p>
                <br>
            </div>
            <?php for ($i=0;$i<=7;$i++){ ?>
            <div class="col-md-3 col-xs-6">
                <div class="item-view">
                    <p><img src="<?=base_url('upload/icon6.png')?>" alt=""></p>
                    <h4><b>Telesales</b></h4>
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
<section class="sec-content">
    <div class="container">
        <h3 class="main-title">Khách hàng của MiCXM</h3><br>
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
                <?php for ($i=0;$i<=12;$i++){ ?>
                <div class="col-md-12">
                    <div class="item-feedback">
                        <blockquote>
                           <p> Hệ thống có đầy đủ tính năng, dễ dàng sử dụng giao diện trực quan. Có thể phân tầng theo từng lớp : Admin, Senior, Staff, Reporter, QC,.... Có hỗ trợ phần knowledge base tích hợp trên CRM dễ dàng hỗ trợ cho Agent</p>
                        </blockquote>
                        <div class="item-cus">
                            <img src="<?=base_url('upload/img.jpg')?>" alt="">
                            <h3>Anh. Văn Dũng</h3>
                            <p>Fullstack developper tại Tokyo</p>
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
                        <a href="tel:0383868205"><span class="fa fa-phone"></span>&nbsp;Liên hệ tư vấn</a>
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