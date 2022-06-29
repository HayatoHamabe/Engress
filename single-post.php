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
    <div class="p-single l-single">
      <div class="p-single__main l-single__main">
        <article class="p-single__article">
          <div class="p-single__article-inner">
            <!-- カテゴリ取得 -->
            <?php $category = get_the_category(); ?>
            <span class="p-single__category"><?php echo $category[0]->cat_name; ?></span>
            <h1 class="p-single__title"><?php the_title(); ?></h1>

            <div class="p-sns">
              <div class="p-sns__inner">
                <ul class="p-sns__list">
                  <li class="p-sns__item">
                    <div class="fb-like" data-href="URLが入る" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                  </li>
                  <li class="p-sns__item">
                    <a href="https://twitter.com/intent/tweet" class="twitter-share-button" data-show-count="false" data-size="small" data-lang="ja">ツイート</a>
                  </li>
                </ul>

                <time datetime="<?php echo get_the_date("Y-m-d"); ?>" class="p-single__time"><?php echo get_the_date("Y-m-d"); ?></time>
              </div>
            </div><!-- p-sns -->

            <div class="p-single__img-wrapper">
              <?php $category = get_the_category(); ?>
              <span class="p-blogs__category"><?php echo $category[0]->cat_name; ?></span>
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', ['class' => 'p-single__img']); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="no-image" class='p-single__img' />
              <?php endif; ?>
            </div>

            <div class="p-single-post-content"><?php the_content(); ?></div>
          </div>
        </article><!-- single-article-->

        <div class="p-recommend">
          <h2 class="p-recommend__heading">おすすめの記事</h2>
          <?php
          // タグ「ブログ」がついた投稿の最新３件を取得
          $arg   = array(
            'posts_per_page' => 3, // 表示する件数
            'orderby'        => 'date',
            'order'          => 'ASC',
            'tag'            => 'pickup'
          );
          $posts = get_posts($arg);
          if ($posts) : ?>
            <div class="p-recommend__blog-list">
              <?php
              foreach ($posts as $post) :
                setup_postdata($post); ?>
                <div class="p-recommend__blog-item">
                  <div class="p-recommend__blog-img-wrapper">
                    <a href="<?php the_permalink() ?>">
                      <?php $category = get_the_category(); ?>
                      <span class="p-recommend__blog-category"><?php echo $category[0]->cat_name; ?></span>
                      <?php the_post_thumbnail('full', ['class' => 'p-recommend__blog-img']); ?>
                    </a>
                  </div>
                  <div class="p-recommend__blog-info">
                    <time datetime="<?php echo get_the_date("Y-m-d"); ?>" class="p-recommend__blog-time"><?php echo get_the_date("Y-m-d"); ?></time>

                    <a href="<?php the_permalink(); ?>" class="p-recommend__blog-link">
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
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php
          endif;
          wp_reset_postdata();
          ?>
        </div><!-- pickup-blog -->
      </div>

      <div class="p-sidebar l-single__sidebar">
        <aside class="p-sidebar__relation">
          <div class="p-sidebar__relation-title">関連記事</div>
          <!-- 表示している記事と同じカテゴリで絞り込み -->
          <?php
          $categories = get_the_category();
          $category_ID = array();
          foreach ($categories as $category) :
            array_push($category_ID, $category->cat_ID);
          endforeach;
          $args = array(
            // 現在表示している記事を除く
            'post__not_in' => array($post->ID),
            'posts_per_page' => 3,
            'category__in' => $category_ID,
            'orderby' => 'rand',
          );
          $query = new WP_Query($args);
          ?>
          <!-- 絞り込んだカテゴリで記事表示 -->
          <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
              <div class="p-sidebar__relation-blog">
                <a href="<?php the_permalink() ?>" class="p-sidebar__relation-img-link">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full', ['class' => 'p-sidebar__relation-img']); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="no-image" class="p-sidebar__relation-img" />
                  <?php endif; ?>
                </a>
                <a href="<?php the_permalink() ?>" class="p-sidebar__relation-link">
                  <?php the_title(); ?>
                </a>
              </div>

            <?php endwhile;
          else : ?>
            <p>関連記事はありません</p>
          <?php endif; ?>

          <?php wp_reset_postdata(); ?>
        </aside>

        <aside class="p-sidebar__category">
          <div class="p-sidebar__category-title">カテゴリー</div>
          <ul class="p-sidebar__category-list">
            <?php
            $cats = get_categories();
            foreach ($cats as $cat) {
              echo '<li class="p-sidebar__category-item"><a href="' . get_category_link($cat->term_id) . '" class="p-sidebar__category-link">' . "・" . $cat->name . '</a></li>';
            }
            ?>
          </ul>
        </aside>
      </div>
    </div>

    <?php get_template_part('/common/contact'); ?>
  </main>

  <?php get_template_part('/common/footer'); ?>
  <?php get_footer(); ?>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v14.0" nonce="foX9trmZ"></script>
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</body>

</html>