<!-- Display content for About page-->

<div id="fh5co-main">
    <div class="fh5co-narrow-content">
        <div class="row row-bottom-padded-md">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <img class="img-responsive" src="<?php echo get_theme_mod('about_image', get_template_directory_uri().'/images/img-2.jpg'); ?>" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <h2 class="fh5co-heading"><?php echo get_theme_mod("about_title"); ?></h2>
                <p><?php echo get_theme_mod("about_content"); ?></p>
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/content/content', 'services'); ?>

    <?php get_template_part('template-parts/content/content', 'page_bottom'); ?>
</div>