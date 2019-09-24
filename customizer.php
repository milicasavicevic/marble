<?php
function marble_customize_register(WP_Customize_Manager $wp_customize)
{
    //add slider options
    $wp_customize->add_panel('slider', array(
        'title' => __('Slider'),
        'description' => 'collection of slides',
        //'priority' => 160,
    ));
    $j = get_theme_mod('num_of_slides');

    $wp_customize->add_section("num_of_sliders", array(
        "title" => __("Number of Slides ", "customizer_slider_sections"),
        "priority" => 30,
        'panel' => 'slider',
    ));
    $wp_customize->add_setting("num_of_slides", array(
        "default" => "",
        "transport" => "postMessage",

    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "num_of_slides",
        array(
            "label" => __("Enter Number of Slides", "customizer_slide_title_label"),
            "section" => "num_of_sliders",
            "settings" => "num_of_slides",
            "type" => "number",
        )
    ));

    for ($i = 1; $i <= $j; $i++) {
        $wp_customize->add_section("slider_" . $i, array(
            "title" => __("Slide " . $i, "customizer_slider_sections"),
            "priority" => 30,
            'panel' => 'slider',
        ));
        $wp_customize->add_setting("slide_title_" . $i, array(
            "default" => "",
            "transport" => "postMessage",
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            "slide_title_" . $i,
            array(
                "label" => __("Enter Title_" . $i, "customizer_slide_title_label"),
                "section" => "slider_" . $i,
                "settings" => "slide_title_" . $i,
                "type" => "textarea",
            )
        ));
        $wp_customize->add_setting("slide_subtitle_" . $i, array(
            "default" => "",
            "transport" => "postMessage",
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            "slide_subtitle_" . $i,
            array(
                "label" => __("Enter Subtitle ", "customizer_subtitle_label"),
                "section" => "slider_" . $i,
                "settings" => "slide_subtitle_" . $i,
                "type" => "textarea",
            )
        ));


        $wp_customize->add_setting("slide_button1_name_" . $i, array(
            "default" => "",
            "transport" => "postMessage",
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            "slide_button1_name_" . $i,
            array(
                "label" => __("Button 1 Name", "customizer_slide_button1_label"),
                "section" => "slider_" . $i,
                "settings" => "slide_button1_name_" . $i,
                "type" => "textarea",
            )
        ));
        $wp_customize->add_setting("slide_button1_link_" . $i, array(
            "default" => "",
            "transport" => "postMessage",
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            "slide_button1_link_" . $i,
            array(
                "label" => __("Button 1 Link", "customizer_slide_button1_label"),
                "section" => "slider_" . $i,
                "settings" => "slide_button1_link_" . $i,
                "type" => "textarea",
            )
        ));
        $wp_customize->add_setting("slide_button2_name_" . $i, array(
            "default" => "",
            "transport" => "postMessage",
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            "slide_button2_name_" . $i,
            array(
                "label" => __("Button 2 Name", "customizer_slide_button2_label"),
                "section" => "slider_" . $i,
                "settings" => "slide_button2_name_" . $i,
                "type" => "textarea",
            )
        ));
        $wp_customize->add_setting("slide_button2_link_" . $i, array(
            "default" => "",
            "transport" => "postMessage",
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            "slide_button2_link_" . $i,
            array(
                "label" => __("Button 2 Link", "customizer_slide_button2_label"),
                "section" => "slider_" . $i,
                "settings" => "slide_button2_link_" . $i,
                "type" => "textarea",
            )
        ));

        $wp_customize->add_setting('sl_sect_image_' . $i, array(
            'title' => __('Add section image', 'themeRemax'),
            'description' => __('Your Image on the Slide Section.'),
            'active_callback' => 'is_front_page',
            'default'=>get_template_directory_uri().'/images/img-2.jpg'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sl_sect_image_' . $i, array(
            'label' => __(' Slide Section Image ', 'themeRemax'),
            'section' => 'slider_' . $i,
            'settings' => 'sl_sect_image_' . $i,
        )));


    }
    //add services options

    //adding panel for  index service options
    $wp_customize->add_panel('index_service_options', array(
        'title' => __('Index Service Options'),
        'description' => 'collection of index services',

    ));

    // add index service options


    $wp_customize->add_section("num_of_i_servs", array(
        "title" => __("Number of Services ", "customizer_serve_sections"),
        "priority" => 30,
        'panel' => 'index_service_options',
    ));
    $wp_customize->add_setting("num_of_i_servs", array(
        "default" => "",
        "transport" => "postMessage",

    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "num_of_i_servs",
        array(
            "label" => __("Enter Number of Services", "customizer_servs_label"),
            "section" => "num_of_i_servs",
            "settings" => "num_of_i_servs",
            "type" => "number",
        )
    ));
    $j = get_theme_mod('num_of_i_servs');
    for ($i = 1; $i < $j; $i++) {
        $wp_customize->add_section("service_" . $i, array(
            "title" => __("Service " . $i . " Options", "customizer_serve_sections"),
            "priority" => 30,
            'panel' => 'index_service_options',
        ));
        $wp_customize->add_setting("serve_title_" . $i, array(
            "default" => "",
            "transport" => "postMessage",
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            "serve_title_" . $i,
            array(
                "label" => __("Enter Service " .$i. " Title ", "customizer_serve_title_label"),
                "section" => "service_" . $i,
                "settings" => "serve_title_" . $i,
                "type" => "textarea",
            )
        ));
        $wp_customize->add_setting("serve_content_" . $i, array(
            "default" => "",
            "transport" => "postMessage",
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            "serve_content_" . $i,
            array(
                "label" => __("Enter Service " .$i. " Content ", "customizer_serve_content_label"),
                "section" => "service_" . $i,
                "settings" => "serve_content_" . $i,
                "type" => "textarea",
            )
        ));
        $wp_customize->add_setting("serve_favicon_class_" . $i, array(
            "default" => "",
            "transport" => "postMessage",
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            "serve_favicon_class_" . $i,
            array(
                "label" => __("Enter Favicon class from https://www.favicon.com ", "customizer_serve_favicon_label"),
                "section" => "service_" . $i,
                "settings" => "serve_favicon_class_" . $i,
                "type" => "textarea",
            )
        ));


    }
    $wp_customize->add_section("index_service", array(
        "title" => __("Main Title", "customizer_service_sections"),
        "priority" => 30,
        'panel' => 'index_service_options',
    ));
    $wp_customize->add_setting("serve_title", array(
        "default" => "",
        "transport" => "postMessage",
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "serve_title",
        array(
            "label" => __("Enter Main Title ", "customizer_serve_title_label"),
            "section" => "index_service" ,
            "settings" => "serve_title",
            "type" => "textarea",
        )
    ));

    //add page bottom section
    //adding panel for  index service options
    $wp_customize->add_section("page_bottom", array(
        "title" => __("Page Bottom Options", "customizer_bottom_sections"),
        "priority" => 30,
        'panel' => 'pages',
    ));
    $wp_customize->add_setting("bottom_title", array(
        "default" => "",
        "transport" => "postMessage",
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "bottom_title",
        array(
            "label" => __("Enter Title ", "customizer_bottom_title_label"),
            "section" => "page_bottom" ,
            "settings" => "bottom_title",
            "type" => "textarea",
        )
    ));
    $wp_customize->add_setting("bottom_content", array(
        "default" => "",
        "transport" => "postMessage",
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "bottom_content",
        array(
            "label" => __("Enter Content ", "customizer_bottom_content_label"),
            "section" => "page_bottom" ,
            "settings" => "bottom_content",
            "type" => "textarea",
        )
    ));
    $wp_customize->add_setting("bottom_button_name", array(
        "default" => "",
        "transport" => "postMessage",
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "bottom_button_name",
        array(
            "label" => __("Enter Button Name ", "customizer_bottom_button_name_label"),
            "section" => "page_bottom" ,
            "settings" => "bottom_button_name",
            "type" => "textarea",
        )
    ));
    $wp_customize->add_setting("bottom_button_link", array(
        "default" => "",
        "transport" => "postMessage",
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "bottom_button_link",
        array(
            "label" => __("Enter Button Link ", "customizer_bottom_button_link_label"),
            "section" => "page_bottom" ,
            "settings" => "bottom_button_link",
            "type" => "textarea",
        )
    ));


    //adding panel for page options
    $wp_customize->add_panel('pages', array(
        'title' => __('Pages Options'),
        'description' => 'collection of index services',

    ));
    //adding section for about page options
    $wp_customize->add_section("about", array(
        "title" => __("About Page Options", "customizer_about_sections"),
        "priority" => 30,
        'panel' => 'pages',
    ));
    $wp_customize->add_setting("about_title", array(
        "default" => "",
        "transport" => "postMessage",
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "about_title",
        array(
            "label" => __("Enter Title ", "customizer_about_title_label"),
            "section" => "about" ,
            "settings" => "about_title",
            "type" => "textarea",
        )
    ));
    $wp_customize->add_setting("about_content", array(
        "default" => "",
        "transport" => "postMessage",
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "about_content",
        array(
            "label" => __("Enter Content ", "customizer_about_content_label"),
            "section" => "about" ,
            "settings" => "about_content",
            "type" => "textarea",
        )
    ));
    $wp_customize->add_setting('about_image', array(
        'title' => __('Add section image', 'themeRemax'),
        'description' => __('Your Image on the About Page'),
        'active_callback' => 'is_front_page',
        'default'=>get_template_directory_uri().'/images/img-2.jpg'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image', array(
        'label' => __(' About Page Image ', 'themeRemax'),
        'section' => 'about',
        'settings' => 'about_image',
    )));

    //add contact services options
    for ($i = 1; $i <4; $i++) {
        $wp_customize->add_section("contact_service_" . $i, array(
            "title" => __(" Contact Service " . $i . " Options", "customizer_serve_sections"),
            "priority" => 30,
            'panel' => 'pages',
        ));
        $wp_customize->add_setting("contact_serve_content_" . $i, array(
            "default" => "",
            "transport" => "postMessage",
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            "contact_serve_content_" . $i,
            array(
                "label" => __("Enter Service " . $i . " Content ", "customizer_serve_content_label"),
                "section" => "contact_service_" . $i,
                "settings" => "contact_serve_content_" . $i,
                "type" => "textarea",
            )
        ));
        $wp_customize->add_setting("contact_serve_link_" . $i, array(
            "default" => "",
            "transport" => "postMessage",
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            "contact_serve_link_" . $i,
            array(
                "label" => __("Enter Service " . $i . " Link ", "customizer_serve_content_label"),
                "section" => "contact_service_" . $i,
                "settings" => "contact_serve_link_" . $i,
                "type" => "textarea",
            )
        ));
        $wp_customize->add_setting("contact_serve_favicon_class_" . $i, array(
            "default" => "",
            "transport" => "postMessage",
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            "contact_serve_favicon_class_" . $i,
            array(
                "label" => __("Enter Favicon class from https://www.favicon.com ", "customizer_serve_favicon_label"),
                "section" => "contact_service_" . $i,
                "settings" => "contact_serve_favicon_class_" . $i,
                "type" => "textarea",
            )
        ));

    }



}
add_action("customize_register", "marble_customize_register");