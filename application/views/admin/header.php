<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?=base_url()?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/css/admin.css?v='.time())?>">
    <link rel="stylesheet" href="<?=base_url('assets/lib/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/css/sweetalert2.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/datetimepicker.css')?>">
    <script src="<?=base_url('assets/lib/jquery.min.js')?>"></script>

    <style type="text/css">
      .dataTables_wrapper .dataTables_filter input {
        height: 30px;
        margin-bottom: 10px;
        margin-right: 10px;
      }

      .dataTables_wrapper .dataTables_length select {
        height: 30px;
      }
    </style>

    <title>Admin System</title>
</head>
<body>
<table border="0" cellspacing="0" cellpadding="0" height="48" width="100%">
  <tr>
    <td class="header_top">myAdmin</td>
  </tr>
  <tr>
    <td class="header_menu">
        [ <a href="admin" class="menu">Xin chào <?php echo $admin_infor['user_fullname'] ?> ! </a> ]
        [ <a href="admin/changePass" class="menu">Đổi mật khẩu</a> ]
        [ <a href="admin/logout" class="menu">Đăng xuất</a> ]
    </td>
  </tr>
  <tr>
      <td class="header_line"><img src="<?=base_url('assets/images/empty.png')?>" width="1" height="1" border="0" alt=""  /></td>
  </tr>
</table>
    