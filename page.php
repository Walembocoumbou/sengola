<?php get_header(); ?>

<aside class="hg_left">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
</aside>

<main class="hg_main">

  <?php if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

        <article class="page-layout">
			<?php $args = [
				'child_of' => get_the_top_ancestor_id(),
				'title_li' => '',
			];
			wp_list_pages( $args ); ?>
            <h2><?php the_title() ?></h2>
			<?php the_content() ?>
        </article>
	
	<?php endwhile;

else :
	echo '<p>There are no pages!</p>';
endif; ?>
</main>

<aside class="hg_right">
    <ul>
        <?php dynamic_sidebar( 'main-sidebar' ); ?>
    </ul>
</aside>

<?php get_footer(); ?>