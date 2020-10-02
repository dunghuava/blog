<?php include ('header.php') ?>
<?php 
  $data['page_title'] = isset($data['page_title']) ? $data['page_title']:'set_page_title'; 
  $data['path']       = isset($data['path']) ? $data['path']:'dasboard/index'; 
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr valign="top">
      <?php include ('nav.php') ?>
      <td>
		<table cellpadding="10" cellspacing="0" width="100%" border="0">
            <tr>
                <td valign="top">
                    <div align="left"><br>
                        <h1><?=$data['page_title']?></h1>
                    </div>
                    <div class="credit"><hr></div>
                    <?php include ('pages/'.$data['path'].'.php') ?>
                </td>
            </tr>
		</table>
    </td>
  </tr>
</table>
<?php include ('footer.php') ?>