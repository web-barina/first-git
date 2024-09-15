<?php if (!is_404() && !is_page('contact') && !is_page('contact/thanks')) : ?>
<!--contact-->
<section class="contact contact-wrapper">
    <div class="contact__inner inner">
        <div class="contact__content-inner">
            <div class="contact__info">
                <div class="contact__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/profile2.JPG" alt="大場李奈">
                </div>
                <div class="contact__sns">
                    <div class="contact__logo">ObaRina</div>
                    <div class="contact__twitter">
                        <a href="https://x.com/mini_barina_pf" target="_blank">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/x-twitter-logo.png"
                                alt="X(旧Twitter)" />
                        </a>
                    </div>
                    <div class="contact__instagram">
                        <a href="https://www.instagram.com/barina_str3811/" target="_blank">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Instagram-logo.png"
                                alt="instagram" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="contact__texts">
                <h2 class="contact__title">Contact</h2>
                <p class="contact__text">演奏・伴奏のご依頼など<br>お気軽にお問い合わせください。</p>
                <div class="contact__btn-wrapper">
                    <a href="<?php echo esc_url(home_url('contact')); ?>" class="btn">Contact me
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
</main>
<!--footer-->
<footer class="footer footer-wrapper" id="footer">
    <div class="footer__js-scroll-top" id="js-scroll-top">
        <a href="#"><span class="footer__js-scroll-top-text">Up!<span><img
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/conductor.svg"
                        alt="ページの上部へ戻る" /></a>
    </div>
    <div class="footer__inner inner">
        <div class="footer__icons">
            <div class="footer__logo">
                ObaRina
            </div>
            <div class="footer__sns-logos">
                <div class="footer__sns-logo">
                    <a href="https://x.com/mini_barina_pf" target="_blank"><img
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/x-twitter-logo.png"
                            alt="X" /></a>
                </div>
                <div class="footer__sns-logo">
                    <a href="https://www.instagram.com/barina_str3811/" target="_blank"><img
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Instagram-logo.png"
                            alt="instagram" /></a>
                </div>
            </div>
        </div>
        <div class="footer__site-map-wrapper">
            <nav class="footer__site-map site-map">
                <ul class="site-map__contents site-map__contents--footer">
                    <li class="site-map__item">
                        <a href="<?php echo esc_url(home_url('biography')); ?>">
                            <div class="site-map__titles">
                                <span class="site-map__main-title">Biography</span>
                                <span class="site-map__sub-title">経歴</span>
                            </div>
                        </a>
                    </li>
                    <li class="site-map__item">
                        <a href="<?php echo esc_url(home_url('performance')); ?>">
                            <div class="site-map__titles">
                                <span class="site-map__main-title">Performance</span>
                                <span class="site-map__sub-title">演奏動画</span>
                            </div>
                        </a>
                    </li>
                    <li class="site-map__item">
                        <a href="<?php echo esc_url(home_url('blog')); ?>">
                            <div class="site-map__titles">
                                <span class="site-map__main-title">Blog</span>
                                <span class="site-map__sub-title">ブログ</span>
                            </div>
                        </a>
                    </li>
                    <li class="site-map__item">
                        <a href="<?php echo esc_url(home_url('repertory')); ?>">
                            <div class="site-map__titles">
                                <span class="site-map__main-title">Repertory</span>
                                <span class="site-map__sub-title">レパートリー</span>
                            </div>
                        </a>
                    </li>
                    <li class="site-map__item">
                        <a href="<?php echo esc_url(home_url('contact')); ?>">
                            <div class="site-map__titles">
                                <span class="site-map__main-title">Contact</span>
                                <span class="site-map__sub-title">お問い合わせ</span>
                            </div>
                        </a>
                    </li>
                    <li class="site-map__item">
                        <a href="<?php echo esc_url(home_url('privacypolicy')); ?>">
                            <div class="site-map__titles">
                                <span class="site-map__main-title">PrivacyPolicy</span>
                                <span class="site-map__sub-title">プライバシーポリシー</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="footer__copy">© 2024 ObaRina All Rights Reserved.</div>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>

</html>