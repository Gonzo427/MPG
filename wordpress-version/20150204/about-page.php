<?php 
/*Template Name: About
*/

?>

<?php get_header(); ?>

<!--Here is the main content-->
<section class="col-lg-6 col-md-6 col-sm-6 main">
	<?php if(have_posts()): while(have_posts()): the_post();?>
		<h2><?php the_title(); ?></h2>
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
		<p>Sorry, we couldn't find your page. </p>
	<?php endif; ?>
</section>


	
	<section class="col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 main ">
		<?php the_block("Picture"); ?>
	</section>
	<div class="clearfix"></div>
	<section class="col-lg-8 col-md-8 main">
		<?php the_block("Resume"); ?>
	</section>





<!--end main-->

<?php get_footer(); ?>