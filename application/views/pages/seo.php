<?php 
    $seo = $data['seo'];
?>
<title><?=!empty($seo['title']) ? $seo['title']:'Trang chủ'?></title>
<meta property="og:url"                content="<?=fullAddress()?>" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?=mb_substr($seo['title'],0,80)?>..." />
<meta property="og:description"        content="<?=mb_substr($seo['description'],0,250)?>..." />
<meta property="og:image"              content="<?=resizeImg($seo['image'],450,250,0)?>" />