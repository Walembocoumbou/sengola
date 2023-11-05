<?php get_header(); ?>

<aside class="hg_left">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
</aside>

<main class="hg_main">

  <?php if ( have_posts() ) {
	?>
    <h2>Search results for query: "<?php the_search_query(); ?>"</h2>
	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'theposts', get_post_format() );
	}
} else {
	echo '<p>No search results found!</p>';
} ?>
</main>

<aside class="hg_right">
    <ul>
        <?php dynamic_sidebar( 'main-sidebar' ); ?>
    </ul>
</aside>

<?php get_footer(); ?>