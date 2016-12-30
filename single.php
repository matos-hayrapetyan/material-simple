<?php
get_header();
while( have_posts() ): the_post();
	?>
	<article class="single-post">
		<h1><?php the_title(); ?></h1>
		<div class="the-content"><?php the_excerpt(); ?></div>
	</article>
	<?php
endwhile;
get_footer();



