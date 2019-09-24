<body>
<div id="fh5co-page">
    <a href="<?php the_permalink(); ?>" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <aside id="fh5co-aside" role="complementary" class="border">

        <?php get_header(); ?>
        <?php get_footer();?>
    </aside>
    <div id="fh5co-main">
        <aside id="fh5co-hero" style="height: auto">
            <div class="flexslider ">
                <ul class="slides">
                    <?php $j = get_theme_mod('num_of_slides'); ?>
                    <?php for ($i = 1; $i <= $j; $i++) { ?>
                        <li style=" background-image: url('<?php echo get_theme_mod('sl_sect_image_' . $i); ?>'); height: 400px;">
                            <div class="overlay">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2 text-center  slider-text">
                                            <div class="slider-text-inner">
                                                <h1><strong><?php echo get_theme_mod("slide_title_" . $i); ?></strong>
                                                </h1>
                                                <h2><?php echo get_theme_mod("slide_subtitle_" . $i); ?><a
                                                            href="<?php the_permalink(); ?>"
                                                            target="_blank"><?php the_author(); ?></a></h2>
                                                <p><a class="btn btn-primary btn-demo popup-vimeo"
                                                      href="<?php echo get_theme_mod("slide_button1_link_" . $i); ?>">
                                                        <i class="icon-monitor"></i> <?php echo get_theme_mod("slide_button1_name_" . $i); ?>
                                                    </a> <a class="btn btn-primary btn-learn"
                                                            href="<?php echo get_theme_mod("slide_button2_link_" . $i); ?>"><?php echo get_theme_mod("slide_button2_name_" . $i); ?>
                                                        <i class="icon-arrow-right3"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </aside>
        <div class="fh5co-narrow-content">
            <h2 class="mb-3"><?php the_title(); ?></h2>
            <p> <?php
                the_post();
                the_content('full'); ?></p>
            <p>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
            </p>

            <div class="tag-widget post-tag-container mb-5 mt-5">
                <div class="tagcloud">
                    <?php the_tags(); ?>
                </div>
            </div>
            <div class="about-author d-flex p-4 bg-light">
                <div class="bio mr-5">
                    <img src="<?php echo get_avatar_url(get_user_meta('ID')); ?>" alt="Image placeholder"
                         class="img-fluid mb-4">
                </div>
                <div class="desc">
                    <h3><?php the_author(); ?></h3>
                </div>
            </div>
        </div>
        <!-- add content for bottom of the page -->
        <?php get_template_part('template-parts/content/content', 'page_bottom'); ?>
    </div>
</div>
</div>
</body>
</html>

