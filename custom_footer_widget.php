<?php
// Register and load the custom footer widget
function footer_load_widget1()
{
    register_widget('customFooter_widget');
}

add_action('widgets_init', 'footer_load_widget1');

// Creating the widget
class customFooter_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(

// Base ID of your widget
            'customFooter_widget',
// Widget name will appear in UI
            __('Custom Footer Links', 'footer_widget1_marble'),

// Widget description
            array('description' => __('recommended: for links in footer area in page sidebar', 'footer_widget1_marble'),)
        );
    }

// Creating widget front-end

    public function widget($args, $instance)
    {

        $content = apply_filters('widget_text_content', $instance['content']);
        $fb_link = apply_filters('widget_links_args', $instance['fb_link']);
        $tw_link = apply_filters('widget_links_args', $instance['tw_link']);
        $insta_link = apply_filters('widget_links_args', $instance['insta_link']);
        $link_link = apply_filters('widget_links_args', $instance['link_link']);
        ?>


            <p><small><?php echo $content; ?></small></p>
            <ul>
                <li><a href="<?php echo $fb_link; ?>"><i class="icon-facebook2"></i></a></li>
                <li><a href="<?php echo $tw_link; ?>"><i class="icon-twitter2"></i></a></li>
                <li><a href="<?php echo $insta_link; ?>"><i class="icon-instagram"></i></a></li>
                <li><a href="<?php echo $link_link; ?>"><i class="icon-linkedin2"></i></a></li>
            </ul>
        <?php

    }

// Widget Backend
    public function form($instance)
    {
        if (isset($instance['content'])) {
            $content = $instance['content'];
        } else {
            $content = __('New content', 'footer_widget1_marble');
        }
        if (isset($instance['fb_link'])) {
            $fb_link = $instance['fb_link'];
        } else {
            $fb_link = __('New fb_link', 'footer_widget1_marble');
        }

        if (isset($instance['tw_link'])) {
            $tw_link = $instance['tw_link'];
        } else {
            $tw_link = __('New tw_link', 'footer_widget1_marble');
        }

        if (isset($instance['insta_link'])) {
            $insta_link = $instance['insta_link'];
        } else {
            $insta_link = __('New insta_link', 'footer_widget1_marble');
        }
        if (isset($instance['link_link'])) {
            $link_link = $instance['link_link'];
        } else {
            $link_link = __('New link_link', 'footer_widget1_marble');
        }
// Widget admin form
        ?>

        <p>
            <label for="<?php echo $this->get_field_id('content'); ?>"><?php _e('Content:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('content'); ?>"
                   name="<?php echo $this->get_field_name('content'); ?>" type="text"
                   value="<?php echo esc_attr($content); ?>"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('fb_link'); ?>"><?php _e('FACEBOOK Link:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('fb_link'); ?>"
                   name="<?php echo $this->get_field_name('fb_link'); ?>" type="text"
                   value="<?php echo esc_attr($fb_link); ?>"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('tw_link'); ?>"><?php _e('TWITTER Link:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('tw_link'); ?>"
                   name="<?php echo $this->get_field_name('tw_link'); ?>" type="text"
                   value="<?php echo esc_attr($tw_link); ?>"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('insta_link'); ?>"><?php _e('INSTAGRAM Link:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('insta_link'); ?>"
                   name="<?php echo $this->get_field_name('insta_link'); ?>" type="text"
                   value="<?php echo esc_attr($insta_link); ?>"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('link_link'); ?>"><?php _e('LINKEDIN Link:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('link_link'); ?>"
                   name="<?php echo $this->get_field_name('link_link'); ?>" type="text"
                   value="<?php echo esc_attr($link_link); ?>"/>
        </p>
        <?php
    }

// Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['content'] = (!empty($new_instance['content'])) ? strip_tags($new_instance['content']) : '';
        $instance['fb_link'] = (!empty($new_instance['fb_link'])) ? strip_tags($new_instance['fb_link']) : '';
        $instance['tw_link'] = (!empty($new_instance['tw_link'])) ? strip_tags($new_instance['tw_link']) : '';
        $instance['insta_link'] = (!empty($new_instance['insta_link'])) ? strip_tags($new_instance['insta_link']) : '';
        $instance['link_link'] = (!empty($new_instance['link_link'])) ? strip_tags($new_instance['link_link']) : '';
        return $instance;
    }
} //