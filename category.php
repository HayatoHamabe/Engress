<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>

  <!-- header -->
  <?php get_template_part('/common/header') ?>

  <div class="c-breadcrumb single">
    <div class="c-breadcrumb__inner breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
  </div>

  <main>
    <section class="p-category">
      <div class="p-category__inner">
        <?php $category = get_the_category(); ?>
        <h1 class="p-category__title"><?php echo $category[0]->cat_name; ?>一覧</h1>

        <div class="p-category__list">
          <!-- 検索カテゴリで絞り込み -->
          <?php
          $categories = get_the_category();
          $category_ID = array();
          foreach ($categories as $category) :
            array_push($category_ID, $category->cat_ID);
          endforeach;
          $args = array(
            'category__in' => $category_ID,
          );
          $query = new WP_Query($args);
          ?>
          <!-- 絞り込んだカテゴリで記事表示 -->
          <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
              <div class="p-category__item">
                <a href="<?php the_permalink() ?>" class="p-category__img-link">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full', ['class' => 'p-category__img']); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="no-image" class="p-category__img" />
                  <?php endif; ?>
                </a>

                <div class="p-category__info">
                  <time datetime="<?php echo get_the_date("Y-m-d"); ?>" class="p-category__time"><?php echo get_the_date("Y-m-d"); ?></time>
                  <a href="<?php the_permalink(); ?>" class="p-category__link">
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
                  <p class="p-category__text">
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
          else : ?>
            <p>関連記事はありません</p>
          <?php endif; ?>

          <?php wp_reset_postdata(); ?>
        </div>
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
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v14.0" nonce="foX9trmZ"></script>
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</body>

</html>