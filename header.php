<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Mulish:wght@300;500;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body>
  <header id="header" class="wrapper">
    
      <h1 class="site-title">
        <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_theme_file_uri('img/logo.svg')); ?>" alt="rokocodeのロゴ画像"></a>
      </h1>

      <nav class="navi">
        <ul class="navi-menu">
          <li>
            <a href="<?php echo esc_url(home_url('/works/')); ?>">WORKS</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/about/')); ?>">SERVICE</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a>
          </li>
        </ul>
      </nav>

      <nav class="sp-menu">
        <ul class="sp-nav-menu">
          <li class="menu-list">
            <a href="<?php echo esc_url(home_url()); ?>">TOP</a>
          </li>
          <li class="menu-list">
            <a href="<?php echo esc_url(home_url('/works/')); ?>">WORKS</a>
          </li>
          <li class="menu-list">
            <a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT</a>
          </li>
          <li class="menu-list">
            <a href="<?php echo esc_url(home_url('/about/')); ?>">SERVICE</a>
          </li>
          <li class="menu-list">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a>
          </li>
        </ul>
      </nav>
      <button type="button" class="btn js-btn">
        <span class="btn-line"></span>
      </button>
  </header>