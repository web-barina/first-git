<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <?php wp_head(  ); ?>
</head>
<meta name="google-site-verification" content="v0UHgqf8g-tm9mRoYNFcIwV_WdTZLM2TkKXzaN31TGU" />
<?php wp_body_open(  ); ?>

<body <?php
        $classes = array();
        // 404ページの場合
        if (is_404()):
            $classes[] = 'no-page';
        endif;
        if (is_home()):
            $classes[] = 'blog-page'; // 'blog' クラスの代わりに 'blog-page' を追加
        endif;
        echo 'class="' . esc_attr(implode(' ', $classes)) . '"';
        body_class($classes);
    ?>>
    <!--loading-->
    <?php
        if (is_front_page()) :
            ?>
    <div class="js-loading js-loading-left"></div>
    <div class="js-loading js-loading-right"></div>
    <?php endif;?>
    <!--header-->
    <header class="header">
        <!--SP-hamburger-header-->
        <div class="header__inner">
            <h1 class="header__logo"><a href="<?php echo esc_url(home_url()); ?>">ObaRina</a>
            </h1>
            <div class="header__content">
                <div class="header__hamburger" id="js-hamburger">
                    <span></span>
                    <span>Menu</span>
                    <span></span>
                </div>
                <!--PC-header-->
                <nav class="header__pc-nav">
                    <ul class="header__items">
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url('biography')); ?>">
                                <div class="header__titles">
                                    <p class="header__titles-english">Biography</p>
                                    <p class="header__titles-japanese">経歴</p>
                                </div>
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url('performance')); ?>">
                                <div class="header__titles">
                                    <p class="header__titles-english">Performance</p>
                                    <p class="header__titles-japanese">演奏動画</p>
                                </div>
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url('blog')); ?>">
                                <div class="header__titles">
                                    <p class="header__titles-english">Blog</p>
                                    <p class="header__titles-japanese">ブログ</p>
                                </div>
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url('repertory')); ?>">
                                <div class="header__titles">
                                    <p class="header__titles-english">Repertory</p>
                                    <p class="header__titles-japanese">レパートリー</p>
                                </div>
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url('contact')); ?>">
                                <div class="header__titles">
                                    <p class="header__titles-english">Contact</p>
                                    <p class="header__titles-japanese">お問い合わせ</p>
                                </div>
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo esc_url(home_url('privacypolicy')); ?>">
                                <div class="header__titles">
                                    <p class="header__titles-english">PrivacyPolicy</p>
                                    <p class="header__titles-japanese">プライバシーポリシー</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--SP-header-->
        <div class="header__sp-nav">
            <div class="header__site-map-wrapper">
                <div class="header__site-map-inner">
                    <nav class="header__site-map site-map">
                        <ul class="site-map__contents">
                            <li class="site-map__item">
                                <a href="<?php echo esc_url(home_url('biography')); ?>">
                                    <div class="site-map__titles">
                                        <p class="site-map__main-title">Biography</p>
                                        <p class="site-map__sub-title">経歴</p>
                                    </div>
                                </a>
                            </li>
                            <li class="site-map__item">
                                <a href="<?php echo esc_url(home_url('performance')); ?>">
                                    <div class="site-map__titles">
                                        <p class="site-map__main-title">Performance</p>
                                        <p class="site-map__sub-title">演奏動画</p>
                                    </div>
                                </a>
                            </li>
                            <li class="site-map__item">
                                <a href="<?php echo esc_url(home_url('blog')); ?>">
                                    <div class="site-map__titles">
                                        <p class="site-map__main-title">Blog</p>
                                        <p class="site-map__sub-title">ブログ</p>
                                    </div>
                                </a>
                            </li>
                            <li class="site-map__item">
                                <a href="<?php echo esc_url(home_url('repertory')); ?>">
                                    <div class="site-map__titles">
                                        <p class="site-map__main-title">Repertory</p>
                                        <p class="site-map__sub-title">レパートリー</p>
                                    </div>
                                </a>
                            </li>
                            <li class="site-map__item">
                                <a href="<?php echo esc_url(home_url('contact')); ?>">
                                    <div class="site-map__titles">
                                        <p class="site-map__main-title">Contact</p>
                                        <p class="site-map__sub-title">お問い合わせ</p>
                                    </div>
                                </a>
                            </li>
                            <li class="site-map__item">
                                <a href="<?php echo esc_url(home_url('privacypolicy')); ?>">
                                    <div class="site-map__titles">
                                        <p class="site-map__main-title">PrivacyPolicy</p>
                                        <p class="site-map__sub-title">プライバシーポリシー</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <?php if (!is_front_page()) : ?>
    <?php if (is_page('biography')) : ?>
    <section class="lower-FV">
        <div class="lower-FV__img lower-FV__img--biography">
            <h1>Biography</h1>
        </div>
    </section>
    <?php elseif (is_home('blog') || is_single() || is_search() || is_date() || is_category()) : ?>
    <section class="lower-FV">
        <div class="lower-FV__img lower-FV__img--blog">
            <h1>Blog</h1>
        </div>
    </section>
    <?php elseif (is_archive('repertory')) : ?>
    <section class="lower-FV">
        <div class="lower-FV__img lower-FV__img--repertory">
            <h1>Repertory</h1>
        </div>
    </section>
    <?php elseif (is_page('contact') || is_page('thanks') ) : ?>
    <section class="lower-FV">
        <div class="lower-FV__img lower-FV__img--contact">
            <h1>Contact</h1>
        </div>
    </section>
    <?php elseif (is_page('privacypolicy') ) : ?>
    <section class="lower-FV">
        <div class="lower-FV__img lower-FV__img--performance">
            <h1>PrivacyPolicy</h1>
        </div>
    </section>
    <?php elseif (is_page('performance')) : ?>
    <section class="lower-FV">
        <div class="lower-FV__img lower-FV__img--performance">
            <h1>Performance</h1>
        </div>
    </section>
    <?php else : ?>
    <!-- Other Pages FV -->
    <?php endif; ?>
    <?php endif; ?>
    <main>
        <!-- パンくず -->
        <?php if (!is_front_page()) : ?>
        <div class="bread">
            <div class="bread__inner inner">
                <?php if (function_exists('bcn_display')): 
                    // 404ページの場合のクラスを設定
                    $breadcrumb_class = is_404() ? 'no-page__bread' : ''; 
                ?>
                <div id="<?php echo is_404() ? 'no-page__bread' : 'breadcrumb'; ?>" vocab="http://schema.org/"
                    typeof="BreadcrumbList">
                    <?php bcn_display(); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>