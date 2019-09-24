<!--Index Page -->
<body>
<div id="fh5co-page">
    <a href="<?php the_permalink(); ?>" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <aside id="fh5co-aside" role="complementary" class="border">
        <?php get_header();?>
        <?php get_footer();?>
    </aside>
    <div id="fh5co-main">
        <aside id="fh5co-hero" style="height: auto">
            <div class="flexslider ">
                <ul class="slides">
                    <?php $j= get_theme_mod('num_of_slides');?>
                    <?php for($i=1; $i<=$j; $i++){?>
                    <li style=" background-image: url('<?php echo get_theme_mod('sl_sect_image_'.$i,  get_template_directory_uri().'/images/img-2.jpg'); ?>'); height: 400px;">
                    <div class="overlay">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-8 col-md-offset-2 text-center  slider-text">

                                <div class="slider-text-inner">

                                    <h1><strong><?php echo get_theme_mod("slide_title_" . $i); ?></strong></h1>
                                    <h2><?php echo get_theme_mod("slide_subtitle_" . $i); ?><a href="<?php the_permalink();?>" target="_blank"><?php the_author();?></a></h2>
                                    <p><a class="btn btn-primary btn-demo popup-vimeo" href="<?php echo get_theme_mod("slide_button1_link_" . $i); ?>"> <i class="icon-monitor"></i> <?php echo get_theme_mod("slide_button1_name_" . $i); ?></a> <a class="btn btn-primary btn-learn" href="<?php echo get_theme_mod("slide_button2_link_" . $i); ?>"><?php echo get_theme_mod("slide_button2_name_" . $i); ?><i class="icon-arrow-right3"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </li>
                    <?php }?>

                </ul>
            </div>
        </aside>

        <?php get_template_part('template-parts/content/content', 'services'); ?>
        <div class="fh5co-narrow-content">
            <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Recent Blog</h2>
            <div class="row row-bottom-padded-md">
                <?php $post_args = array('post_type' => 'post', 'posts_per_page' => 3,);
                $post_query = new WP_Query($post_args); ?>
                <?php if ($post_query->have_posts()) :
                while ($post_query->have_posts()) : $post_query->the_post(); ?>
                <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="<?php the_permalink(); ?>" class="blog-img"><img src="<?php if ( has_post_thumbnail() ) {
                                echo get_the_post_thumbnail_url(get_the_ID(), 'full');
                            } else {
                                echo get_template_directory_uri().'/images/img-1.jpg';
                            } ?>;" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                        <div class="desc">
                            <h3><a href="<?php the_permalink(); ?>"<?php the_title();?></a></h3>
                            <?php $cats=  get_the_category();
                            foreach($cats as $cat) :?>
                            <span><small><?php the_author(); ?> </small> / <small> <?php  echo $cat->name; ?> </small> / <small> <i class="icon-comment"></i> <?php echo get_comments_number();?></small></span>
                            <?php endforeach;?>
                            <p><?php the_content (); ?></p>
                            <a href="<?php the_permalink(); ?>" class="lead">Read More <i class="icon-arrow-right3"></i></a>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
               <?php endif;?>
            </div>
        </div>
        <!-- add content for bottom of the page -->
        <?php  get_template_part( 'template-parts/content/content', 'page_bottom' ); ?>
    </div>
</div>


</body>
</html>

