
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
                        <p><span class="fa fa-address-book"></span>&nbsp;Blog</p>
                    </div>
                    <div class="col-md-3">
                        <p><span class="fa fa-phone"></span>&nbsp;Hotline: 0383868205</p>
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
                    <p>MiCXM là sản phẩm được nghiên cứu và phát triển bởi CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ MITEK giúp các doanh nghiệp triển khai một giải pháp là sự kết hợp thống nhất các phương thức tương tác giữa khách hàng với doanh nghiệp bằng các hình thức như điện thoại, email, website, chat hay gửi SMS Brandname</p>
                </div>
                <div class="col-md-3">
                    <h3 class="footer-title">Blog</h3>
                    <?php for ($i=1;$i<=4;$i++){ ?>
                    <li class="small-blog">
                        <a href="" style="color:#fff">
                            <div style="display:flex">
                                <img src="<?=base_url('upload/blog.png')?>" alt="">
                                <p>Tại sao tổng đài Callcenetr cần tích hợp CRM</p>
                            </div>
                            <p>November, 09, 2020</p>
                        </a>
                    </li>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <h3 class="footer-title">Sản phẩm khác của MITEK</h3>
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
        <div class="bottom pbt0">
            <div class="container pbt0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <p>© 2017. Công ty cổ phần thương mại dịch vụ MITEK. Địa chỉ: Tầng 1, Tòa nhà PVFCCO, 43 Mạc Đĩnh Chi, P. Đa Kao, Quận 1, TP. Hồ Chí Minh</p>
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