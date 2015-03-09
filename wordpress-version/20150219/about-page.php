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


	
	<section class="col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 main">
		<?php the_block("Picture"); ?>
	</section>
	<div class="clearfix"></div>
	<section  class="col-lg-8 col-md-8 main">
	<h2 id="resume"> Resume</h2>
<h3 class="show-hide "> Education <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></h3>
		<div class="resume-content" style="display: none"; ><?php the_block("Education"); ?></div>
	</section>
	<section  class="col-lg-8 col-md-8 main">
<h3 class="show-hide resume-section"> Professional Experience <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></h3>
		<div class="resume-content" style="display: none"; ><?php the_block("Experience"); ?></div>
	</section>
	<section  class="col-lg-8 col-md-8 main">
<h3 class="show-hide resume-section"> Awards <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></h3>
		<div class="resume-content" style="display: none"; ><?php the_block("Awards"); ?></div>
	</section>
	
		<section  class="col-lg-8 col-md-8 main">
<h3 class="show-hide resume-section"> Solo Exhibitions <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></h3>
		<div class="resume-content" style="display: none"; ><?php the_block("Solo"); ?></div>
	</section>
	<section  class="col-lg-8 col-md-8 main">
<h3 class="show-hide resume-section"> Group Exhibitions <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></h3>
		<div class="resume-content" style="display: none"; ><?php the_block("Group"); ?></div>
	</section>
		<section  class="col-lg-8 col-md-8 main">
<h3 class="show-hide resume-section"> Collections <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></h3>
		<div class="resume-content" style="display: none"; ><?php the_block("Collections"); ?></div>
	</section>

<div class="container col-lg-12">
	<hr class="featurette-divider">
</div>
<!--end main-->

<?php get_footer(); ?>