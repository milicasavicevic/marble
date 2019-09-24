<!-- Display content for services sections-->
<div class="fh5co-narrow-content">
    <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><?php echo get_theme_mod("serve_title"); ?></h2>
    <div class="row">
        <?php $j= get_theme_mod('num_of_i_servs');?>
        <?php for($i=1; $i<$j; $i++ ) {?>
            <div class="col-md-6">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                    <div class="fh5co-icon">
                        <i class="<?php echo get_theme_mod("serve_favicon_class_" . $i); ?> "></i>
                    </div>
                    <div class="fh5co-text">
                        <h3><?php echo get_theme_mod("serve_title_" .$i); ?></h3>
                        <p><?php echo get_theme_mod("serve_content_" .$i); ?> </p>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>