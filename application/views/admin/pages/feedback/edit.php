<form action="" method="post" enctype="multipart/form-data">
    <table style="width:99%" class="basic-table">

        <tr>
            <th width="150px" align="left">Tên khách hàng</th>
            <td>
                <input style="width:300px" type="text" name="ten_vn" id="ten_vn" value="<?=$data['feedback']['ten_vn']?>" required="">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Hình ảnh</th>
            <td>
                <input style="width:300px" type="file" name="hinh_anh" id="hinh_anh">
            </td>
        </tr>

        <tr id="tr_image">
            <th width="150px" align="left"></th>
            <td>
                <img src="<?=base_url().'upload/images/'.$data['feedback']['hinh_anh']?>" onclick="onDelete()" title="Bấm vào đây để xóa" style="cursor: pointer;max-height: 150px;">
            </td>
        </tr>

         <tr>
            <th width="150px" align="left">Chức vụ</th>
            <td>
                <input style="width:300px" type="text" name="chucvu_vn" id="chucvu_vn" value="<?=$data['feedback']['chucvu_vn']?>" required="">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Công ty</th>
            <td>
                <input style="width:300px" type="text" name="congty_vn" id="congty_vn" value="<?=$data['feedback']['congty_vn']?>" required="">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Nội dung</th>
            <td>
               <textarea class="ckeditor" name="noi_dung_vn" id="noi_dung_vn" rows="4" required=""><?=$data['feedback']['noi_dung_vn']?></textarea>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Liên kết</th>
            <td>
                <input style="width:300px" type="text" name="link" id="link" value="<?=$data['feedback']['link']?>" required="">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Hiển thị</th>
            <?php if ($data['feedback']['hien_thi'] == 1) {
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
                <button onclick="location.href='<?=base_url()?>admin/feedback'" type="button">Quay lại</button>
            </td>
        </tr>
    </table>
</form>

<script type="text/javascript">

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