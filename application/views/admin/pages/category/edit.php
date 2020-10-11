<form action="" method="post" enctype="multipart/form-data">
    <table style="width:99%" class="basic-table">
        <tr>
            <th width="150px" align="left">Hình ảnh</th>
            <td>
                <input style="width:300px" type="file" name="hinh_anh" id="hinh_anh">
            </td>
        </tr>

        <?php if (!empty($data['category']['hinh_anh'])) {?>
        <tr id="tr_image">
            <th width="150px" align="left"></th>
            <td>
                <img src="<?=base_url().'upload/images/'.$data['category']['hinh_anh']?>" onclick="onDelete()" title="Bấm vào đây để xóa" style="cursor: pointer;max-height: 150px;">
            </td>
        </tr>
        <?php } ?>

        <tr>
            <th width="150px" align="left">Tên danh mục</th>
            <td>
                <input style="width:300px" onkeyup="addText(this,'#alias_vn')" type="text" name="ten_vn" id="ten_vn" value="<?=$data['category']['ten_vn']?>" required="">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Đường dẫn</th>
            <td>
                <input style="width:300px" type="text" name="alias_vn" id="alias_vn" value="<?=$data['category']['alias_vn']?>" placeholder="Tạo đường dẫn tự động" required="">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Danh mục cha</th>
            <td>
                <select style="width:312px" name="id_loai" id="id_loai">
                    <option value="0">Chọn làm danh mục cha</option>
                    <?=$data['arr_category']?>
                </select>
            </td>
        </tr>


        <tr>
            <th width="150px" align="left">Module</th>
            <td>
                <select style="width:312px" name="module_id" id="module_id" required="">
                    <option value="">Chọn loại module</option>
                    <?php foreach ($data['arr_module'] as $value){ ?>
                    <option value="<?=$value['module_id']?>"><?=$value['module_title']?></option>
                <?php } ?>
                </select>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Mô tả ngắn</th>
            <td>
               <textarea class="ckeditor" id="mo_ta_vn" name="mo_ta_vn" rows="4"><?=$data['category']['mo_ta_vn']?></textarea>
            </td>
        </tr>
        <tr>
            <th width="150px" align="left">Nội dung</th>
            <td>
               <textarea class="ckeditor" name="noi_dung_vn" id="noi_dung_vn" rows="4"><?=$data['category']['noi_dung_vn']?></textarea>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Keyword (SEO)</th>
            <td>
               <textarea style="width:310px" id="keyword_vn" name="keyword_vn" rows="4"><?=$data['category']['keyword_vn']?></textarea>
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
            <?php if ($data['category']['hien_thi'] == 1) {
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
                <button onclick="location.href='<?=base_url()?>admin/category'" type="button">Quay lại</button>
            </td>
        </tr>
    </table>
</form>

<script type="text/javascript">

	$('#module_id').val(<?=$data['category']['module_id']?>);
    $('#id_loai').val(<?=$data['category']['id_loai']?>);
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
            	// $('#hinh_anh').attr("required","required");
            }
        });
        }
</script>