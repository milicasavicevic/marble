<!-- Display default content for bottom of the page-->
<div id="get-in-touch">
    <div class="fh5co-narrow-content">
        <div class="row">
            <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                <h1 class="fh5co-heading-colored"><?php echo get_theme_mod("bottom_title"); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                 data-animate-effect="fadeInLeft">
                <p class="fh5co-lead"><?php echo get_theme_mod("bottom_content"); ?></p>
                <p><a href="<?php echo get_theme_mod("bottom_button_link"); ?>"
                      class="btn btn-primary"><?php echo get_theme_mod("bottom_button_name"); ?></a></p>
                <div class="fh5co-footer" style="list-style: none;">
                    <div class="fh5co-footer" style="list-style: none; text-decoration: none; ">
                        <?php get_sidebar();?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>