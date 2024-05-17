<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>サンプルエステ検索サイト</title>
<meta name="description" content="">
<meta name='robots' content='max-image-preview:large' />
<link rel="canonical" href="">
<meta property="og:url" content="">
<meta property="og:type" content="article">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:site_name" content="">
<meta property="og:image" content="">
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="" />
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="" />
<?php
$loc_href = '.';
$inc_path = $_SERVER["DOCUMENT_ROOT"].'/assets';
$com_href = '/assets';

include $inc_path .'/inc/head.php';
?>
<body>
<div class="container">
  <?php include $inc_path .'/inc/side_left.php';?>
  <div class="content">
    <?php include $inc_path .'/inc/header.php';?>
    <div class="logo_box2">
      <img alt="" src="<?=$com_href?>/img/oil_girl-f1f9ee9dc418e070cc46fe50018ef053a1dd90d4dc0c904395dfc13cbf492917.webp">
    </div>
    <h1 class="big_h1">Oil Mafia
      <br>オイルマフィア
    </h1>
    <p class="desc_rip">メンズエステ検索サイトの最新版！<br>
     今出勤中のセラピストをワンタップでサーチ！
    </p>

    <div class="in_box in_box_bottom">
      <?php include $inc_path .'/inc/area_menu.php';?>
    </div>

    <p class="box_sub_page2">テキストが入る予定テキストが入る予定テキストが入る予定テキストが入る予定テキストが入る予定テキストが入る予定テキストが入る予定テキストが入る予定テキストが入る予定テキストが入る予定テキストが入る予定
    <p>
    <?php include $inc_path .'/inc/footer_menu.php';?>
  </div>
</div>
<?php include $inc_path .'/inc/footer.php';?>
