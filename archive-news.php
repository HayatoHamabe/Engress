<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>

  <!-- header -->
  <?php get_template_part('/common/header') ?>

  <div class="p-sub-hero">
    <div class="p-sub-hero__inner news">
      <div class="p-sub-hero__content">
        <h1 class="p-sub-hero__title">お知らせ</h1>
      </div>
    </div>
  </div>

  <div class="c-breadcrumb">
    <div class="c-breadcrumb__inner breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
  </div>

  <main>
    <section class="p-news l-section__page">
      <div class="p-news__inner l-section__page">
        <h2 class="p-news__heading l-section__page-heading">お知らせ一覧</h2>
        <ul class="p-news__list">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <li class="p-news__item">
                <time datetime="<?php echo get_the_date("Y-m-d"); ?>" class="p-news__time"><?php echo get_the_date("Y-m-d"); ?></time>
                <a href="<?php the_permalink(); ?>" class="p-news__link">
                  <!-- 文字数 40 文字以上のとき、... で省略表示する -->
                  <?php
                  if (mb_strlen($post->post_title) > 40) {
                    $title = mb_substr($post->post_title, 0, 40);
                    echo $title . '...';
                  } else {
                    echo $post->post_title;
                  }
                  ?>
                </a>
              </li>
          <?php endwhile;
          endif;
          wp_reset_postdata(); ?>
        </ul>
        <!-- pagenation -->
        <div class="c-pagination">
          <?php wp_pagenavi(); ?>
        </div><!-- /pagenation -->
      </div>
    </section>

    <?php get_template_part('/common/contact'); ?>
  </main>

  <?php get_template_part('/common/footer'); ?>
  <?php get_footer(); ?>

</body>

</html>