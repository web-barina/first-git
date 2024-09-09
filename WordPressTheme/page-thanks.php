<?php get_header(); ?>
<section class="contact-form contact-form-wrapper contact-form-wrapper--success">
    <div class="contact-form__inner inner">
        <h2 class="contact-form__success-title">お問い合わせ内容を送信完了しました。</h2>
        <div class="contact-form__success">
            <div class="contact-form__success-img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/barina-laugh.png" alt="">
            </div>
            <div class="contact-form__success-text">
                <p>このたびは、お問い合わせ頂き<wbr />誠にありがとうございます。</p>
                <p>お送り頂きました内容を確認の上、<wbr />後日折り返しご連絡させて頂きます。</p>
                <p>また、ご記入頂いたメールアドレスへ、<wbr />自動返信の確認メールをお送りしております。</p>
            </div>
        </div>
        <div class="contact-form__success-wrapper">
            <a href="<?php echo esc_url(home_url()); ?>" class="contact-form__success-btn btn">Back to TOP
                <span></span>
            </a>
        </div>
    </div>
</section>
</div>
</main>
<?php get_footer(); ?>