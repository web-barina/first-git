<div class="blog-layout__sub-wrapper sidebar-layout">
    <div class="sidebar-layout__inner">
        <aside class="sidebar-layout__main sidebar">
            <section class="sidebar__popular">
                <h2 class="sidebar__title">Popular</h2>
                <?php
                    // 閲覧数を基準にして人気記事を取得する
                    $popular_args = array(
                    'posts_per_page' => 3, // 表示する記事数
                    'meta_key' => 'post_views_count', // 人気記事の基準となるカスタムフィールド
                    'orderby' => 'meta_value_num', // ソート基準
                    );

                    $popular_query = new WP_Query($popular_args);

                    if ($popular_query->have_posts()) : ?>
                <?php while ($popular_query->have_posts()) : $popular_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="sidebar__popular-cards popular-cards">
                    <div class="popular-cards__item popular-card">
                        <figure class="popular-card__img"> <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <?php else : ?>
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.png"
                                alt="no-image" />
                            <?php endif; ?>
                        </figure>
                        <div class="popular-card__text">
                            <time class="popular-card__time"
                                datetime="<?php the_time("c") ?>"><?php the_time("Y.m.d") ?></time>
                            <h3 class="popular-card__title"><?php the_title(); ?></h3>
                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php else : ?>
                <p class="popular-card__no-message">ただいま準備中です。<br>少々お待ちください。</p>
                <?php
                    endif;
                    wp_reset_postdata();
                ?>
            </section>
            <section class="sidebar__category">
                <h2 class="sidebar__title">Category</h2>
                <ul class="sidebar__category-items">
                    <?php
                        $categories = get_categories();
                        foreach ($categories as $category) {
                            echo '<li><a href="' . get_category_link($category->term_id) . '">';
                            echo $category->name;
                            echo '</a></li>';
                        }
                    ?>
                </ul>
            </section>
            <section class="sidebar__archive">
                <h2 class="sidebar__title">Archive</h2>
                <div class="sidebar__archive-content">
                    <?php
                        // 年と月を取得
                        $years = [];
                        $archives = wp_get_archives(array(
                            'type'            => 'monthly',
                            'limit'           => '',
                            'format'          => 'custom',
                            'before'          => '<div class="archive-months__item archive-month"><a href="#">',
                            'after'           => '</a></div>',
                            'show_post_count' => false,
                            'echo'            => 0,
                        ));
                        // 年ごとにアーカイブをグループ化
                        preg_match_all('/<div class="archive-months__item archive-month"><a href="#">(.*?)<\/a><\/div>/', $archives, $matches);
                        foreach ($matches[1] as $archive) :
                            preg_match('/(\d{4})年(\d{1,2})月/', $archive, $date);
                            $years[$date[1]][] = $date[2];
                        endforeach;
                    ?>
                    <?php foreach ($years as $year => $months): ?>
                    <div class="sidebar__archive-year archive-year"><?php echo $year; ?></div>
                    <div class="archive-year__item archive-months" style="display: none;">
                        <?php foreach ($months as $month): ?>
                        <?php
                            $month_padded = str_pad($month, 2, '0', STR_PAD_LEFT);
                            $url = get_month_link($year, $month_padded);
                            ?>
                        <div class="archive-months__item archive-month">
                            <a href="<?php echo esc_url($url); ?>"><?php echo $month; ?>月</a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
            <section class="sidebar__search">
                <h2 class="sidebar__title">Search</h2>
                <div class="sidebar__search-wrapper">
                    <?php get_search_form(); ?>
                </div>
            </section>
        </aside>
    </div>
</div>