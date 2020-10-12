
<section class="sec-page-title main-color">
    <div class="container">
        <div class="col-md-12">
            <h2 style="color:#fff">Bảng giá gói dịch vụ</h2>
        </div>
    </div>
</section>
<section class="over-section" id="over-section">
    <div class="container">
        <div class="row">
            
                <a href="<?=fullAddress().'#banggia'?>">
                <div class="col-md-6 col-xs-6">
                    <div class="item-over">
                        <p><img src="<?=resizeImg('bang_gia.png',48,48,0)?>" alt=""></p>
                        <p>Bảng giá gói dịch vụ</p>
                    </div>
                </div>
                </a>

                <a href="<?=fullAddress().'#chitiet'?>">
                <div class="col-md-6 col-xs-6">
                    <div class="item-over">
                        <p><img src="<?=resizeImg('chtiet_dich_vu.png',48,48,0)?>" alt=""></p>
                        <p>Chi tiết gói dịch vụ</p>
                    </div>
                </div>
                </a>
            
        </div>
    </div>
</section>
<section class="sec-content" id="banggia">
    <div class="container">
        <h3 class="main-title">Bảng giá gói dịch vụ</h3>
        <div class="row">
            <?php for ($i=0;$i<4;$i++){ ?>
                <div class="col-md-3">
                    <div class="item-banggia">
                        <div class="hd text-center">
                            <br><p>User/tháng</p><hr>
                            <h3>Liên hệ 19001238</h3>
                        </div>
                        <div class="bdy text-center">
                            <div class="btn">Call center</div>
                        </div>
                        <div class="ft text-center"><br>
                            <p>+ Tổng đài Call Center + CRM(CS)</p>
                            <p>+ QL vụ việc tiếp nhận + Báo cáo</p>
                            <hr>
                            <div class="text-center">
                                <p><a href="<?=fullAddress().'#chitiet'?>"><b>Xem chi tiết</b></a></p>
                                <p><a onclick="$('#form-dangky').addClass('opened')" href="javascript:void(0)" class="btn btn-color" style="padding: 5px 15px">Liên hệ</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="sec-content bg-blue" id="chitiet">
    <div class="container">
        <h3 class="main-title">Chi tiết gói dịch vụ</h3><br>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-banggia">
                        <thead>
                            <tr>
                                <td width="30%"></td>
                                <td align="center">Call center</td>
                                <td align="center">Telesales (Outbound)</td>
                                <td align="center">Omnichannel (Inbound)</td>
                                <td align="center">Contact Center</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0;$i<5;$i++){ ?>
                                <tr rw="<?=$i?>" class="title-row ck_row row_<?=$i?>">
                                    <td colspan="5"><span class="fa fa-caret-right"></span>&nbsp;Khởi tạo, duy trì, hỗ trợ</td>
                                </tr>
                                <?php for ($j=0;$j<3;$j++){ ?>
                                <tr class="content_<?=$i?>" style="display:none">
                                    <td>Chi phí khảo sát hạ tầng, triển khai, đào tạo</td>
                                    <td align="center">✔</td>
                                    <td align="center">✔</td>
                                    <td align="center">Liên hệ</td>
                                    <td align="center">Liên hệ</td>
                                </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
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
<section class="sec-content bg-blue">
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
<?php include ('button-lienhe.php') ?>

<script>
    $('.ck_row').click(function (e) { 
        e.preventDefault();
        var row = $(this).attr('rw');
        $('.content_'+row).slideToggle();
    });
</script>
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