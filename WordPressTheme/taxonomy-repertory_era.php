<?php get_header(); ?>

<section class="repertory repertory-wrapper">
    <div class="repertory__inner inner">
        <div class="repertory__tabs-wrapper">
            <div class="repertory__tabs tabs">
                <a href="<?php echo get_post_type_archive_link('repertory'); ?>"
                    class="tabs__item tab <?php echo !is_tax('repertory_era') ? 'js-active' : ''; ?>">ALL</a>
                <?php
                $terms = get_terms(array(
                    'taxonomy' => 'repertory_era',
                    'hide_empty' => false,
                ));
                foreach ($terms as $term) :
            ?>
                <a href="<?php echo get_term_link($term); ?>"
                    class="tabs__item tab <?php echo is_tax('repertory_era', $term->slug) ? 'js-active' : ''; ?>">
                    <?php echo esc_html($term->name); ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="repertory-cards__wrapper">
            <div class="repertory__cards-inner">
                <?php if (have_posts()) : ?>
                <ul class="repertory__cards repertory-cards">
                    <?php while (have_posts()) : the_post(); ?>
                    <li class="repertory-cards__item repertory-card">
                        <div class="repertory-card__info">
                            <div class="repertory-card__data-wrapper">
                                <div class="repertory-card__era">
                                    <?php
                                        $terms = get_the_terms(get_the_ID(), 'repertory_era');
                                        if ($terms && !is_wp_error($terms)):
                                            $term_list = array();
                                            foreach ($terms as $term):
                                                $term_list[] = esc_html($term->name);
                                            endforeach;
                                            echo implode(', ', $term_list);
                                        endif;
                                    ?>
                                    <?php
                                        $terms = get_the_terms(get_the_ID(), 'composer');
                                        if ($terms && !is_wp_error($terms)):
                                            $term_list = array();
                                            foreach ($terms as $term):
                                                $term_list[] = esc_html($term->name);
                                            endforeach;
                                            echo implode(', ', $term_list);
                                        endif;
                                    ?>
                                </div>
                                <div class="repertory-card__title-wrapper">
                                    <h3 class="repertory-card__title"><?php the_title() ?></h3>
                                </div>
                            </div>
                            <figure class="repertory-card__img js-color-box">
                                <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                <?php else : ?>
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.png"
                                    alt="no-image" />
                                <?php endif; ?>
                            </figure>
                        </div>
                        <p class="repertory-card__text"> <?php the_content( ) ?></p>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php else : ?>
                <p class="repertory-card__no-message">ただいま準備中です。もう少しお待ちください。</p>
                <?php endif; ?>
                <div class="repertory__pager-wrapper">
                    <div class="repertory__pager pager">
                        <ul class="pager__number-wrapper">
                            <?php wp_pagenavi(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>