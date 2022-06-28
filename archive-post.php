<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>

  <!-- header -->
  <?php get_template_part('/common/header') ?>

  <div class="p-sub-hero">
    <div class="p-sub-hero__inner blogs">
      <div class="p-sub-hero__content">
        <h1 class="p-sub-hero__title">ブログ</h1>
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
    <section class="p-blogs l-section__page">
      <div class="p-blogs__inner l-section__page">
        <h2 class="p-blogs__heading l-section__page-heading">新着一覧</h2>

        <div class="p-blogs__blog">
          <div class="p-blogs__list">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="p-blogs__item">
                  <div class="p-blogs__img-wrapper">
                    <a href="<?php the_permalink(); ?>">
                      <?php $category = get_the_category(); ?>
                      <span class="p-blogs__category"><?php echo $category[0]->cat_name; ?></span>
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', ['class' => 'p-blogs__img']); ?>
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="no-image" class='p-blogs__img' />
                      <?php endif; ?>
                    </a>
                  </div>
                  <div class="p-blogs__info">
                    <time datetime="<?php echo get_the_date("Y-m-d"); ?>" class="p-blogs__time"><?php echo get_the_date("Y.m.d"); ?></time>
                    <a href="<?php the_permalink(); ?>" class="p-blogs__link">
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
                    <p class="p-blog__text">
                      <?php
                      if (mb_strlen($post->post_content, 'UTF-8') > 70) {
                        $content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 70, 'UTF-8'));
                        echo $content . '……';
                      } else {
                        echo str_replace('\n', '', strip_tags($post->post_content));
                      }
                      ?>
                    </p>
                  </div>
                </div>
            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
          </div>
          <!-- pagenation -->
          <div class="p-pagination">
            <?php wp_pagenavi(); ?>
          </div><!-- /pagenation -->
        </div>
      </div>
      </div>
    </section>

    <?php get_template_part('/common/contact'); ?>
  </main>

  <?php get_template_part('/common/footer'); ?>
  <?php get_footer(); ?>

</body>

</html>