<!--サイトマップ-->
<?php get_header(); ?>
<section class="site-map-page site-map-page-wrapper">
    <div class="site-map-page__inner inner">
        <nav class="site-map-page__nav site-map site-map--page">
            <div class="site-map__sp-layout site-map__sp-layout--page">
                <div class="site-map__content">
                    <div class="site-map__main-title site-map__main-title--black"><a
                            href="<?php echo get_post_type_archive_link('campaign'); ?>">キャンペーン</a>
                    </div>
                    <div class="site-map__sub-group">
                        <ul class="site-map__sub-titles">
                            <?php
                                $terms = get_terms(array(
                                    'taxonomy' => 'campaign_category',
                                    'hide_empty' => false,
                                ));
                                foreach ($terms as $term) :
                                    $term_slug = $term->slug;
                                    $term_name = $term->name;
                            ?>
                            <li class="site-map__sub-title">
                                <a href="<?php echo get_term_link($term); ?>">
                                    <?php echo esc_html($term_name); ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="site-map__main-title site-map__main-title--black"><a
                            href="<?php echo get_permalink(get_page_by_path('about-us')); ?>">私たちについて</a>
                    </div>
                </div>
                <div class="site-map__main">
                    <div class="site-map__main-title site-map__main-title--black"><a
                            href="<?php echo get_permalink(get_page_by_path('information')); ?>">ダイビング情報</a>
                    </div>
                    <div class="site-map__sub-group">
                        <ul class="site-map__sub-titles">
                            <?php
                                $terms = get_terms(array(
                                    'taxonomy' => 'campaign_category',
                                    'hide_empty' => false,
                                ));
                                foreach ($terms as $term) :
                                    $term_slug = $term->slug;
                                    $term_name = $term->name;
                            ?>
                            <li class="site-map__sub-title">
                                <a href="<?php echo get_term_link($term); ?>">
                                    <?php echo esc_html($term_name); ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="site-map__main-title site-map__main-title--black">
                        <a href="<?php echo home_url("blog"); ?>">ブログ</a>
                    </div>
                </div>
            </div>
            <div class="site-map__sp-layout site-map__sp-layout--page">
                <div class="site-map__main">
                    <div class="site-map__main-title site-map__main-title--black"><a
                            href="<?php echo get_post_type_archive_link('voice'); ?>">お客様の声</a></div>
                    <div class="site-map__main-title"><a
                            href="<?php echo get_permalink(get_page_by_path('price')); ?>">料金一覧</a></div>
                    <div class="site-map__sub">
                        <ul class="site-map__sub-titles">
                            <li class="site-map__sub-title"><a
                                    href="<?php echo get_permalink(get_page_by_path('price')) . '#license-price'; ?>">ライセンス講習</a>
                            </li>
                            <li class="site-map__sub-title"><a
                                    href="<?php echo get_permalink(get_page_by_path('price')) . '#trial-price'; ?>">体験ダイビング</a>
                            </li>
                            <li class="site-map__sub-title"><a
                                    href="<?php echo get_permalink(get_page_by_path('price')) . '#fun-price'; ?>">ファンダイビング</a>
                            </li>
                            <li class="site-map__sub-title"><a
                                    href="<?php echo get_permalink(get_page_by_path('price')) . '#special-price'; ?>">スペシャル<wbr />ダイビング</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="site-map__main">
                    <li class="site-map__main-title site-map__main-title--black"><a
                            href="<?php echo get_permalink(get_page_by_path('faq')); ?>">よくある質問</a></li>
                    <li class="site-map__main-title site-map__main-title--black">
                        <a href="<?php echo get_permalink(get_page_by_path('privacypolicy')); ?>">プライバシー<wbr />ポリシー</a>
                    </li>
                    <li class="site-map__main-title site-map__main-title--black"><a
                            href="<?php echo get_permalink(get_page_by_path('terms-of-service')); ?>">利用規約</a>
                    </li>
                    <li class="site-map__main-title site-map__main-title--black"><a
                            href="<?php echo get_permalink(get_page_by_path('contact')); ?>">お問い合わせ</a></li>
                    <li class="site-map__main-title site-map__main-title--black"><a
                            href="<?php echo get_permalink(get_page_by_path('sitemap')); ?>">サイトマップ</a></li>
                </ul>
            </div>
        </nav>
    </div>
</section>
<?php get_footer(); ?>