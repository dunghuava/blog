<form action="" method="post" enctype="multipart/form-data">
    <table style="width:99%" class="basic-table">
        
        <tr>
            <th width="150px" align="left">Câu hỏi</th>
            <td>
               <textarea class="ckeditor" name="cau_hoi_vn" id="cau_hoi_vn" rows="4" required=""><?=$data['question']['cau_hoi_vn']?></textarea>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Câu trả lời</th>
            <td>
               <textarea class="ckeditor" name="dap_an_vn" id="dap_an_vn" rows="4" required=""><?=$data['question']['dap_an_vn']?></textarea>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Hiển thị</th>

            <?php if ($data['question']['hien_thi'] == 1) {
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
    // function addText(e,target){
    //     var val = make_alias(e.value);
    //     $(target).val(val);
    // }
</script>