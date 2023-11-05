<?php get_header(); ?>

<aside class="hg_left">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
</aside>

<main class="hg_main">

        <?php if( have_posts() ) :
        while ( have_posts() ) {
        the_post();
        get_template_part( 'theposts' );
        }
            endif; ?>
 
        <br />&nbsp;
        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>
</main>

<aside class="hg_right">
    <ul>
        <?php dynamic_sidebar( 'main-sidebar' ); ?>
    </ul>
</aside>

<?php get_footer(); ?>