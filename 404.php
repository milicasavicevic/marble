<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Marble
 * @since 1.0
 * @version 1.0
 */
?>

<body>
<div id="fh5co-page">
    <a href="<?php the_permalink(); ?>" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <aside id="fh5co-aside" role="complementary" class="border">


        <?php get_header(); ?>

            <?php get_footer();?>

    </aside>

    <div id="fh5co-main">
        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
                <header class="page-header">
                    <h1 class="page-title"><?php _e('Kaput! 404 Error'); ?></h1>
                </header>
                <div class="error-wrapper">
                    <div class="error-logo"><img src="<?php echo get_template_directory_uri().'/images/img1.png';?>"/>
                    </div>
                    <div class="error-message"><p><?php _e('Sorry the page you are looking for is broken. Our team is working
on fixing this problem'); ?></p></div>
                </div>
                <?php echo '<br/>'; ?>
                <div class="search-form">
                    <p> You can search below or return to homepage </p>
                    <?php get_search_form(); ?> </div>
                <?php echo '<br/>'; ?>
            </div>
        </div>
        <?php get_footer();
        ?>
    </div>
</body>
</html>

