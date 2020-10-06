<form action="" method="post" enctype="multipart/form-data">
    <table style="width:99%" class="basic-table">
        <tr>
            <th width="150px" align="left">Hình ảnh</th>
            <td>
                <input style="width:300px" type="file" name="hinh_anh" id="hinh_anh">
            </td>
        </tr>

        <tr id="tr_image">
            <th width="150px" align="left"></th>
            <td>
                <img src="<?=base_url().'upload/images/'.$data['blog']['hinh_anh']?>" onclick="onDelete()" title="Bấm vào đây để xóa" style="cursor: pointer;max-height: 150px;">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Loại blog</th>
            <td>
                <select style="width:312px" name="id_loai" id="id_loai" required="">
                    <option value="">chọn loại bài viết</option>
                    <?=$data['arr_category']?>
                </select>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Tiêu đề</th>
            <td>
                <input style="width:300px" onkeyup="addText(this,'#alias_vn')" type="text" name="ten_vn" id="ten_vn" value="<?=$data['blog']['ten_vn']?>" required="">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Đường dẫn</th>
            <td>
                <input style="width:300px" type="text" name="alias_vn" id="alias_vn" placeholder="Tạo đường dẫn tự động" value="<?=$data['blog']['alias_vn']?>" required="">
            </td>
        </tr>

        
        <tr>
            <th width="150px" align="left">Mô tả</th>
            <td>
               <textarea style="width:310px" id="mo_ta_vn" name="mo_ta_vn" rows="4" required=""><?=$data['blog']['mo_ta_vn']?></textarea>
            </td>
        </tr>
        <tr>
            <th width="150px" align="left">Nội dung</th>
            <td>
               <textarea class="ckeditor" name="noi_dung_vn" id="noi_dung_vn" rows="4" required=""><?=$data['blog']['noi_dung_vn']?></textarea>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Nguồn</th>
            <td>
               <textarea style="width:310px" id="nguon" name="nguon" rows="4"><?=$data['blog']['nguon']?></textarea>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Keyword (SEO)</th>
            <td>
               <textarea style="width:310px" id="keyword_vn" name="keyword_vn" rows="4"><?=$data['blog']['keyword_vn']?></textarea>
            </td>
        </tr>


        <tr>
            <?php  
                $date_post_format = date('d-m-Y', strtotime($data['blog']['ngay_dang']));
            ?>
            <th width="150px" align="left">Hẹn ngày đăng</th>
            <td>
                <input style="width:300px" class="datepicker" type="text" name="ngay_dang" id="ngay_dang" value="<?php echo $date_post_format ?>" required="">
            </td>
        </tr>



        <!-- <tr>
            <th width="150px" align="left">Menu</th>
            <td>
                <input style="width:18px;height:18px" type="checkbox" name="menu" id="menu">
            </td>
        </tr> -->
        <tr>
            <th width="150px" align="left">Hiển thị</th>
            <?php if ($data['blog']['hien_thi'] == 1) {
                    $checked = 'checked';
                }else{
                    $checked = '';
                } 
            ?>
            <td>
                <input style="width:18px;height:18px" type="checkbox" name="hien_thi" id="hien_thi" value="1" <?php echo $checked; ?>>
            </td>
        </tr>
        <tr>
            <td><br>
                <button type="submit">Lưu lại</button>
                <button onclick="history.back()" type="button">Hủy</button>
            </td>
        </tr>
    </table>
</form>

<script type="text/javascript">

    $('#id_loai').val(<?=$data['blog']['id_loai']?>);
    function addText(e,target){
        var val = make_alias(e.value);
        $(target).val(val);
    }

    function onDelete(){
        Swal.fire({
            title: 'Bạn có muốn xóa mục này?',
            text: "Dữ liệu đã xóa sẽ không thể phục hồi",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Hủy',
            confirmButtonText: 'Xóa'
            }).then((result) => {
            if (result.value) {
                $('#tr_image').css("display","none");
                $('#hinh_anh').attr("required","required");
            }
        });
    }
</script>