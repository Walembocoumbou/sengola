<article class="post cadre">

<?php if ( has_post_thumbnail() ) { ?>
    <div class="small-thumbnail">
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'small-thumbnail' ); ?></a>
    </div>
<?php } ?>

<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
<p class="post-meta">Publié le <?php the_time('d/m/Y'); ?></p>
<?php the_excerpt() ?>
<a href="<?php the_permalink() ?>" " class="post__link">Poursuivre la lecture &raquo</a>
</article>