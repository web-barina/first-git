<?php get_header(); ?>
<!--first-view-->
<div class="topFVswiper swiper" id="js-topFVswiper">
    <div class="topFVswiper__wrapper swiper-wrapper">
        <picture class="topFVswiper__slide swiper-slide">
            <?php
                    $top_img = get_field('top_image');
                    if ($top_img && !empty($top_img['top_image1']['url'])) {
                        $top_image1_url = esc_url($top_img['top_image1']['url']);
                        echo '<img src="' . $top_image1_url . '" alt="ピアニスト大場李奈のホームページへようこそ">';
                    }
                ?>
        </picture>
        <picture class="topFVswiper__slide swiper-slide">
            <?php
                    $top_img = get_field('top_image');
                    if ($top_img && !empty($top_img['top_image2']['url'])) {
                        $top_image2_url = esc_url($top_img['top_image2']['url']);
                        echo '<img src="' . $top_image2_url . '" alt="ピアニスト大場李奈のホームページへようこそ">';
                    }
                ?>
        </picture>
        <picture class="topFVswiper__slide swiper-slide">
            <?php
                    $top_img = get_field('top_image');
                    if ($top_img && !empty($top_img['top_image3']['url'])) {
                        $top_image3_url = esc_url($top_img['top_image3']['url']);
                        echo '<img src="' . $top_image3_url . '" alt="ピアニスト大場李奈のホームページへようこそ">';
                    }
                ?>
        </picture>
        <picture class="topFVswiper__slide swiper-slide">
            <?php
                    $top_img = get_field('top_image');
                    if ($top_img && !empty($top_img['top_image4']['url'])) {
                        $top_image4_url = esc_url($top_img['top_image4']['url']);
                        echo '<img src="' . $top_image4_url . '" alt="ピアニスト大場李奈のホームページへようこそ">';
                    }
                ?>
        </picture>
    </div>
</div>
<div class="topFVswiper__texts">
    <h2 class="topFVswiper__main-text">No Challenge,<br>No Success.</h2>
</div>
<!--Biography-->
<section class="top-biography top-biography-wrapper">
    <div class="top-biography__inner inner">
        <div class="top-biography__img-wrapper">
            <div class="top-biography__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/profile1.jpg" alt="大場李奈のプロフィール写真" />
            </div>
        </div>
        <div class="top-biography__content">
            <p class="top-biography__main-text">ObaRina</p>
            <div class="top-biography__texts">
                <h3 class="top-biography__title">『気魄』のピアニスト</h3>
                <div class="top-biography__text">
                    <p>一つ一つの音に情熱を込めて演奏する様は<br>まさに『気魄』。</p>
                    <p>内なる情熱と音楽に対する真摯な姿勢が感じられ、<br>聴衆を瞬時に引き込む。</p>
                    <p>コンクール・コンサートなど様々な挑戦を続ける姿を<br>このホームページで発信していきます。</p>
                </div>
                <div class="top-biography__btn-wrapper">
                    <a href="<?php echo esc_url(home_url("biography")); ?>" class="top-biography__btn btn">Go to
                        Biography
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Performance-->
<section class="top-performance top-performance-wrapper">
    <div class="top-performance__inner inner">
        <h2 class="top-performance__title title">Performance</h2>
        <div class="top-performance__content">
            <div class="top-performance__img js-color-box"><img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/performance.jpg"
                    alt="YouTubeの演奏動画はこちら" /></div>
            <div class="top-performance__texts">
                <h3 class="top-performance__youtube-title">YouTube</h3>
                <div class="top-performance__text">
                    <p>大場李奈の演奏をいつでもお楽しみいただけます。</p>
                    <p>クラシックの名曲からオリジナルのアレンジまで、幅広いレパートリーを用意しております。</p>
                    <br>
                    <p>まずはこちらのボタンからオススメの演奏をお聞きください。</p>
                </div>
                <div class="top-performance__btn-wrapper">
                    <a href="<?php echo esc_url(home_url("performance")); ?>" class="top-performance__btn btn">View
                        more
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog-->
<section class="top-blog top-blog-wrapper">
    <div class="top-blog__inner inner">
        <h2 class="top-blog__title title">Blog</h2>
        <?php
                $args = array(
                    'posts_per_page' => 3, 
                );
                $query = new WP_Query($args);
            ?>
        <?php if ($query->have_posts()) : ?>
        <ul class="blog__cards blog-cards">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
            <li class="blog-cards__item blog-card">
                <a href="<?php the_permalink() ?>">
                    <div class="blog-card__img-wrapper">
                        <figure class="blog-card__img">
                            <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <?php else : ?>
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.png"
                                alt="no-image" />
                            <?php endif; ?>
                        </figure>
                    </div>
                    <div class="blog-card__body">
                        <time datetime="<?php the_time('Y-m-d') ?>"
                            class="blog-card__time"><?php the_time('Y.m.d') ?></time>
                        <h2 class="blog-card__title"><?php the_title() ?></h2>
                        <p class="blog-card__text">
                            <?php echo wp_trim_words(get_the_content(), 60, '…続きを読む'); ?>
                        </p>
                    </div>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php else : ?>
        <p class="blog-card__no-message">ただいま準備中です。少々お待ちください。</p>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <div class="top-blog__btn-wrapper">
            <a href="<?php echo esc_url(home_url("blog")); ?>" class="top-blog__btn btn">View more
                <span></span>
            </a>
        </div>
    </div>

</section>
<?php get_footer(); ?>