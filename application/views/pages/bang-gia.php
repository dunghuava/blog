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
            <div class="col-md-3 col-xs-6">
                <div class="item-over">
                    <p><img src="<?=base_url('upload/icon1.png')?>" alt=""></p>
                    <p>Dịch vụ IPCALL là gì ?</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="item-over">
                    <p><img src="<?=base_url('upload/icon2.png')?>" alt=""></p>
                    <p>Đối tượng sử dụng IPCALL</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="item-over">
                    <p><img src="<?=base_url('upload/icon3.png')?>" alt=""></p>
                    <p>Tại sao nên chọn IPCALL ?</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="item-over">
                    <p><img src="<?=base_url('upload/icon4.png')?>" alt=""></p>
                    <p>Khách hàng của IPCALL</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-content">
    <div class="container">
        <h3 class="main-title">Dịch vụ IPCALL là gì ?</h3>
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
                                <p><a href=""><b>Xem chi tiết</b></a></p>
                                <p><a href="" class="btn btn-color">Liên hệ</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="sec-content bg-blue">
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
                <?php for ($i=0;$i<=12;$i++){ ?>
                <div class="col-md-2">
                    <div class="item-small-slide">
                        <a href="">
                            <img src="<?=base_url('upload/icon7.png')?>" alt="">
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
                <?php for ($i=0;$i<=12;$i++){ ?>
                <div class="col-md-2">
                    <div class="item-small-slide">
                        <a href="">
                            <img src="<?=base_url('upload/icon7.png')?>" alt="">
                        </a>
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

<script>
    $('.ck_row').click(function (e) { 
        e.preventDefault();
        var row = $(this).attr('rw');
        $('.content_'+row).slideToggle();
    });
</script>