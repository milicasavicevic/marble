<!-- Archive page -->
<body>
<div id="fh5co-page">
    <a href="<?php the_permalink(); ?>" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <aside id="fh5co-aside" role="complementary" class="border">

        <?php get_header(); ?>
        <?php get_footer(); ?>
    </aside>

    <div id="fh5co-main">
        <?php if (have_posts()) : ?>
            <header class="page-header">
                <?php
                the_archive_title('<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">', '</h>');
                ?>
            </header>
            <div class="fh5co-narrow-content">
                <div class="row row-bottom-padded-md">
                    <?php
                    while (have_posts()) :
                        the_post();
                        get_template_part('template-parts/content/content', get_post_type());
                    endwhile;
                    ?>
                </div>
            </div>
        <?php
        else :
            get_template_part('template-parts/content/content', 'none');
        endif;
        ?>
        <?php get_template_part('template-parts/content/content', 'page_bottom'); ?>
    </div>

</div>
</body>
</html>

