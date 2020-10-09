<form action="" method="post" enctype="multipart/form-data">
    <table style="width:99%" class="basic-table">

        <tr>
            <th width="150px" align="left">Tên</th>
            <td>
                <input style="width:300px" type="text" name="ten_vn" id="ten_vn" value="<?=$data['customer']['ten_vn']?>" required="">
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
                <img src="<?=base_url().'upload/images/'.$data['customer']['hinh_anh']?>" onclick="onDelete()" title="Bấm vào đây để xóa" style="cursor: pointer;max-height: 150px;">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Loại</th>
            <td>
                <select style="width:312px" name="loai" id="loai" required="">
                    <option value="">chọn loại</option>
                    <option value="1" <?php if ($data['customer']['loai']==1) echo "selected='selected'";?>>Khách hàng</option>
                    <option value="2" <?php if ($data['customer']['loai']==2) echo "selected='selected'";?>>Đối tác</option>
                </select>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Hiển thị</th>
            <?php if ($data['customer']['hien_thi'] == 1) {
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
                <button onclick="location.href='<?=base_url()?>admin/customer'" type="button">Quay lại</button>
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