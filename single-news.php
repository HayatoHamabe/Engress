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
            <h1 class="p-single__title"><?php the_title(); ?></h1>

            <div class="p-single-post-content"><?php the_content(); ?></div>
          </div>
        </article><!-- single-article-->
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