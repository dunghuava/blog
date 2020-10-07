<form action="" method="post" enctype="multipart/form-data">
    <table style="width:99%" class="basic-table">

        <tr>
            <th width="150px" align="left">Mô tả công ty</th>
            <td>
               <textarea class="ckeditor" name="mo_ta_vn" id="mo_ta_vn" rows="4" required=""><?=$data['info']['mo_ta_vn']?></textarea>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Email</th>
            <td>
                <input style="width:300px" type="email" name="email" id="email" value="<?=$data['info']['email']?>" required="">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Hotline</th>
            <td>
                <input style="width:300px" type="number" name="hotline" id="hotline" value="<?=$data['info']['hotline']?>" required="">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Địa chỉ</th>
            <td>
                <input style="width:300px" type="text" name="dia_chi_vn" id="dia_chi_vn" value="<?=$data['info']['dia_chi_vn']?>" required="">
            </td>
        </tr>
        <tr>
            <th width="150px" align="left">Facebook(url)</th>
            <td>
                <input style="width:300px" type="text" name="facebook" id="facebook" value="<?=$data['info']['facebook']?>">
            </td>
        </tr>
        <tr>
            <th width="150px" align="left">Google(url)</th>
            <td>
                <input style="width:300px" type="text" name="google" id="google" value="<?=$data['info']['google']?>">
            </td>
        </tr>
        <tr>
            <th width="150px" align="left">Youtube(url)</th>
            <td>
                <input style="width:300px" type="text" name="youtube" id="youtube" value="<?=$data['info']['youtube']?>">
            </td>
        </tr>
        <tr>
            <th width="150px" align="left">Instagram(url)</th>
            <td>
                <input style="width:300px" type="text" name="instagram" id="instagram" value="<?=$data['info']['instagram']?>">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Logo</th>
            <td>
                <input style="width:300px" type="file" name="logo" id="logo" <?php if (empty($data['info']['logo'])) echo "required";?>>
            </td>
        </tr>

        <?php if (!empty($data['info']['logo'])) { ?>
            <tr id="tr_image_logo">
                <th width="150px" align="left"></th>
                <td>
                    <img src="<?=base_url().'upload/images/'.$data['info']['logo']?>" onclick="onDelete('logo')" title="Bấm vào đây để xóa" style="cursor: pointer;max-height: 150px;">
                </td>
            </tr>
        <?php } ?>

        <tr>
            <th width="150px" align="left">Icon</th>
            <td>
                <input style="width:300px" type="file" name="icon" id="icon" <?php if (empty($data['info']['logo'])) echo "required";?>>
            </td>
        </tr>

        <?php if (!empty($data['info']['icon'])) { ?>
            <tr id="tr_image_icon">
                <th width="150px" align="left"></th>
                <td>
                    <img src="<?=base_url().'upload/images/'.$data['info']['icon']?>" onclick="onDelete('icon')" title="Bấm vào đây để xóa" style="cursor: pointer;max-height: 150px;">
                </td>
            </tr>
        <?php } ?>

        <tr>
            <th width="150px" align="left">Coppy right</th>
            <td>
               <textarea style="width:700px" id="coppy_right_vn" name="coppy_right_vn" rows="6" required=""><?=$data['info']['coppy_right_vn']?></textarea>
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

    function onDelete(text){
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
                $('#tr_image_'+text).css("display","none");
                $('#'+text).attr("required","required");
            }
        });
    }
</script>