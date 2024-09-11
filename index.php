<?php get_header(); ?>
<?php $heroImage= get_field('hero-image')?>
<?php $heroText= get_field('hero-text')?>
<?php $aboutTitle= get_field('about-title')?>
<?php $aboutText= get_field('about-text')?>
<?php $aboutImage1= get_field('about-image-1')?>
<?php $aboutImage2= get_field('about-image-2')?>
<?php $aboutImage3= get_field('about-image-3')?>
<?php $aboutImage4= get_field('about-image-4')?>
<div class="nav-section">
        <nav>
            <div class="logo">
                <h4>Life Below Water</h4>
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#newsletter">Newsletter</a></li>
            </ul>
            <div class="languages">
                <div class="language"><img class="uk" src="<?php echo get_template_directory_uri(); ?>/css/img/uk-flag.svg" alt=""></div>
                <div class="language"></div>
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
        <h2>Most crucial targets</h2>
        <div class="main-targets-container">
        <?php
        $cards = new WP_Query(array(
            'post_type' => 'card',
            'posts_per_page' => 2  
        )); ?>
        <?php if ($cards->have_posts()) : ?>
            <?php while ($cards->have_posts()) : $cards->the_post(); ?>
            <div class="target">
                <h3><?php echo esc_html(get_field('target-title')); ?></h3>
                <p><?php echo esc_html(get_field('target-text')); ?></p>
            </div>
        </div>
        <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>

    <div class="things-to-do-section">
        <h2>Things to do</h2>
        <div class="things-to-do-container">
            <div class="to-do">
                <div class="circle">
                    <span class="number">1</span>
                </div>
                <div class="to-do-text">
                    <p>Buy local and certified fish. You can support small-scale producers by shopping in local markets
                        and shops.</p>
                </div>
            </div>
            <div class="to-do">
                <div class="circle">
                    <span class="number">2</span>
                </div>
                <div class="to-do-text">
                    <p>Never buy bottled water – boil, filter, chlorine, rainwater, do what you can.</p>
                </div>
            </div>
            <div class="to-do">
                <div class="circle">
                    <span class="number">3</span>
                </div>
                <div class="to-do-text">
                    <p>Stop using plastic bags: Usage and wrong disposal of plastic is a major cause of marine
                        pollution.</p>
                </div>
            </div>
            <div class="to-do">
                <div class="circle">
                    <span class="number">4</span>
                </div>
                <div class="to-do-text">
                    <p>Organize a cleanup project for rivers and oceans. Engage your whole community to clean up a local
                        river, seaside or an ocean..</p>
                </div>
            </div>
            <div class="to-do">
                <div class="circle">
                    <span class="number">5</span>
                </div>
                <div class="to-do-text">
                    <p>Stay informed. Follow our social media!</p>
                </div>
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
        <h2>Actions & Initiatives</h2>
        <div class="more-content-container">
            <div class="back-content-box">
                <div class="front-content-box">
                    <p>Sustainable Development Goal 14 focuses on conserving and sustainably using the oceans, seas, and
                        marine resources for sustainable development. Our oceans cover over 70% of the Earth's surface,
                        and they play a critical role in supporting life on our planet. From regulating climate to
                        providing oxygen and food, the health of our oceans is directly linked to our own well-being.
                        <br><br>
                        Key Challenges
                        Plastic Pollution: Every year, millions of tonnes of plastic enter the oceans, harming marine
                        life and ecosystems. From large debris to microplastics, this pollution is pervasive and
                        destructive. <br>
                        Overfishing: Unsustainable fishing practices are depleting fish stocks and destroying marine
                        habitats. Overfishing not only threatens the balance of marine life but also the livelihoods of
                        communities that depend on fishing. <br>
                        Climate Change: Rising sea temperatures, ocean acidification, and changes in ocean currents are
                        profoundly impacting marine ecosystems. Coral bleaching, loss of biodiversity, and altered fish
                        migration patterns are just a few examples of climate change's impact.
                    </p>
                </div>
            </div>
        </div>
        <div class="more-content-container">
            <div class="back-content-box">
                <div class="front-content-box">
                    <p>Individual Actions <br>
                        Everyone can contribute to ocean sustainability. Simple actions such as reducing plastic
                        consumption, choosing sustainable seafood, and decreasing your carbon footprint can have
                        significant impacts. Educate yourself and others about the importance of healthy oceans and the
                        steps we can take to preserve them. <br>
                        <br>
                        Community Initiatives<br>
                        Communities around the world are taking action to protect life below water. Programs like
                        community-led beach clean-ups, local sustainable fishing practices, and coastal habitat
                        restoration projects are pivotal. Engage with local organizations and participate in community
                        efforts to support ocean health.<br>
                        <br>
                        Business Contributions<br>
                        Businesses play a crucial role in promoting ocean sustainability. Companies can adopt
                        sustainable practices by reducing plastic packaging, ensuring responsible sourcing of marine
                        products, and investing in clean energy. Businesses can also support marine conservation
                        initiatives financially and through corporate social responsibility (CSR) programs.
                    </p>
                </div>
            </div>
        </div>

    </div>
    <section id="newsletter">
        <div class="newsletter-section">
            <div class="newsletter-container">
                <h3>STAY UPDATED</h3>
                <p>Sign up to our newsletter and hear about the big ideas and new campaigns, taking place all around the
                    world, that are helping to drive progress towards the Global Goals.</p>
                <form action="">
                    <button class="main-button">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
<?php get_footer(); ?>