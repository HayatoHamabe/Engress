<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>

  <!-- header -->
  <?php get_template_part('/common/header') ?>

  <div class="p-hero">
    <div class="p-hero__inner">
      <div class="p-hero__content">
        <h2 class="p-hero__title">TOEFL対策はEngress</h2>
        <p class="p-hero__text">
          日本人へのTOEFL指導歴豊かな講師陣の<br>
          コーチング型TOEFLスクール
        </p>

        <div>
          <a href="<?php echo esc_url(home_url('contact')); ?>" class="p-hero__btn">資料請求</a>
        </div>
        <div>
          <a href="<?php echo esc_url(home_url('contact')); ?>" class="p-hero__link">お問い合わせ</a>
        </div>
      </div>
    </div>
  </div>

  <main></main>

  <footer><?php wp_footer(); ?></footer>
</body>

</html>