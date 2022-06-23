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

  <main>
    <section class="p-introduction l-section">
      <div class="p-introduction__inner l-section__inner">
        <h3 class="p-introduction__heading l-section__heading">TOEFL学習でこんな悩みありませんか？</h3>

        <div class="p-introduction__worries">
          <p class="p-introduction__worrie">
            勉強の習慣が<br>
            身についていない
          </p>
          <p class="p-introduction__worrie">
            勉強しているはず<br>
            なのに点数が伸びない
          </p>
          <p class="p-introduction__worrie">
            正しい勉強方法が<br>
            わからない
          </p>
        </div>

        <div class="p-introduction__answer">
          <div class="p-introduction__answer-inner">
            <h4 class="p-introduction__answer-heading">Engressは<br>
              <span class="p-introduction__underline">TOEFLに特化したスクール</span>です
            </h4>
            <p class="p-introduction__answer-text">
              完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>
              TOEFLの苦手分野を克服します。
            </p>
          </div>
        </div>

      </div>
    </section>
  </main>

  <footer><?php wp_footer(); ?></footer>
</body>

</html>