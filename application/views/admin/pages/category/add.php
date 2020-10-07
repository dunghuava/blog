<form action="" method="post" enctype="multipart/form-data">
    <table style="width:99%" class="basic-table">
        <tr>
            <th width="150px" align="left">Hình ảnh</th>
            <td>
                <input style="width:300px" type="file" name="hinh_anh" id="hinh_anh" required="">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Tên danh mục</th>
            <td>
                <input style="width:300px" onkeyup="addText(this,'#alias_vn')" type="text" name="ten_vn" id="ten_vn" required="">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Đường dẫn</th>
            <td>
                <input style="width:300px" type="text" name="alias_vn" id="alias_vn" placeholder="Tạo đường dẫn tự động">
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
               <textarea style="width:310px" id="mo_ta_vn" name="mo_ta_vn" rows="4"></textarea>
            </td>
        </tr>
        <tr>
            <th width="150px" align="left">Nội dung</th>
            <td>
               <textarea class="ckeditor" name="noi_dung_vn" id="noi_dung_vn" rows="4"></textarea>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Keyword (SEO)</th>
            <td>
               <textarea style="width:310px" id="keyword_vn" name="keyword_vn" rows="4"></textarea>
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
            <td>
                <input style="width:18px;height:18px" type="checkbox" name="hien_thi" id="hien_thi" value="1" checked>
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
    function addText(e,target){
        var val = make_alias(e.value);
        $(target).val(val);
    }
</script>