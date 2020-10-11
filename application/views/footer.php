
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
                    <input type="text" class="input" required>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Họ tên <span style="color:red">(*)</span></p>
                    <input type="text" class="input" required>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Số điện thoại <span style="color:red">(*)</span></p>
                    <input type="text" class="input" required>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Email <span style="color:red">(*)</span></p>
                    <input type="text" class="input" required>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Nội dung <span style="color:red"></span></p>
                    <textarea name="" id="" rows="3"></textarea>
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
                    <?php foreach ($list_blog as $key => $blog) {?>
                    <li class="small-blog">
                        <a href="<?=base_url('blog-detail/'.$blog['alias_vn'].'-'.$blog['id'])?>" style="color:#fff">
                            <div style="display:flex">
                                <img style="border: none" src="<?=resizeImg($blog['hinh_anh'],50,50,0)?>" alt="">
                                <p><b><?=mb_substr($blog['ten_vn'], 0, 45,"UTF-8").' ...';?></b></p>
                            </div>
                            <p><span class="fa fa-calendar">&nbsp;</span><?=date('d/m/Y',strtotime($blog['created_at']))?></p>
                        </a>
                    </li>
                    <?php } ?>
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
                    <form action="" class="frm-ft">
                        <input type="text" class="ip-ft" placeholder="Nhập email để nhận thông tin">
                        <button type="button">ĐĂNG KÝ NGAY</button>
                    </form>
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
    <script src="<?=base_url('assets/lib/bootstrap/js/bootstrap.js')?>"></script>
    <script src="<?=base_url('assets/js/web.js?v='.time())?>"></script>
</body>
</html>