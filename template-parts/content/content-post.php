<!-- Display content for posts-->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
        if (is_sticky() && is_home() && !is_paged()) {
            printf('<span class="sticky-post">%s</span>', _x('Featured', 'post', 'marble'));
        }
//        the_title(sprintf('<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
        ?>
        <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
            <div class="blog-entry">
                <a href="<?php the_permalink(); ?>" class="blog-img"><img src="<?php if (has_post_thumbnail()) {
                        echo get_the_post_thumbnail_url(get_the_ID(), 'full');
                    } else {
                        echo get_template_directory_uri() . '/images/img-1.jpg';
                    } ?>;" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                <div class="desc">
                    <h3><a href="<?php the_permalink(); ?>"<?php the_title(); ?></a></h3>
                    <?php $cats = get_the_category();
                    foreach ($cats as $cat) :?>
                        <span><small><?php the_author(); ?> </small> / <small> <?php echo $cat->name; ?> </small> / <small> <i
                                        class="icon-comment"></i> <?php echo get_comments_number(); ?></small></span>
                    <?php endforeach; ?>
                    <p><?php the_content(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="lead">Read More <i class="icon-arrow-right3"></i></a>
                </div>
            </div>
        </div>
</article>
