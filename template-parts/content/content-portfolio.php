<!-- Display content for custom post type-->


        <div class="col-md-3 col-sm-6 col-padding text-center animate-box">
            <a href="<?php the_permalink();?>" class="work image-popup" style="background-image: url('<?php if ( has_post_thumbnail() ) {
               echo get_the_post_thumbnail_url(get_the_ID(), 'full');
            } else {
                echo get_template_directory_uri().'/images/img-1.jpg';
             } ?>');">
                <div class="desc">
                    <h3><?php the_title();?></h3>
                    <span><?php the_content();?></span>
                </div>
            </a>
        </div>

