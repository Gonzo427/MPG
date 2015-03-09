<?php get_header(); ?>
<!--Here is the main content-->

<section class="main col-lg-6 col-lg-offset-1">
	<?php if(have_posts()): while(have_posts()): the_post();?>
		<h2><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h2>
		<?php the_post_thumbnail(); ?>
		<p><?php the_content(); ?></p>
	<?php endwhile; else: ?>
		<p>Sorry, we couldn't find your page. </p>
		<br>
	<?php endif; ?>
</section>	
<section class="col-lg-3 col-lg-offset-1 sidebar">

</section>


<!--end main-->

<?php get_footer(); ?>