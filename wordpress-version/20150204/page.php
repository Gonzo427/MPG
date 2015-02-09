<?php get_header(); ?>

<!--Here is the main content-->

<section class="main col-lg-10 col-lg-offset-1">
	<?php if(have_posts()): while(have_posts()): the_post();?>
		<h2><?php the_title(); ?></h2>
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
		<p>Sorry, we couldn't find your page. </p>
	<?php endif; ?>
</section>




<!--end main-->

<?php get_footer(); ?>