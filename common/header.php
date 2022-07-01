<header>
  <div class="l-header">
    <div class="l-header__inner">
      <div class="p-header__left">
        <div class="p-header__logo-wrapper">
          <!-- front-pageではロゴをh1タグで囲む -->
          <?php if (is_front_page()) : ?>
            <h1>
              <a href="<?php echo esc_url(home_url()); ?>" class="p-header__logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Engress" class="p-header__logo">
              </a>
            </h1>
          <?php else : ?>
            <div>
              <a href="<?php echo esc_url(home_url()); ?>" class="p-header__logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Engress" class="header__logo">
              </a>
            </div>
          <?php endif; ?>
        </div>

        <div class="l-header-nav">
          <nav class="p-global-nav" id="global-nav">
            <ul class="p-global-nav__list">
              <li class="p-global-nav__item">
                <a href="<?php echo esc_url(home_url()); ?>" class="p-gloval-nav__link">ホーム</a>
              </li>
              <li class="p-global-nav__item">
                <a href="<?php echo esc_url(home_url("news")); ?>" class="p-gloval-nav__link">お知らせ</a>
              </li>
              <li class="p-global-nav__item">
                <a href="<?php echo esc_url(home_url("blogs")); ?>" class="p-gloval-nav__link">ブログ</a>
              </li>
              <li class="p-global-nav__item">
                <a href="<?php echo esc_url(home_url("price")); ?>" class="p-gloval-nav__link">コース・料金</a>
              </li>
            </ul>
          </nav>
        </div>
      </div><!-- header-left -->

      <div class="p-header__right">
        <div class="p-header__business">
          <div class="p-header__business-hours">平日08:00 ~ 20:00</div>
          <div class="p-header__business-phone">
            <svg class="p-header__business-phone-icon" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
              <g>
                <path class="st0" d="M94.811,21.696c-35.18,22.816-42.091,94.135-28.809,152.262c10.344,45.266,32.336,105.987,69.42,163.165
                    c34.886,53.79,83.557,102.022,120.669,129.928c47.657,35.832,115.594,58.608,150.774,35.792
                    c17.789-11.537,44.218-43.058,45.424-48.714c0,0-15.498-23.896-18.899-29.14l-51.972-80.135
                    c-3.862-5.955-28.082-0.512-40.386,6.457c-16.597,9.404-31.882,34.636-31.882,34.636c-11.38,6.575-20.912,0.024-40.828-9.142
                    c-24.477-11.262-51.997-46.254-73.9-77.947c-20.005-32.923-40.732-72.322-41.032-99.264c-0.247-21.922-2.341-33.296,8.304-41.006
                    c0,0,29.272-3.666,44.627-14.984c11.381-8.392,26.228-28.286,22.366-34.242l-51.972-80.134c-3.401-5.244-18.899-29.14-18.899-29.14
                    C152.159-1.117,112.6,10.159,94.811,21.696z">
                </path>
              </g>
            </svg>
            0120-456-7890
          </div>
        </div>

        <div class="p-header-btn__document-wrapper">
          <a href="<?php echo esc_url(home_url("form")); ?>" class="p-header-btn__document">資料請求</a>
        </div>

        <div class="p-header-btn__contact-wrapper">
          <a href="<?php echo esc_url(home_url("form")); ?>" class="p-header-btn__contact">お問い合わせ</a>
        </div>

        <!-- only low 960px -->
        <button class="c-btn-menu" onclick="toggle()">
          <span class="c-btn-line" id="hamburger-line"></span>
        </button>
      </div><!-- p-header-right -->

    </div>
  </div>
</header>
<!-- loading画面 -->
<div id="js-loader" class="loader"></div>