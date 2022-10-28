<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo. | エラーとの闘いを記録するブログ</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.min.css"><link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">

  <?php if(is_home() || is_archive() || is_search()):  ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.min.css">
  <?php elseif(is_single() || is_page()): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.min.css">
  <?php endif; ?>
  <script data-ad-client="ca-pub-5397571082462622" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <?php wp_head(); ?>
</head>
<body>


<header> 
  <?php if(is_home() || is_archive()): ?>
    <h1 class="wrap_logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo@2x.png" alt="Zoo."></a></h1>
  <?php else: ?>
    <div class="wrap_logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo@2x.png" alt="Zoo."></a></div>
  <?php endif; ?>
  <section class="links"> 
    <div class="portfolio"><a href="https://www.resume.id/zoo/" target="_blank">Portfolio </a></div>
    <!-- <div class="twitter"><a href="#"><img src="<?php //echo get_template_directory_uri(); ?>/img/twitter.png" alt="twitter ロゴ"></a></div> -->
    <div class="twitter"><a href="https://www.facebook.com/yasushi.sihmizoo" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook ロゴ"></a></div>
  </section>
</header>