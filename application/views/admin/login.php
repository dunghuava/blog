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
                        <h2>>> Login Admin <<</h2><hr>
                    </td>
                </tr>
                <tr>
                    <td>Tên đăng nhập</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="username">
                    </td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td>:</td>
                    <td>
                        <input type="password" name="username">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button>Đăng nhập</button>
                    </td>
                </tr>
            </table>
        </form>
</body>
</html>