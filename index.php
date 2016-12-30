<?php
get_header();

if( is_front_page() ){ ?>

    <h1><?php bloginfo('name'); ?></h1>

<?php }elseif ( is_archive() ){

	the_archive_title( '<h1>', '</h1>' );

}
?>

<div class="archive-wrap">

<?php while( have_posts() ): the_post(); ?>

<article class="archive-post">

	<?php if( has_post_thumbnail() ): ?>

		<a class="img-link" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('material-simple-thumbnail'); ?></a>

	<?php endif; ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<div class="excerpt"><?php the_excerpt(); ?></div>

</article>

<?php endwhile; ?>
</div>
<?php
the_posts_pagination( );

get_footer();



