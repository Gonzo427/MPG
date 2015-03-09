<?php get_header(); ?>

<!--Here is the main content-->

<section class="main col-lg-5 col-md-5 col-sm-12 img-responsive">
	<?php if(have_posts()): while(have_posts()): the_post();?>
		<h2><?php the_title(); ?></h2>
			<?php the_post_thumbnail(); ?>
		<div class="img-responsive">	<?php the_content(); ?> </div>
	<?php endwhile; else: ?>
		<p>Sorry, we couldn't find your page. </p>
	<?php endif; ?>
</section>


<section class="main col-lg-5 col-md-5 col-sm-12 description">
	<?php 	the_block("Description"); ?>
</section>


<!--end main-->

<?php get_footer(); ?>