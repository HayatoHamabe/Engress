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

    <section class="p-success l-section">
      <div class="p-success__inner l-section__inner">
        <h3 class="p-success__heading l-section__heading">TOEFL成功事例</h3>

        <div class="p-success__cards">
          <div class="p-success__card">
            <p class="p-success__card-text">TOEFL iBT 100点を突破してコロンビア大学大学院に進学できました！</p>
            <div class="p-success__card-img-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/img/model/model01.png" alt="model01" class="p-success__card-img">
            </div>
            <div class="p-success__personal">
              <span class="p-success__profession">会社員</span>
              <span class="p-success__name">T.Fujiyamaさん</span>
            </div>
            <div class="p-success__score">3ヶ月でTOEFL80→108点</div>
          </div><!-- card1 -->

          <div class="p-success__card">
            <p class="p-success__card-text">半年でTOEFL 40点→100点を達成！コロンビア大学大学院に合格</p>
            <div class="p-success__card-img-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/img/model/model02.png" alt="model02" class="p-success__card-img">
            </div>
            <div class="p-success__personal">
              <span class="p-success__profession">大学生</span>
              <span class="p-success__name">Y.Takiyamaさん</span>
            </div>
            <div class="p-success__score">6ヶ月でTOEFL40→100点</div>
          </div><!-- card2 -->

          <div class="p-success__card">
            <p class="p-success__card-text">早稲田大学 国際教養学部AO入試合格！TOEFL iBT 109点</p>
            <div class="p-success__card-img-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/img/model/model03.png" alt="model03" class="p-success__card-img">
            </div>
            <div class="p-success__personal">
              <span class="p-success__profession">高校生</span>
              <span class="p-success__name">M.Yamadaさん</span>
            </div>
            <div class="p-success__score">5ヶ月でTOEFL68→109点</div>
          </div><!-- card3 -->

        </div>
      </div>
    </section><!-- p-success -->

    <section class="p-flow l-section">
      <div class="p-flow__inner l-section__inner">
        <h3 class="p-flow__heading l-section__heading">ご利用の流れ</h3>

        <div class="p-flow__flow">
          <div class="p-flow__list-head">
            <span class="p-flow__flow-number">01</span>
            <span class="p-flow__flow-action">お問い合わせ</span>
          </div>
          <span class="p-flow__flow-text">まずはフォームまたはお電話からお申し込みください。</span>
        </div><!-- flow1 -->

        <div class="p-flow__flow">
          <div class="p-flow__list-head">
            <span class="p-flow__flow-number">02</span>
            <span class="p-flow__flow-action">ヒアリング</span>
          </div>
          <span class="p-flow__flow-text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</span>
        </div><!-- flow2 -->

        <div class="p-flow__flow">
          <div class="p-flow__list-head">
            <span class="p-flow__flow-number">03</span>
            <span class="p-flow__flow-action">学習プランのご提供</span>
          </div>
          <span class="p-flow__flow-text">目標達成のために最適な学習プランをご提案致します。</span>
        </div><!-- flow3 -->

        <div class="p-flow__flow">
          <div class="p-flow__list-head">
            <span class="p-flow__flow-number">04</span>
            <span class="p-flow__flow-action">ご入会</span>
          </div>
          <span class="p-flow__flow-text">お申込み完了後、レッスンがスタートします。</span>
        </div><!-- flow4 -->
      </div>
    </section>
  </main>

  <footer><?php wp_footer(); ?></footer>
</body>

</html>