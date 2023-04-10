<?php get_header(); ?>

<div id="mask"></div>

<section id="service" class="wrapper">
    <div class="sec-title">
      <h3>SERVICE</h3>
    </div>

    <div class="service-list wrapper">
      <ul class="service-item">
        <li>
          <p class="service-img">
          <img src="<?php echo esc_url(get_theme_file_uri('img/code-1.png')); ?>" alt="コードのアイコン">
          </p>
          <div class="service-content">
            <h4 class="service-title">HP・LP制作</h4>
            <p class="service-text">新規作成やリニューアルなど、<br>頂いたデザインを元にHTML/CSS(SCSS)/JAVASCRIPTを使ってサイトを制作します。</p>
          </div>
        </li>
        <li>
          <p class="service-img">
          <img src="<?php echo esc_url(get_theme_file_uri('img/wordpresssite-1.png')); ?>" alt="女性がパソコンを持っているイラスト">
          </p>
          <div class="service-content">
            <h4 class="service-title">WordPress</h4>
            <p class="service-text">お知らせやブログの更新が簡単に行えるWordPressを使ってサイトを制作します。</p>
          </div>
        </li>
        <li>
          <p class="service-img">
          <img src="<?php echo esc_url(get_theme_file_uri('img/responsive-1.png')); ?>" alt="スマートフォンのイラスト">
          </p>
          <div class="service-content">
            <h4 class="service-title">レスポンシブデザイン</h4>
            <p class="service-text">デバイスの画面サイズに応じて表示を最適化します。</p>
          </div>
        </li>
      </ul><!-------service-item-------->
    </div><!-------service-list-------->  
  </section><!-----------#service .wrapper-------->

  <section id="about" class="wrapper">
    <div class="sec-title">
      <h3>rokocode</h3>
      <p>について</p>
    </div>
    <p class="about-text">東京都の多摩地区で主人と子供＋猫2匹で暮らしています。</p>
    <p class="about-text">「報・連・相」を大切にお客様に寄り添い、<br>丁寧なコミュニケーションでご希望のWebサイトをお作りします。<br>どうぞお気軽にお問い合わせください。</p>
    
  </section>

<?php get_footer(); ?>