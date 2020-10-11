<style type="text/css">
    .main-title1::after {
    
    margin: 11px 0px!important;
    
}
</style>
<section class="sec-page-title main-color">
    <div class="container">
        <div class="col-md-12">
            <h2 style="color:#fff">Liên hệ tư vấn và hợp tác với IPCALL</h2>
        </div>
    </div>
</section>
<section class="sec-content" id="banggia">
    <div class="container">
        <h3 class="main-title">Liên hệ tư vấn và hợp tác với IPCALL</h3>
        <p style="text-align: center;">(Đội ngũ nhân viên phục vụ khách hàng nhiệt tình của chúng tôi sẽ hỗ trợ Quý khách)</p>
    </div>
</section>
<section class="sec-content bg-blue" id="chitiet">
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-address" style="color:#333333">
                    <h3 class="main-title main-title1" style="text-align: left;">Địa chỉ liên hệ</h3>
                    <p> CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ IPCALL</p>
                    <p> Tầng 1, Tòa nhà PVFCCO, 43 Mạc Đĩnh Chi, P.Đa Kao, Quận 1, Tp.HCM   <br> Địa chỉ giao dịch: 271/10 An Dương Vương, P.3, Q.5, Tp. HCM</p
                    >
                    <p><i class="fa  fa-phone"></i>  Hotline: 19001238 hoặc (028)7777 0888</p>
                    <p><i class="fa  fa-envelope-o"></i> Email: ipcall@gmail.com</p>
                    <div class="contact-social-links">
                        <ul>
                            <li style="float: left;margin-right: 15px">
                                <a href="https://www.facebook.com/micxm.contactcenter/" style="font-size: 25px;font-weight: bold;"><i class="fa  fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UC_GUS6PQA981lzvKG9NPz7Q" style="font-size: 25px;font-weight: bold;color: red"><i class="fa  fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 contact-form">
                <div class="col-md-12">
                    <label class="midesk_label_title">Tên doanh nghiệp<span style="color: red">(*)</span></label>
                    <input type="text" name="Tên doanh nghiệp" class="form-control" placeholder="Tên doanh nghiệp" required="">
                </div>
                <div class="col-md-12">
                    <label class="midesk_label_title">Họ tên<span style="color: red">(*)</span></label>
                    <input type="text" name="var_fullname" class="form-control" placeholder="Nhập họ tên bạn" required="">
                </div>
                <div class="col-md-12">
                    <label class="midesk_label_title">Số điện thoại<span style="color: red">(*)</span></label>
                    <input type="text" name="Số điện thoại" class="form-control" placeholder="" required="">
                </div>
                <div class="col-md-12">
                    <label class="midesk_label_title">Email<span style="color: red">(*)</span></label>
                    <input type="email" name="var_email" class="form-control" placeholder="" required="">
                </div>
                <div class="col-md-12">
                    <label class="midesk_label_title">Nội dung<span style="color: red">(*)</span></label>
                    <textarea name="var_content" class="form-control" placeholder="" required=""></textarea>
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                    <button type="submit" name="submit" onclick="submitForm(this)" class="btn btn-default pull-right btn-sm">Gửi yêu cầu</button>
                </div>
            </div>
        </div>

    </div>
    <br><br>
</section>

<script>
    $('.ck_row').click(function (e) { 
        e.preventDefault();
        var row = $(this).attr('rw');
        $('.content_'+row).slideToggle();
    });
</script>