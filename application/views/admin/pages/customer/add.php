<form action="" method="post" enctype="multipart/form-data">
    <table style="width:99%" class="basic-table">

        <tr>
            <th width="150px" align="left">Tên</th>
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
            <th width="150px" align="left">Loại</th>
            <td>
                <select style="width:312px" name="loai" id="loai" required="">
                    <option value="">chọn loại</option>
                    <option value="1">Khách hàng</option>
                    <option value="2">Đối tác</option>
                </select>
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
                <button onclick="location.href='<?=base_url()?>admin/customer'" type="button">Quay lại</button>
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