<section class="sec-page-title main-color">
    <div class="container">
        <div class="col-md-12">
            <h2 style="color:#fff">Chăm sóc khách hàng</h2>
        </div>
    </div>
</section>
<section class="over-section" id="over-section">
    <div class="container">
        <div class="row">

        		<?php if (!check_isMobile()){ ?>
        			<div class="col-md-1 col-xs-6">
                    <div class="item-over">
                        
                    </div>
                </div>
        		<?php } ?>
            
                <a href="<?=fullAddress().'#cauhoi'?>">
                <div class="col-md-2 col-xs-6">
                    <div class="item-over">
                        <p><img src="<?=resizeImg('bang_gia.png',48,48,0)?>" alt=""></p>
                        <p>Câu hỏi thường gặp</p>
                    </div>
                </div>
                </a>

                <a href="<?=fullAddress().'#doisoat'?>">
                <div class="col-md-2 col-xs-6">
                    <div class="item-over">
                        <p><img src="<?=resizeImg('chtiet_dich_vu.png',48,48,0)?>" alt=""></p>
                        <p>Hướng dẫn đối soát</p>
                    </div>
                </div>
                </a>


                <a href="<?=fullAddress().'#thanhtoan'?>">
                <div class="col-md-2 col-xs-6">
                    <div class="item-over">
                        <p><img src="<?=resizeImg('chtiet_dich_vu.png',48,48,0)?>" alt=""></p>
                        <p>Hướng dẫn thanh toán</p>
                    </div>
                </div>
                </a>

                <a href="<?=fullAddress().'#khieunai'?>">
                <div class="col-md-2 col-xs-6">
                    <div class="item-over">
                        <p><img src="<?=resizeImg('chtiet_dich_vu.png',48,48,0)?>" alt=""></p>
                        <p>Giải quyết sự cố khiếu nại</p>
                    </div>
                </div>
                </a>

                <a href="<?=fullAddress().'#sudung'?>">
                <div class="col-md-2 col-xs-6">
                    <div class="item-over">
                        <p><img src="<?=resizeImg('chtiet_dich_vu.png',48,48,0)?>" alt=""></p>
                        <p>Sử dụng Yealink T19E2</p>
                    </div>
                </div>
                </a>
            
        </div>
    </div>
</section>
<section class="sec-content" id="cauhoi">
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
<section class="sec-content bg-blue" id="doisoat">
    <div class="container">
        <h3 class="main-title">Đối soát cước dịch vụ</h3><br>
        <div class="row">
            <div class="col-md-12">
                <p>Lần 1: Hệ thống MiCXM™ sẽ gửi mail thông báo cước cho doanh nghiệp trước 15 ngày </p> 
				<p>Lần 2: Hệ thống MiCXM™ gởi sms nhắc trước 3 ngày. Sau ngày hạn thanh toán 1 ngày nhưng phía MiCXM™ vẫn chưa nhận được phí cước. MiCXM™ sẽ khóa 2 chiều dịch vụ.</p>
				<p>Đối với khách đã khóa dịch vụ: MiCXM™ sẽ gửi Đề nghị thanh toán 3 lần. Sau 30 ngày khách hàng vẫn chưa thanh toán phía MiCXM™ gọi điện hoặc gởi công văn về địa chỉ trên hợp đồng => đơn phương chấm dứt hợp đồng.</p>
            </div>
        </div>
    </div>
</section>

<section class="sec-content" id="thanhtoan">
    <div class="container">
        <h3 class="main-title">Cách thanh toán cước dịch vụ</h3><br>
        <div class="row">
            <div class="col-md-12">
                <p>MITEK chỉ chấp nhận phương thức chuyển khoản, quý khách hàng vui lòng thanh toán qua thông tin:</p>
				<p>CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ MITEK<br>- Số tài khoản: 129467209 tại Ngân Hàng Á Châu (ACB) – Chi Nhánh Sài Gòn<br>- Số tài khoản: 11529741001 Tại Ngân hàng: Tiên Phong Bank – CN Cửu Long</p>
				<p><strong>Ghi chú:</strong> Tất cả các khoản thanh toán đều bằng tiền Việt Nam (trừ chuyển khoản từ nước ngoài và tài khoản tiền USD). Tỷ giá VND/USD được tính theo tỷ giá bán ra của Ngân hàng TMCP Ngoại Thương Việt Nam tại thời điểm thanh toán. Tiền thanh toán của doanh nghiệp cho bên MITEK được tính theo số tiền thực nhận. Bên doanh nghiệp chịu mọi chi phí liên quan đến việc thanh toán.</p>
            </div>
        </div>
    </div>
</section>

<section class="sec-content bg-blue" id="khieunai">
    <div class="container">
        <h3 class="main-title">Sự cố thường gặp</h3><br>
        <div class="row">
            <div class="col-md-12">
                <p>90% nguyên nhân do kết nối internet của khách hàng không ổn định dẫn đến các sự cố đang gọi thì tín hiệu chập chờn hoặc ngắt ngang. Vui lòng kiểm tra bằng cách:</p> 
				<p>- Kiểm tra kết nối mạng: Khách hàng vui lòng kiểm tra kết nối mạng bằng cách bấm phím   trên IP Phone. Nếu màn hình không xuất hiện dòng chữ IP V4 : 192……đồng nghĩa điện thoại bị mất mạng. Vui lòng kiểm tra dây kết nối đến điện thoại 1 lần nữa. Nếu xuất hiện IP V4: 192….. mà vẫn không gọi được thì liên hệ 1900 1238 để được hỗ trợ.</p>
				<p>- Khởi động lại router.</p>
				<p>Gặp các sự cố, khiếu nại khác. Khách hàng vui lòng liên hệ hotline 1900 1238 để được hỗ trợ kịp thời nhất.</p>
            </div>
        </div>
    </div>
</section>

<section class="sec-content" id="sudung">
    <div class="container">
						
		<h3 class="main-title">Hướng dẫn sử dụng Yealink T19E2</h3>
							
		<div class="row">
			<div class="col-sm-12">
				<h3><span style="color:#3498db"><strong>1. Thực hiện cuộc gọi</strong></span></h3>

				<ol>
					<li>Sử dụng tai nghe dạng cầm tay (handset):<strong>&nbsp;</strong>Nhấc tai nghe =&gt; Nhập số điện thoại, =&gt; bấm nút #Send để gọi.</li>
					<li>Sử dụng loa ngoài (speakerphone):<strong>&nbsp;</strong>Nhấn&nbsp;&nbsp;<img alt="Loa YEALINK T19E2" id="Picture_x0020_15" src="https://mitek.vn/wp-content/uploads/2018/04/Loa.jpg" style="height:19px; width:30px">&nbsp;=&gt; Nhập số điện thoại =&gt; bấm nút #Send để gọi.</li>
					<li>Sử dụng tai nghe dạng chụp đầu (headset):<strong>&nbsp;</strong>Nhấn :&nbsp;<img alt="Headphone T19E2" id="Picture_x0020_14" src="https://mitek.vn/wp-content/uploads/2018/04/Headphone.jpg" style="height:28px; width:30px">&nbsp;=&gt; Nhập số điện thoại =&gt; bấm nút #Send để gọi.</li>
				</ol>

				<h3><span style="color:#3498db"><strong>2. Trả lời&nbsp;cuộc gọi</strong></span></h3>

				<ol>
					<li>Sử dụng tai nghe dạng tay cầm (handset):&nbsp;Nhấc tai nghe.</li>
					<li>Sử dụng loa ngoài:&nbsp;Nhấn :&nbsp;<img alt="Loa YEALINK T19E2" id="Picture_x0020_13" src="https://mitek.vn/wp-content/uploads/2018/04/Loa.jpg" style="height:19px; width:30px"></li>
					<li>Sử dụng tai nghe dạng chụp đầu (headset):&nbsp;Nhấn :&nbsp;<img alt="Headphone T19E2" id="Picture_x0020_12" src="https://mitek.vn/wp-content/uploads/2018/04/Headphone.jpg" style="height:28px; width:30px"></li>
				</ol>

				<p><strong>∗</strong><strong>&nbsp;Lưu ý:</strong>&nbsp;Nhấn nút&nbsp;<strong>Reject&nbsp;</strong>để từ chối cuộc gọi.</p>

				<h3><span style="color:#3498db"><strong>3. Ngắt cuộc gọi</strong></span></h3>

				<ol>
					<li>Sử dụng tai nghe dạng tay cầm (handset):<strong>&nbsp;</strong>Gác máy hoặc nhấn nút&nbsp;<strong>EndCall</strong>.</li>
					<li>Sử dụng loa ngoài:<strong>&nbsp;</strong>Nhấn&nbsp;<img alt="Handset T19E2" id="Picture_x0020_11" src="https://mitek.vn/wp-content/uploads/2018/04/Loa.jpg" style="height:19px; width:30px">&nbsp;hoặc nhấn nút&nbsp;<strong>EndCall</strong>.</li>
					<li>Sử dụng tai nghe dạng chụp đầu (headset):&nbsp;Nhấn nút&nbsp;<strong>EndCall</strong>.</li>
				</ol>

				<h3><span style="color:#3498db"><strong>4. Quay số vừa gọi</strong></span></h3>

				<p>Nhấn&nbsp;<img alt="Ridial T19E2" id="Picture_x0020_10" src="https://mitek.vn/wp-content/uploads/2018/04/Ridial.jpg" style="height:21px; width:30px">&nbsp;để truy cập vào danh sách các số đã gọi =&gt; nhấn&nbsp;<img alt="Mũi tên lên T19E2" id="" src="https://mitek.vn/wp-content/uploads/2018/04/m%C5%A9i-t%C3%AAn-l%C3%AAn.jpg" style="height:29px; width:30px">&nbsp; hoặc&nbsp;&nbsp;<a href="https://cloudfone.vn/wp-content/uploads/2017/06/4.png"><img alt="Mũi tên xuống" id="Picture_x0020_8" src="https://mitek.vn/wp-content/uploads/2018/04/M%C5%A9i-t%C3%AAn-xu%E1%BB%91ng.jpg" style="height:29px; width:30px">&nbsp;</a>&nbsp;để chọn mục mong muốn =&gt; bấm&nbsp;<a href="https://cloudfone.vn/wp-content/uploads/2017/06/5.png"><img alt="Ridial" id="Picture_x0020_7" src="https://mitek.vn/wp-content/uploads/2018/04/Ridial.jpg" style="height:21px; width:30px">&nbsp;</a>hoặc #send để gọi.</p>

				<h3><span style="color:#3498db"><strong>5. Ngắt Micro khi đàm thoại</strong></span></h3>

				<ol>
					<li>Nhấn&nbsp;<a href="https://cloudfone.vn/wp-content/uploads/2017/06/7.png"><img alt="7" id="Picture_x0020_6" src="https://mitek.vn/wp-content/uploads/2018/04/Mute.jpg" style="height:30px; width:30px"></a>&nbsp;để vô hiệu hóa micro khi đang đàm thoại.</li>
					<li>Nhấn&nbsp;<a href="https://cloudfone.vn/wp-content/uploads/2017/06/7.png"><img alt="7" id="Picture_x0020_5" src="https://mitek.vn/wp-content/uploads/2018/04/Mute.jpg" style="height:30px; width:30px"></a>&nbsp;để kích hoạt lại micro.</li>
				</ol>

				<h3><span style="color:#3498db"><strong>6. Chuyển cuộc gọi</strong></span></h3>

				<ol>
					<li>
						<p>Nhấn&nbsp;<img alt="" src="https://mitek.vn/wp-content/uploads/2018/04/Trans.jpg" style="height:29px; width:30px">&nbsp;hoặc&nbsp;<strong>Tran</strong>&nbsp;=&gt; nhấn số nội bộ cần chuyển =&gt; Nhấn<img alt="" src="https://mitek.vn/wp-content/uploads/2018/04/Trans.jpg" style="height:29px; width:30px">&nbsp;hoặc&nbsp;<strong>Tran</strong></p>
					</li>
				</ol>

				<h3><span style="color:#3498db"><strong>7. Điều chỉnh âm lượng</strong></span></h3>

				<ol>
					<li>Nhấn&nbsp;<img alt="" src="https://mitek.vn/wp-content/uploads/2018/04/volume.jpg" style="height:13px; width:50px">&nbsp;khi đang trong cuộc gọi, để tăng giảm âm lượng của cuộc đàm thoại.</li>
					<li>Nhấn&nbsp;<img alt="" src="https://mitek.vn/wp-content/uploads/2018/04/volume.jpg" style="height:13px; width:50px">&nbsp;khi không thực hiện cuộc gọi, để tăng giảm âm lượng của tiếng reo khi có cuộc gọi đến.</li>
				</ol>

				<h3><span style="color:#3498db"><strong>8. Hướng dẫn lắp đặt Yealink T19E2 và thu âm lời chào</strong>&nbsp;</span></h3>

				<p>Có bất kì thắc mắc nào khách hàng vui lòng liên hệ&nbsp;<strong>1900 1238</strong>&nbsp;để được hỗ trợ</p>

				<p>&nbsp;</p>

				<p>&nbsp;</p>
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