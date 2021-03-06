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
                    <p><?=$info[0]['mo_ta_vn']?></p>
                    <p><?=$info[0]['dia_chi_vn']?></p
                    >
                    <p><i class="fa  fa-phone"></i>  Hotline: <?=$info[0]['hotline']?></p>
                    <p><i class="fa  fa-envelope-o"></i> Email: <?=$info[0]['email']?></p>
                    <div class="contact-social-links">
                        <ul>
                            <li style="float: left;margin-right: 15px">
                                <a href="<?=$info[0]['facebook']?>" style="font-size: 25px;font-weight: bold;"><i class="fa  fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="<?=$info[0]['youtube']?>" style="font-size: 25px;font-weight: bold;color: red"><i class="fa  fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <form id="form-contact" method="POST">
                <div class="col-md-6 contact-form">
                    <div class="col-md-12" style="margin-bottom: 10px">
                        <label class="midesk_label_title">Tên doanh nghiệp<span style="color: red">(*)</span></label>
                        <input type="text" id="doanh_nghiep" name="doanh_nghiep" class="form-control" placeholder="Tên doanh nghiệp" required="">
                    </div>
                    <div class="col-md-12" style="margin-bottom: 10px">
                        <label class="midesk_label_title">Họ tên<span style="color: red">(*)</span></label>
                        <input type="text" id="ten" name="ten" class="form-control" placeholder="Nhập họ tên bạn" required="">
                    </div>
                    <div class="col-md-12" style="margin-bottom: 10px">
                        <label class="midesk_label_title">Số điện thoại<span style="color: red">(*)</span></label>
                        <input type="text" id="sdt" name="sdt" class="form-control" placeholder="" required="">
                    </div>
                    <div class="col-md-12" style="margin-bottom: 10px">
                        <label class="midesk_label_title">Email<span style="color: red">(*)</span></label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="" required="">
                    </div>
                    <div class="col-md-12" style="margin-bottom: 10px">
                        <label class="midesk_label_title">Nội dung<span style="color: red">(*)</span></label>
                        <textarea id="noi_dung" name="noi_dung" class="form-control" placeholder="" required=""></textarea>
                    </div>
                    <div class="col-md-12" style="margin-top: 20px">
                        <button type="submit" name="submit" class="btn btn-default pull-right btn-sm">Gửi yêu cầu</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <br><br>
</section>
<script>
    $('#form-contact').submit(function(event){  
        event.preventDefault();  

            $.ajax({  
                url:"<?=base_url()?>web/addContact",  
                method:"POST",  
                data:$('#form-contact').serialize(),  
                success: function (data) {
                    swal(
                        'Thông tin đã được gửi thành công!',
                        '',
                        'success'
                    );

                    $('#form-contact').find('input:text').val('');
                    $('#form-contact').find('#email').val('');
                    $('#form-contact').find('textarea').val('');
                }
            });  

    });
</script>