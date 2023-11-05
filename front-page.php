<?php get_header(); ?>
<phots class="hg_phots">
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
</phots>

<aside class="hg_left">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
    <br />&nbsp;
    <?php get_template_part( 'sidebar-left' ); ?>
    <br />&nbsp;
</aside>

<main class="hg_main">

    <!-- home-columns -->
    <extrait class="hg_extrait">
    <article class="cadre">
        <p class="titrecadre">PAROLE D’ÉVÊQUE</p>
        <?php
        $args = array(
            'category_name' => 'parole-deveque',
            'posts_per_page' => '1',
        );
        // Custom query.
        $query = new WP_Query( $args );
        // Check that we have query results.
        if ( $query->have_posts() ) {
            // Start looping over the query results.
            while ( $query->have_posts() ) {
                $query->the_post();
                // Contents of the queried post results go here. ?>
                <p class="kepi"><?php the_post_thumbnail('micro-thumbnail'); ?></p>
                <h2 class="kepi"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                <p class="post-meta">
                    Publié le <?php the_time( get_option( 'date_format' ) ); ?>
                </p>
                <p>
                    <?php echo get_the_excerpt() ?>
                    <br />
                    <a href="<?php the_permalink(); ?>" class="post__link">Poursuivre la lecture &raquo</a>
                </p>
        <?php    }
        }
        // Restore original post data.
        wp_reset_postdata();
        ?>
    </article>
    <article class="cadre">
    <p class="titrecadre">ACTES DE LA CEC</p>
        <?php
        // Custom Loop using WP_Query to fetch ACTES DE LA CONFÉRENCE ÉPISCOPALE DU CONGO (CEC) Posts
        $args = array(
            'category_name' => 'actes-de-la-conference-episcopale-du-congo-cec',
            'posts_per_page' => '1',
        );
        // Custom query.
        $query = new WP_Query( $args );
        // Check that we have query results.
        if ( $query->have_posts() ) {
            // Start looping over the query results.
            while ( $query->have_posts() ) {
                $query->the_post();
            // Contents of the queried post results go here. ?>
            <p class="kepi"><?php the_post_thumbnail('micro-thumbnail'); ?></p>
                <h2 class="kepi"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                <p class="post-meta">
                    Publié le <?php the_time( get_option( 'date_format' ) ); ?>
                </p>
                    <p>
                    <?php echo get_the_excerpt() ?>
                    <br />
                    <a href="<?php the_permalink(); ?>" class="post__link">Poursuivre la lecture &raquo</a>
                </p>		
        <?php    }
         }
         
        // Restore original post data.
        wp_reset_postdata();
        ?>
    </article>
</extrait><!-- /home-columns -->
<br />
<hr  class="h">
<br />
<article class="cadre">
    <?php
        // First query arguments.
    $args1 = array(
        'post_type' => 'post',
        'posts_per_page' => '1'
    );
    
    // First custom query.
    $query1 = new WP_Query( $args1 );
    
    // Check that we have query results.
    if ( $query1->have_posts() ) {
    
        // Start looping over the query results.
        while ( $query1->have_posts() ) {
    
            $query1->the_post();
    
            ?>
            <p class="kepi"><?php the_post_thumbnail('micro-thumbnail'); ?></p>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                </a>
                <span  class="kepi"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_title(); ?></a></span>
                <?php the_content(); ?>
            </article>
            <?php
        }
    }
    
    // Restore original post data.
    wp_reset_postdata();
    ?>
</article>

</main>

<aside class="hg_right">
<br />&nbsp;<br />&nbsp;
<br />&nbsp;<br />&nbsp;
<div class="kepi">
    <?php get_search_form(); ?>
</div>
<br />&nbsp;<br />&nbsp;


<!-- Derniers articles -->
<p class="endnew">Derniers articles</p>
    <ul class="menugauche">
        <?php wp_reset_postdata();
        query_posts('posts_per_page=3');
        while (have_posts()) : the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <br />
        <?php endwhile; ?>
    </ul>

</aside>

<?php get_footer(); ?>