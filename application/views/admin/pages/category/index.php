<form action="" method="post">
    <table border="1" style="width:99%" class="list-table">
        <tr class="heading">
            <th width="5%">STT</th>
            <th>Tên danh mục</th>
            <th>Hình ảnh</th>
            <th>Danh mục cha</th>
            <th width="8%">Menu</th>
            <th width="8%">Hiển thị</th>
            <th width="10%">Quản lý</th>
        </tr>
        <tbody>
            <?php for ($i=0;$i<10;$i++){ ?>
                <tr>
                    <td align="center">
                        <input class="ip-text" style="width:45px" type="text" value="<?=$i?>">
                    </td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td align="center">
                        <input class="ip-ckb" type="checkbox" name="" id="">
                    </td>
                    <td align="center">
                        <input class="ip-ckb" type="checkbox" name="" id="">
                    </td>
                    <td align="center">
                        <a href="">[Xem / Sửa]</a>
                        <a style="color:red" onclick="return confirm('Xóa mục này khỏi danh sách ?')" href="">[Xóa]</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</form>