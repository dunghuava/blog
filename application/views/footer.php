
    <?php include ('pages/socical.php') ?>

    <form action="" id="form-dangky">
        <table>
            <tr>
                <td align="center">
                    <h3 class="title">Đăng ký thử nghiệm</h3>
                    <p class="t">(Vui lòng để lại thông tin, chúng tôi sẽ liên hệ với bạn)</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Tên doanh nghiệp <span style="color:red">(*)</span></p>
                    <input type="text" id="doanh_nghiep" name="doanh_nghiep" class="input" required>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Họ tên <span style="color:red">(*)</span></p>
                    <input type="text" id="ten" name="ten" class="input" required>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Số điện thoại <span style="color:red">(*)</span></p>
                    <input type="text" id="sdt" name="sdt" class="input" required>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Email <span style="color:red">(*)</span></p>
                    <input type="text" id="email" name="email" class="input" required>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Nội dung <span style="color:red"></span></p>
                    <textarea name="noi_dung" id="noi_dung" rows="3" required></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button onclick="$('#form-dangky').removeClass('opened')" type="button">Đóng <span style="color:red">(x)</span></button>
                    <button type="submit">Gửi yêu cầu</button>
                </td>
            </tr>
        </table>
    </form>
    <?php if (!check_isMobile()){ ?>
        <scction class="sec-contact fixed-contact hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <p><span class="fa fa-cog"></span>&nbsp;Hỗ trợ 24/7</p>
                    </div>
                    <div class="col-md-3">
                        <p><span class="fa fa-envelope"></span>&nbsp;Chi tiết tiện ich tính năng</p>
                    </div>
                    <div class="col-md-3">
                        <p><span class="fa fa-address-book"></span>&nbsp;Blog IPCALL</p>
                    </div>
                    <div class="col-md-3">
                        <p><span class="fa fa-phone"></span>&nbsp;Gọi hỗ trợ 24/7 hotline: <?=$info[0]['hotline']?></p>
                    </div>
                </div>
            </div>
        </scction>
    <?php } ?>
    <footer class="footer pbt0">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="footer-title">Giới thiệu</h3>
                    <p><img src="<?=resizeImg($info[0]['logo'],154,59,0)?>" alt=""> IPCALL là sản phẩm được nghiên cứu và phát triển bởi CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ MITEK giúp các doanh nghiệp triển khai một giải pháp là sự kết hợp thống nhất các phương thức tương tác giữa khách hàng với doanh nghiệp bằng các hình thức như điện thoại, email, website, chat hay gửi SMS Brandname</p>
                </div>
                <div class="col-md-3">
                    <h3 class="footer-title">Blog</h3>
                    <?php foreach ($list_blog as $key => $blog) {
                        if ($key < 4) {
                    ?>
                    <li class="small-blog">
                        <a href="<?=base_url('p/'.$blog['alias_vn'].'-'.$blog['id'])?>.html" style="color:#fff">
                            <div style="display:flex">
                                <img style="border: none" src="<?=resizeImg($blog['hinh_anh'],50,50,0)?>" alt="">
                                <p><b><?=mb_substr($blog['ten_vn'], 0, 45,"UTF-8").' ...';?></b></p>
                            </div>
                            <p><span class="fa fa-calendar">&nbsp;</span><?=date('d/m/Y',strtotime($blog['created_at']))?></p>
                        </a>
                    </li>
                    <?php } } ?>
                </div>
                <div class="col-md-3">
                    <h3 class="footer-title">Sản phẩm khác của IPCALL</h3>
                    <ul class="ls-ft-pro">
                        <li><a href="">MiPBX - Tổng đài doanh nghiệp</a></li>
                        <li><a href="">MiPBX - Tổng đài doanh nghiệp</a></li>
                        <li><a href="">MiPBX - Tổng đài doanh nghiệp</a></li>
                        <li><a href="">MiPBX - Tổng đài doanh nghiệp</a></li>
                        <li><a href="">MiPBX - Tổng đài doanh nghiệp</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="footer-title">Đăng ký</h3>
                    <form action="" class="frm-ft" id="form-email">
                        <input id="email" name="email" type="text" class="ip-ft" placeholder="Nhập email để nhận thông tin" required="" style="color: black;">
                        <button type="submit">ĐĂNG KÝ NGAY</button>
                    </form>

                    <h3 class="footer-title">Theo dõi:</h3>
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
        </div>
        <div class="bottom pbt0" style="margin-bottom: 35px">
            <div class="container pbt0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <p><?=$info[0]['coppy_right_vn']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?=base_url('assets/js/sweetalert2.js')?>"></script>
    <script src="<?=base_url('assets/lib/bootstrap/js/bootstrap.js')?>"></script>
    <script src="<?=base_url('assets/js/web.js?v='.time())?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        
        $('#form-dangky').submit(function(event){  
        event.preventDefault();  

            $.ajax({  
                url:"<?=base_url()?>web/addContact",  
                method:"POST",  
                data:$('#form-dangky').serialize(),  
                success: function (data) {
                    swal(
                        'Thông tin đã được gửi thành công!',
                        '',
                        'success'
                    );

                    $('#form-dangky').removeClass('opened');

                    $('#form-dangky').find('input:text').val('');
                    $('#form-dangky').find('#email').val('');
                    $('#form-dangky').find('textarea').val('');
                }
            });  

        });

        $('#form-email').submit(function(event){  
        event.preventDefault();  

            $.ajax({  
                url:"<?=base_url()?>web/addContact",  
                method:"POST",  
                data:$('#form-email').serialize(),  
                success: function (data) {
                    swal(
                        'Thông tin đã được gửi thành công!',
                        '',
                        'success'
                    );

                    $('#form-email').find('input:text').val('');
                    $('#form-email').find('#email').val('');
                    $('#form-email').find('textarea').val('');
                }
            });  

        });

        

    </script>

</body>
</html>