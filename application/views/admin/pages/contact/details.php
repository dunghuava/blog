<form action="" method="post" enctype="multipart/form-data">
    <table style="width:99%" class="basic-table">
        <tr>
            <th width="150px" align="left">Tên doanh nghiệp</th>
            <td>
                <input style="width:300px" type="text" value="<?=$data['contact']['doanh_nghiep']?>" disabled>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Họ tên</th>
            <td>
                <input style="width:300px" type="text" value="<?=$data['contact']['ten']?>" disabled>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Số điện thoại</th>
            <td>
                <input style="width:300px" type="text" value="<?=$data['contact']['sdt']?>" disabled>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Email</th>
            <td>
                <input style="width:300px" type="text" value="<?=$data['contact']['email']?>" disabled>
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Nội dung</th>
            <td>
               <textarea style="width:310px" rows="4" disabled><?=$data['contact']['noi_dung']?></textarea>
            </td>
        </tr>
        <tr>
            <td><br>
                <button onclick="location.href='<?=base_url()?>admin/contact'" type="button">Quay lại</button>
            </td>
        </tr>
    </table>
</form>

<script type="text/javascript">

</script>