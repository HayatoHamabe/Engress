<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
  <title><?php wp_title('|', true, 'left'); ?></title>
</head>

<body>

  <!-- header -->
  <?php get_template_part('/common/header') ?>

  <div class="p-hero">
    <div class="p-hero__inner">
      <div class="p-hero__content">
        <h2 class="p-hero__title">TOEFL対策は<br class="sp-only">Engress</h2>
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
        <h3 class="p-introduction__heading l-section__heading">TOEFL学習で<br class="sp-only">こんな悩み<br class="sp-only">ありませんか？</h3>

        <div class="p-introduction__worries">
          <p class="p-introduction__worrie">
            勉強の習慣が<br class="not-sp-only">身についていない
          </p>
          <p class="p-introduction__worrie">
            勉強しているはず<br class="not-sp-only">なのに点数が伸びない
          </p>
          <p class="p-introduction__worrie">
            正しい勉強方法が<br class="not-sp-only">わからない
          </p>
        </div>

        <div class="p-introduction__answer">
          <div class="p-introduction__answer-inner">
            <h4 class="p-introduction__answer-heading">Engressは<br>
              <span class="p-introduction__underline">TOEFLに特化したスクール</span>です
            </h4>
            <p class="p-introduction__answer-text">
              完全オーダーメイドで、<br class="sp-only">１人１人の悩みに合わせた最適な指導で<br>
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
              <p class="p-features__card-text">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
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
              <p class="p-features__card-text">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
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
              <p class="p-features__card-text">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
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

        <?php
        $args = [
          'post_type' => 'success-case',
          'posts_per_page' => 3, // 表示数
        ];
        $successCases = new WP_Query($args); ?>
        <?php if ($successCases->have_posts()) : ?>
          <div class="p-success__cards">
            <?php while ($successCases->have_posts()) : $successCases->the_post(); ?>
              <div class="p-success__card">
                <p class="p-success__card-text"><?php the_field('top-text'); ?></p>
                <div class="p-success__card-img-wrapper">
                  <img src="<?php the_field('user-img'); ?>" alt="model-img" class="p-success__card-img">
                </div>
                <div class="p-success__personal">
                  <span class="p-success__profession"><?php the_field('profession'); ?></span>
                  <span class="p-success__name"><?php the_field('name'); ?>さん</span>
                </div>
                <div class="p-success__score">3ヶ月でTOEFL80→108点</div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

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

    <section class="p-question l-section">
      <div class="p-question__inner l-section__inner">
        <h3 class="p-question__heading l-section__heading">よくある質問</h3>

        <div class="p-question__list">
          <div class="p-question__item">
            <div class="p-question__question active">Engressはサラリーマンでも学習を続けられるでしょうか？</div>
            <div class="p-question__answer active">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</div>
          </div><!-- question-item1 -->

          <div class="p-question__item">
            <div class="p-question__question">教材はオリジナルのものを使用しているのでしょうか？</div>
            <div class="p-question__answer">教材はEngressオリジナルのものを使用しています。</div>
          </div><!-- question-item2 -->

          <div class="p-question__item">
            <div class="p-question__question">講師に日本人はいますか？</div>
            <div class="p-question__answer">日本人講師も在籍しています。</div>
          </div><!-- question-item3 -->

          <div class="p-question__item">
            <div class="p-question__question">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</div>
            <div class="p-question__answer">TOEFLE対策専門のため、それ以外のサポートは行っておりません。</div>
          </div><!-- question-item4 -->
        </div>
      </div>
    </section>

    <section class="p-post l-section">
      <div class="p-post__inner l-section__inner">

        <div class="p-post__blog">
          <h4 class="p-post__heading">ブログ</h4>
          <?php
          // タグ「ブログ」がついた投稿の最新３件を取得
          $arg   = array(
            'posts_per_page' => 3, // 表示する件数
            'orderby'        => 'Date',
            'order'          => 'DESC',
            'tag'            => 'ブログ'
          );
          $posts = get_posts($arg);
          if ($posts) : ?>
            <div class="p-post__blog-list">
              <?php
              foreach ($posts as $post) :
                setup_postdata($post); ?>
                <div class="p-post__blog-item">
                  <div class="p-post__blog-img-wrapper">
                    <?php $category = get_the_category(); ?>
                    <span class="p-post__blog-category"><?php echo $category[0]->cat_name; ?></span>
                    <?php the_post_thumbnail('thumbnail', ['class' => 'p-post__blog-img']); ?>
                  </div>
                  <div class="p-post__blog-info">
                    <a href="<?php the_permalink(); ?>" class="p-post__blog-link">
                      <!-- 文字数 30 文字以上のとき、... で省略表示する -->
                      <?php
                      if (mb_strlen($post->post_title) > 30) {
                        $title = mb_substr($post->post_title, 0, 30);
                        echo $title . '...';
                      } else {
                        echo $post->post_title;
                      }
                      ?>
                    </a>
                    <time datetime="<?php echo get_the_date("Y-m-d"); ?>" class="p-post__blog-time"><?php echo get_the_date("Y-m-d"); ?></time>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php
          endif;
          wp_reset_postdata();
          ?>
        </div>

        <div class="p-post__news">
          <h4 class="p-post__heading">お知らせ</h4>

          <?php
          $args = [
            'post_type' => 'news',
            'posts_per_page' => 3, // 表示数
          ];
          $news = new WP_Query($args); ?>
          <?php if ($news->have_posts()) : ?>
            <div class="p-post__news-list">

              <?php while ($news->have_posts()) : $news->the_post(); ?>
                <div class="p-post__news-item">
                  <div class="p-post__news-info">
                    <time datetime="<?php echo get_the_date("Y-m-d"); ?>" class="p-post__news-time"><?php echo get_the_date("Y-m-d"); ?></time>
                    <a href="<?php the_permalink(); ?>" class="p-post__news-link"><?php the_title(); ?></a>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <?php get_template_part('/common/contact'); ?>
  </main>

  <?php get_template_part('/common/footer'); ?>
  <?php get_footer(); ?>

</body>

</html>