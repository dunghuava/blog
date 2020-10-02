<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?=base_url()?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/css/admin.css?v='.time())?>">
    <title>Admin System</title>
</head>
<body>
<table border="0" cellspacing="0" cellpadding="0" height="48" width="100%">
  <tr>
    <td class="header_top">myAdmin</td>
  </tr>
  <tr>
    <td class="header_menu">
        [ <a href="admin" class="menu">Xin chào user ! </a> ]
		[ <a href="admin/info" class="menu">Thông tin</a> ]
		[ <a href="admin/logout" class="menu">Logout</a> ]
    </td>
  </tr>
  <tr>
      <td class="header_line"><img src="<?=base_url('assets/images/empty.png')?>" width="1" height="1" border="0" alt=""  /></td>
  </tr>
</table>
    