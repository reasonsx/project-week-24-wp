<?php get_header(); ?>
<?php $heroImage = get_field('hero-image') ?>
<?php $heroText = get_field('hero-text') ?>
<?php $aboutText = get_field('about-text') ?>
<?php $aboutTitle = get_field('about-title') ?>
<?php $targetsTitle = get_field('targets-title') ?>
<?php $tipsTitle = get_field('tips-title') ?>
<?php $cardsTitle = get_field('cards-title') ?>
<?php $formTitle = get_field('form-title') ?>
<?php $formText = get_field('form-text') ?>
<div class="nav-section">
    <nav>
        <div class="logo">
            <h4><?php echo $heroText ?></h4>
        </div>
        <ul class="nav-links">
            <li><a href="#"><?php pll_e("Home")?></a></li>
            <li><a href="#about"><?php pll_e("About")?></a></li>
            <li><a href="#contact"><?php pll_e("Contact")?></a></li>
        </ul>
        <div class="languages">
        <?php
$languages = pll_the_languages(['raw' => 1]);
if ($languages) {
    echo '<ul>';
    foreach ($languages as $lang) {
        echo '<li><a href="' . esc_url($lang['url']) . '"><img src="' . esc_url($lang['flag']) . '" alt="' . esc_attr($lang['name']) . ' flag"> ' . esc_html($lang['name']) . '</a></li>';
    }
    echo '</ul>';
}
?>
        </div>
    </nav>
</div>
<div class="hero-section">
    <h1><?php echo $heroText ?></h1>
    <img src="<?php echo esc_url(get_field('hero-image')["url"]); ?>" alt="" class="hero-image">

</div>
<section id="about">
    <div class="about-section" id="about">
        <h2><?php echo $aboutTitle ?></h2>
        <div class="about-container">
            <div class="about-pic1">
                <img src="<?php echo esc_url(get_field('about-image-1')["url"]); ?>" alt="" class="img1">
                <img src="<?php echo esc_url(get_field('about-image-2')["url"]); ?>" alt="" class="img2">
            </div>
            <div class="about-text">
                <p><?php echo $aboutText ?></p>
            </div>
            <div class="about-pic2">
                <img src="<?php echo esc_url(get_field('about-image-3')["url"]); ?>" alt="" class="img3">
                <img src="<?php echo esc_url(get_field('about-image-4')["url"]); ?>" alt="" class="img4">
            </div>

        </div>
    </div>
</section>

<div class="main-targets-section">
    <h2><?php echo $targetsTitle ?></h2>
    <div class="main-targets-container">
        <?php
        $targets = new WP_Query(array(
            'post_type' => 'target',
            'posts_per_page' => 3
        )); ?>

        <?php if ($targets->have_posts()): ?>
            <?php while ($targets->have_posts()):
                $targets->the_post(); ?>
                <div class="target" style="background: url('<?php echo esc_url(get_field('target-image')["url"]); ?>')">
                    <h3><?php echo esc_html(get_field('target-title')); ?></h3>
                    <p><?php echo esc_html(get_field('target-text')); ?></p>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

    </div>

</div>

<div class="things-to-do-section">
    <h2><?php echo $tipsTitle ?></h2>
    <div class="things-to-do-container">
        <?php
        $tips = new WP_Query(array(
            'post_type' => 'tip',
            'posts_per_page' => 5
        )); ?>

        <?php if ($tips->have_posts()): ?>
            <?php while ($tips->have_posts()):
                $tips->the_post(); ?>
                <div class="to-do">
                    <div class="circle">
                        <span class="number"><?php echo esc_html(get_field('tip-number')); ?></span>
                    </div>
                    <div class="to-do-text">
                        <p><?php echo esc_html(get_field('tip-text')); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>


    </div>

</div>
<div class="social-media">
    <a href="">
        <div class="fb-icon"></div>
    </a>
    <a href="">
        <div class="x-icon"></div>
    </a>
</div>
</div>

<div class="more-content-section">
    <h2><?php echo $cardsTitle ?></h2>
    <?php
    $cards = new WP_Query(array(
        'post_type' => 'card',
        'posts_per_page' => 5
    )); ?>

    <?php if ($cards->have_posts()): ?>
        <?php while ($cards->have_posts()):
            $cards->the_post(); ?>
            <div class="more-content-container">
                <div class="back-content-box">
                    <img src="<?php echo esc_url(get_field('card-image')["url"]); ?>">
                    <div class="front-content-box">
                        <h3><?php echo esc_html(get_field('card-title')); ?></h3>
                        <p><?php echo esc_html(get_field('card-text')); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

</div>
<section id="contact">
    <div class="support-section">
        <div class="-big-support-container">
            <div class="support-container">
                <h3><?php echo $formTitle ?></h3>
                <p><?php echo $formText ?></p>
                <div class="support-box">
                    <?php echo do_shortcode('[contact-form-7 id="b2731b8" title="Newsletter"]') ?>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>
<style>
    .language:nth-child(1) {
        background: url(/css/img/uk-flag.svg) lightgray 50% / cover no-repeat;
    }

    .language:nth-child(2) {
        background: url(/css/img/dk-flag.svg) lightgray 50% / cover no-repeat;
    }

    .target {
        position: relative;
        display: flex;
        flex-direction: column;
        background-color: var(--primary-color);
        border-radius: var(--primary-border-radius);
        justify-content: center;
        padding: 24px;
        justify-content: flex-end;
        align-items: flex-start;
        box-sizing: border-box;
        /* background: url('<?php echo esc_url(get_field('target-image')["url"]); ?>'); */
        height: 572px;
        transition: width 0.3s ease;
    }
    .wpcf7-form-control, .wpcf7-text, .wpcf7-validates-as-required {
        border: none;
        background-color: white;
        color: #00668c;
    }
</style>
<?php get_footer(); ?>