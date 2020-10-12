<td width="200" class="menu"><br>
    <div class="package">
        <h4>DANH MỤC</h4>
        <p><a href="<?=base_url()?>admin/category">Tất cả danh mục</a></p>
        <p><a href="<?=base_url()?>admin/category/add">Tạo mới</a></p>
    </div>
    <div class="package">
        <h4>BLOG</h4>
        <p><a href="<?=base_url()?>admin/post">Tất cả blog</a></p>
        <p><a href="<?=base_url()?>admin/post/add">Tạo mới</a></p>
    </div>
    <div class="package">
        <h4>MỞ RỘNG</h4>
        <p><a href="<?=base_url()?>admin/question">Câu hỏi thường gặp</a></p>
        <p><a href="<?=base_url()?>admin/customer">Đối tác - khách hàng</a></p>
        <p><a href="<?=base_url()?>admin/feedback">Phản hồi - khách hàng</a></p>
        <p><a href="<?=base_url()?>admin/contact">Liên hệ <?php if (count($list_contact)>0) echo '<span style="color: red;">('.count($list_contact).')</span>'; ?> </a></p>
        <p><a href="<?=base_url('admin/content')?>">Nội dung khác</a></p>
    </div>
    <div class="package">
        <h4>SITE</h4>
        <p><a target="_blank" href="<?=base_url()?>">Vào trang web</a></p>
        <p><a href="<?=base_url()?>admin/info">Thông tin site</a></p>
    </div>

    <div class="package">
        <h4>TÀI KHOẢN</h4>
        <p><a href="<?=base_url()?>admin/changePass">Đổi mật khẩu</a></p>
        <p><a href="<?=base_url()?>admin/logout">Đăng xuất</a></p>
    </div>
</td>