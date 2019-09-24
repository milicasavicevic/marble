<body>
<div id="fh5co-page">
    <a href="<?php the_permalink(); ?>" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <aside id="fh5co-aside" role="complementary" class="border">


        <?php get_header(); ?>
        <?php get_footer();?>

    </aside>
<?php if(is_page('about'))
{
    get_template_part('template-parts/content/content', 'about');
}
    elseif(is_page('contact'))
{
get_template_part('template-parts/content/content', 'contact');
}
else{
    get_template_part('template-parts/content/content', 'page');
}
?>


</body>
</html>

