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
    </section><!-- p-introduction -->

    <section class="p-features l-section">
      <div class="p-features__inner l-section__inner">
        <h3 class="p-features__heading l-section__heading">TOEFL対策に特化したEngress3つの強み</h3>

        <div class="p-features__features">
          <div class="p-features__card">
            <div class="p-features__card-content">
              <span class="p-features__card-tag">特徴1</span>
              <h5 class="p-features__card-title">
                TOEFLに最適化された<br>
                無駄のないカリキュラム
              </h5>
              <p>TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
            </div>

            <div class="p-features__card-img-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/img/feature/feature01.png" alt="feature1" class="p-features__card-img">
            </div>
          </div><!-- card1 -->

          <div class="p-features__card">
            <div class="p-features__card-content">
              <span class="p-features__card-tag">特徴2</span>
              <h5 class="p-features__card-title">
                TOEFLに最適化された<br>
                無駄のないカリキュラム
              </h5>
              <p>TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
            </div><!-- card2 -->

            <div class="p-features__card-img-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/img/feature/feature02.png" alt="feature2" class="p-features__card-img">
            </div>
          </div>

          <div class="p-features__card">
            <div class="p-features__card-content">
              <span class="p-features__card-tag">特徴3</span>
              <h5 class="p-features__card-title">
                TOEFLに最適化された<br>
                無駄のないカリキュラム
              </h5>
              <p>TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
            </div>

            <div class="p-features__card-img-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/img/feature/feature03.png" alt="feature3" class="p-features__card-img">
            </div>
          </div><!-- card3 -->
        </div>

        <div class="p-features__price">
          <div class="p-features__price-heading">Engressの料金プランはこちら</div>
          <a href="<?php echo esc_url(home_url('price')); ?>" class="p-features__price-link">料金を見てみる</a>
        </div>
    </section><!-- p-features -->
  </main>

  <footer><?php wp_footer(); ?></footer>
</body>

</html>