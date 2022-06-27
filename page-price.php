<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
</head>

<body>

  <!-- header -->
  <?php get_template_part('/common/header') ?>

  <div class="p-sub-hero">
    <div class="p-sub-hero__inner">
      <div class="p-sub-hero__content">
        <h1 class="p-sub-hero__title">コース・料金</h1>
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
    <section class="p-plan l-section__page">
      <div class="p-plan__inner l-section__page">
        <h2 class="p-plan__heading l-section__page-heading">料金体系</h2>

        <div class="p-plan__system">
          <div class="p-plan__admission">入会金 <?php echo number_format(get_field("adminission")); ?>円</div>
          <span class="p-plan__plus">+</span>
          <div class="p-plan__monthly">月額費用</div>
        </div>

        <p class="p-plan__text">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
      </div>
    </section>

    <section class="p-plan-list l-section__page">
      <div class="p-plan-list__inner l-section__page">
        <h2 class="p-plan-list__heading l-section__page-heading">料金表</h2>

        <div class="p-plan-list__list js-scrollable">
          <div class="p-plan-list__item">
            <div class="p-plan-list__item-heading">基礎プラン</div>
            <div class="p-plan-list__item-inside">
              <div class="p-plan-list__price"><?php echo number_format(get_field("base")) ?>円~</div>
              <span class="p-plan-list__monthly">*月額（税抜価格）</span>

              <div class="p-plan-list__content">カリキュラム作成</div>
              <div class="p-plan-list__content">TOEFL学習サポート</div>
              <div class="p-plan-list__content">週一回のビデオMTG</div>
            </div>
          </div>

          <div class="p-plan-list__item">
            <div class="p-plan-list__item-heading">演習プラン</div>
            <div class="p-plan-list__item-inside">
              <div class="p-plan-list__price"><?php echo number_format(get_field("basis")) ?>円~</div>
              <span class="p-plan-list__monthly">*月額（税抜価格）</span>

              <div class="p-plan-list__content">カリキュラム作成</div>
              <div class="p-plan-list__content">TOEFL学習サポート</div>
              <div class="p-plan-list__content">週一回のビデオMTG</div>
              <div class="p-plan-list__content">月二回の模試（解説付き）</div>
            </div>
          </div>

          <div class="p-plan-list__item">
            <div class="p-plan-list__item-heading p-plan-list__recomend"><span>おすすめ</span>志望校対策プラン</div>
            <div class="p-plan-list__item-inside">
              <div class="p-plan-list__price p-plan-list__price-recommend"><?php echo number_format(get_field("recommend")) ?>円~</div>
              <span class="p-plan-list__monthly">*月額（税抜価格）</span>

              <div class="p-plan-list__content">カリキュラム作成</div>
              <div class="p-plan-list__content">TOEFL学習サポート</div>
              <div class="p-plan-list__content">週一回のビデオMTG</div>
              <div class="p-plan-list__content">月二回の模試（解説付き）</div>
            </div>
          </div>

          <div class="p-plan-list__item">
            <div class="p-plan-list__item-heading">フレックスプラン</div>
            <div class="p-plan-list__item-inside">
              <div class="p-plan-list__price"><?php echo number_format(get_field("flex")) ?>円~</div>
              <span class="p-plan-list__monthly">*月額（税抜価格）</span>

              <div class="p-plan-list__content">カリキュラム作成</div>
              <div class="p-plan-list__content">TOEFL学習サポート</div>
              <div class="p-plan-list__content">週一回のビデオMTG</div>
              <div class="p-plan-list__content">月二回の模試（解説付き）</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part('/common/contact'); ?>
  </main>

  <?php get_template_part('/common/footer'); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/scroll-hint.min.js"></script>
  <?php get_footer(); ?>

</body>

</html>