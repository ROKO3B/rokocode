<?php get_header(); ?>

<div id="mask"></div>

  <div class="key-visual">
    <div class="slider">
      <img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual1.png')); ?>" alt="コスモスの画像">
      <img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual2.png')); ?>" alt="風船にぶら下がったプレゼント">
      <img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual3.png')); ?>" alt="飛び出してくるたくさんのボール">
    </div>
    <div class="key-visual-logo">
      <h2>rokocode<br>
      Portfolio</h2>
    </div>

  </div><!--------key-visual------->

  <section id="works" class="wrapper">
    <div class="sec-title">
      <h3>WORKS</h3>
    </div>
    <ul class="works-list">
      <li class="works-item">
        <img src="<?php echo esc_url(get_theme_file_uri('img/site1.png')); ?>" alt="スニーカーのストアサイト">
          <h4 class="works-title">Sneakers-スニーカーのストアサイト-</h4>
          <a class="btn-neumorphism" href="https://sneakers-shop-site.netlify.app/" target="_blank" rel="noopener noreferrer">view more</a>
        <div class="works-content">
          <ul class="tags">ko
            <li>HTML5</li>
            <li>CSS3</li>
            <li>SCSS</li>
            <li>JAVASCRIPT</li>
            <li>JQERY</li>
          </ul>
        </div><!-----works-content----->
      </li>
      <li class="works-item">
        <img src="<?php echo esc_url(get_theme_file_uri('img/site2.png')); ?>" alt="カフェのサイト">
        <h4 class="works-title">COFFEE -カフェのサイト-</h4>
        <a class="btn-neumorphism" href="https://coffee-cafe-site.netlify.app/" target="_blank" rel="noopener noreferrer">view more</a>
        <div class="works-content">
          <ul class="tags">
            <li>HTML5</li>
            <li>CSS3</li>
            <li>SCSS</li>
          </ul>
        </div><!-----works-content----->
      </li>
      <li class="works-item">
        <img src="<?php echo esc_url(get_theme_file_uri('img/site3.png')); ?>" alt="インテリアショップ">
        <h4 class="works-title">Furniture Design-インテリアショップのサイト-</h4>
        <a class="btn-neumorphism">view more</a>
        <div class="works-content">
          <ul class="tags">
            <li>WordPress</li>
            <li>HTML5</li>
            <li>CSS3</li>
            <li>SCSS</li>
            <li>JAVASCRIPT</li>
            <li>JQERY</li>
          </ul>
        </div><!-----works-content----->
      </li>
      <li class="works-item">
        <img src="<?php echo esc_url(get_theme_file_uri('img/site1.png')); ?>" alt="rokocodeのPortfolioサイト">
        <h4 class="works-title">Portfolio-rokocodeのPortfolioサイト-</h4>
        <a class="btn-neumorphism">view more</a>
        <div class="works-content">
          <ul class="tags">
            <li>HTML5</li>
            <li>CSS3</li>
            <li>SCSS</li>
            <li>JAVASCRIPT</li>
            <li>JQERY</li>
          </ul>
        </div><!-----works-content----->
      </li>
    </ul>
  </section><!-----------#works .wrapper-------->

  <?php get_footer(); ?>