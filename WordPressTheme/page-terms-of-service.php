<!--利用規約-->
<?php get_header(); ?>
<!--terms-->
<section class="terms">
    <div class="terms__inner inner">
        <div class="terms__title">
            <?php
$page_slug = 'terms-of-service'; // 固定ページのスラッグを指定
$page = get_page_by_path($page_slug);

if ($page) {
    // タイトルを出力
    echo '<h1>' . esc_html($page->post_title) . '</h1>';
}
?>
        </div>

        <div class="terms__text">
            <?php
$page_slug = 'terms-of-service'; // 固定ページのスラッグを指定
$page = get_page_by_path($page_slug);

if ($page) {
    // 内容を出力
    echo apply_filters('the_content', $page->post_content);
}
?>

        </div>
    </div>
</section>
<?php get_footer(); ?>