<?php 
/*Template Name: Full Page Woodcuts
*/

?>
<?php get_header(); ?>

<!--Here is the main content-->

<section class="main">
	<?php if(have_posts()): while(have_posts()): the_post();?>
		<h2><?php the_title(); ?></h2>
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
		<p>Sorry, we couldn't find your page. </p>
	<?php endif; ?>
</section>
<section class="col-lg-12 col-md-12"> 
<?php
				wp_nav_menu( array(
					'menu'              => 'Woodcut',
					'theme_location'    => 'woodcut',
					'depth'             => 1,
					'container'         => 'div',
					'container_class'   => 'gallery-nav',
					'container_id'      => 'woodcut-nav',
					'menu_class'        => 'nav '
					)
				);
?>
</section>
<div class="container col-lg-12  col-md-12 col-sm-12 col-xs-12">
	<hr class="featurette-divider">
</div>
<!--end main-->

<?php get_footer(); ?>