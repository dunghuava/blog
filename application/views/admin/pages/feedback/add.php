<form action="" method="post" enctype="multipart/form-data">
    <table style="width:99%" class="basic-table">

        <tr>
            <th width="150px" align="left">Tên khách hàng</th>
            <td>
                <input style="width:300px" type="text" name="ten_vn" id="ten_vn" required="">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Hình ảnh</th>
            <td>
                <input style="width:300px" type="file" name="hinh_anh" id="hinh_anh" required="">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Chức vụ</th>
            <td>
                <input style="width:300px" type="text" name="chucvu_vn" id="chucvu_vn" required="">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Công ty</th>
            <td>
                <input style="width:300px" type="text" name="congty_vn" id="congty_vn" required="">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Nội dung</th>
            <td>
               <textarea class="ckeditor" name="noi_dung_vn" id="noi_dung_vn" rows="4" required=""></textarea>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Liên kết</th>
            <td>
                <input style="width:300px" type="text" name="link" id="link" required="">
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
                <button type="submit">Lưu lại</button>
                <button onclick="location.href='<?=base_url()?>admin/feedback'" type="button">Quay lại</button>
            </td>
        </tr>
    </table>
</form>

<script type="text/javascript">
    // function addText(e,target){
    //     var val = make_alias(e.value);
    //     $(target).val(val);
    // }
</script>