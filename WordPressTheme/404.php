<!--404-->
<?php get_header(); ?>
<main>
    <section class="no-page__main">
        <div class="no-page__inner inner">
            <div class="no-page__title-wrapper">
                <h1 class="no-page__title">404</h1>
            </div>
            <div class="no-page__texts">
                <figure class="no-page__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/barina-cry.png" alt="
                        大場李奈の似顔絵アイコン（泣いている表情）">
                </figure>
                <div class="no-page__message">
                    <p>申し訳ありません。
                    <p>全力で探したのですが、<br>お探しのページはみつかりませんでした…。</p>
                    <p>お手数ですが、下記のボタンから<br>トップページへお願いいたします。</p>
                </div>
            </div>
            <div class="no-page__btn-wrapper">
                <a href="<?php echo home_url(); ?>" class="btn btn--white">Page TOP
                    <span></span>
                </a>
            </div>
        </div>
    </section>
</main><?php get_footer(); ?>