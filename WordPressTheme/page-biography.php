<!-- わたしたちについて -->
<?php get_header(); ?>
<section class="biography biography-wrapper">
    <div class="biography__inner inner">
        <div class="biography__img-wrapper">
            <div class="biography__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/profile1.jpg" alt="大場李奈のプロフィール写真" />
            </div>
        </div>
        <div class="biography__content">
            <h2 class="biography__main-text">ObaRina</h2>
            <div class="biography__texts">
                <h3 class="biography__name">大場 李奈（おおば りな）</h3>
                <div class="biography__text">
                    <p>長野県出身。</p>
                    <p>5歳からエレクトーンを始め、<wbr>12歳でピアノを本格的に始める。</p>
                    <p>長野県立小諸高等学校音楽科 卒業。</p>
                    <p>東京音楽大学 卒業。</p>
                    <p>小中学校の音楽科講師を経て<wbr>ピアニスト活動を始める。</p>
                    <p>2023年5月 黒姫童話館童話の森ホールにて<wbr>ソロリサイタルデビュー（長野県信濃町）。</p>
                    <p>現在、江崎皓介氏に師事。</p>
                    <div class="biography__awards">
                        <h3>主な受賞歴</h3>
                        <p>キプロス国際音楽コンクール2023　第1位</p>
                        <p>第26回"万里の長城杯"国際音楽コンクール　第4位</p>
                        <p>第16回べーテン音楽コンクール　全国大会出場</p>
                        <p>第32回クラシック音楽コンクール　全国大会出場</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// SCFで設定された繰り返しフィールドを取得
$gallery_photos = SCF::get('gallery_photos',get_the_ID());
 if(get_post_meta($post->ID, 'gallery_img', true)): 
?>
<section class="gallery gallery-wrapper">
    <div class="gallery__inner inner">
        <h2 class="gallery__title title">Gallery</h2>
        <div class="gallery__photos-wrapper photos">
            <?php
                foreach ($gallery_photos as $index => $photo) :
                    $image_id = $photo['gallery_img']; // 画像フィールドのスラッグを指定
                    $image_url = wp_get_attachment_image_url($image_id, 'full');
                    $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                    
                    // クラスの条件設定
                    $class = ($index + 1 === 1 || $index + 1 === 6) ? 'modal__content--large' : 'modal__content';
            ?>
            <div class="photos__item photo" id="modal<?php echo $index + 1; ?>">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt_text); ?>">
            </div>
            <?php
                endforeach;
            ?>
        </div>
        <!-- モーダル本体 -->
        <?php foreach ($gallery_photos as $index => $photo) : ?>
        <div class="gallery__modal modal" id="cont-modal<?php echo $index + 1; ?>" style="display: none;">
            <div class="modal__body">
                <div
                    class="<?php echo ($index + 1 === 1 || $index + 1 === 6) ? 'modal__content--large' : 'modal__content'; ?>">
                    <img src="<?php echo esc_url(wp_get_attachment_image_url($photo['gallery_img'], 'full')); ?>"
                        alt="<?php echo esc_attr(get_post_meta($photo['gallery_img'], '_wp_attachment_image_alt', true)); ?>">
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>