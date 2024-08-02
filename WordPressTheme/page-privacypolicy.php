<!--利用規約-->
<?php get_header(); ?>
<!--terms-->
<section class="privacy">
    <div class="privacy__inner inner">
        <div class="privacy__title">
            <?php
$page_slug = 'privacypolicy'; // 固定ページのスラッグを指定
$page = get_page_by_path($page_slug);

if ($page) {
    // タイトルを出力
    echo '<h1>' . esc_html($page->post_title) . '</h1>';
}
?>
        </div>

        <div class="privacy__text">
            <?php
$page_slug = 'privacypolicy'; // 固定ページのスラッグを指定
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