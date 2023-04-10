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

  <section id="contact" class="wrapper">
    <div class="sec-title">
      <h3>CONTACT</h3>
      <p>お気軽にお問い合わせください</p>
    </div>

    <?php echo do_shortcode('[contact-form-7 id="13" title="コンタクトフォーム 1"]'); ?>

  </section>

<?php get_footer(); ?>