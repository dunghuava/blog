<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/css/admin.css?v='.time())?>">
    <title>Login</title>
    <style>
        body{
            background:#dcdcdc;
        }
        form{
            margin:auto;
            width:fit-content;
            background:#fff;
            padding:15px;
            margin-top:10%;
        }
        table td{padding:5px}
    </style>
</head>
<body>
        <form action="" method="post">
            
            <table>
                <tr>
                    <td colspan="3" align="center">
                        <h2>Login Admin</h2><hr>
                    </td>
                </tr>
                <tr>
                    <td>Tên đăng nhập</td>
                    <td></td>
                    <td>
                        <input type="text" id="username" name="username" required="">
                    </td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td></td>
                    <td>
                        <input type="password" id="password" name="password" required="">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button name="account" type="submit">Đăng nhập</button>
                    </td>
                </tr>
            </table>
            <p style="margin:5px 0px;color:red;font-size:12px"><?php if ($this->session->flashdata('reponse')) {echo $this->session->flashdata('reponse');} ?></p>
        </form>
</body>
</html>