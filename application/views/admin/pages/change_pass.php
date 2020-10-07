<form id="change_pass" action="" method="post" enctype="multipart/form-data">
    <table style="width:99%" class="basic-table">

        <tr>
            <th width="150px" align="left">Mật khẩu mới</th>
            <td>
                <input style="width:300px" type="password" name="user_password" id="user_password" required="">
            </td>
        </tr>

        <tr>
            <th width="150px" align="left">Xác nhận mật khẩu</th>
            <td>
                <input style="width:300px" type="password" name="user_password_confirm" id="user_password_confirm" required="">
            </td>
        </tr>

        <tr>
            <td><br>
                <button type="submit">Lưu lại</button>
                <button onclick="location.href='<?=base_url()?>admin'" type="button">Quay lại</button>
            </td>
        </tr>
    </table>
</form>

<script type="text/javascript">
    $("#change_pass").on('submit', function() {
        var password = $('#user_password').val();
        var password_confirm = $('#user_password_confirm').val();
          if (password != password_confirm) {
          alert('Xác nhận mật khẩu không đúng. Vui lòng nhập lại!');
          return false;
        }    
    });
</script>