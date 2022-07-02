<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>

  <!-- header -->
  <?php get_template_part('/common/header') ?>

  <div class="p-sub-hero">
    <div class="p-sub-hero__inner form">
      <div class="p-sub-hero__content">
        <h1 class="p-sub-hero__title">お問い合わせ・資料請求</h1>
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
    <div class="c-form">
      <div class="c-form__inner">
        <?php the_content(); ?>
      </div>
    </div>

    <?php get_template_part('/common/contact'); ?>
  </main>

  <?php get_template_part('/common/footer'); ?>
  <?php get_footer(); ?>

</body>

</html>