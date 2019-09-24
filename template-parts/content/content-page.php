<!-- Display default content for page-->
<div id="fh5co-main">
    <?php
    get_template_part('content', get_post_type());
    ?>
    <div class="fh5co-narrow-content">
        <h1 class="fh5co-heading text-center animate-box" style="font-size: 20px"
            data-animate-effect="fadeInLeft"><?php the_title(); ?></h1>
        <div class="row row-bottom-padded-md">
            <div class="col-6">
                <div class="blog-entry" style="width: 100%">
                    <img style="width: 100%" src="<?php if (has_post_thumbnail()) {
                        echo get_the_post_thumbnail_url(get_the_ID(), 'full');
                    } else {
                        echo get_template_directory_uri() . '/images/img-1.jpg';
                    } ?>;"
                         class="img-responsive" alt="jhgfdsdfgh">
                </div>
                <div class="blog-entry pr-4 pl-4">
                    <hr>
                    <?php the_post(); ?>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- add content for bottom of the page -->
    <?php get_template_part('template-parts/content/content', 'page_bottom'); ?>
</div>