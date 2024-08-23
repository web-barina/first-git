<!--利用規約-->
<?php get_header(); ?>
<!--terms-->
<section class="privacy">
    <?php if (have_posts()) : ?>
    <div class="privacy__inner inner">
        <?php while (have_posts()) : the_post(); ?>
        <h2 class="privacy__title title">Privacy Policy</h2>
        <div class="privacy__text">
            <?php the_content() ?>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>