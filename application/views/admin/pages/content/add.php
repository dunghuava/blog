<?php 
    $content = $data['content'];
?>
<form action="" method="post" enctype="multipart/form-data">
    <table style="width:99%" class="basic-table">
        <tr>
            <th width="150px" align="left">Hình ảnh</th>
            <td>
                <?php if ($content['id']){ ?>
                    <input type="hidden" name="old_img" value="<?=$content['hinh_anh']?>">
                    <img src="<?=resizeImg($content['hinh_anh'],90,90,2)?>" alt=""><br>
                <?php } ?>
                <input style="width:300px" type="file" name="hinh_anh" id="hinh_anh">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Tiêu đề</th>
            <td>
                <input value="<?=$content['ten_vn']?>" style="width:300px" type="text" name="ten_vn" id="ten_vn" required="">
            </td>
        </tr>
        <tr>
            <th width="150px" align="left">Loại</th>
            <td>
                <select style="width:312px" name="id_loai" id="id_loai">
                    <option value="0">Chọn làm danh mục cha</option>
                    <?php 
                        foreach ($data['cate'] as $val){ 
                    ?>
                        <option <?=$content['id_loai']==$val['id'] ? 'selected':''?> value="<?=$val['id']?>"><?=$val['ten_vn']?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Liên kết (url)</th>
            <td>
               <input value="<?=$content['url']?>" style="width:300px" type="text" name="url" id="url">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Mô tả ngắn</th>
            <td>
               <textarea style="width:310px" id="mo_ta_vn" name="mo_ta_vn" rows="4"><?=$content['mo_ta_vn']?></textarea>
            </td>
        </tr>
        <tr>
            <th width="150px" align="left">Nội dung</th>
            <td>
               <textarea class="ckeditor" name="noi_dung_vn" id="noi_dung_vn" rows="4"><?=$content['noi_dung_vn']?></textarea>
            </td>
        </tr>
        <tr>
            <th width="150px" align="left">Hiển thị</th>
            <td>
                <input style="width:18px;height:18px" type="checkbox" name="hien_thi" id="hien_thi" value="1" checked>
            </td>
        </tr>
        <tr>
            <td><br>
                <button name="submit" type="submit">Lưu lại</button>
                <button onclick="location.href='<?=base_url('admin/content')?>'" type="button">Quay lại</button>
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