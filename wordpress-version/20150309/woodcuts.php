<?php 
/*Template Name: Woodcuts
*/

?>

<?php get_header(); ?>

<!--Here is the main content-->

<section class="main col-lg-5 col-md-5 col-sm-5 col-xs-11 ">
	<?php if(have_posts()): while(have_posts()): the_post();?>
		<h2><?php the_title(); ?></h2>
			<div class="img-responsive"><?php the_post_thumbnail(); ?></div>
			<?php the_content(); ?> 
	<?php endwhile; else: ?>
		<p>Sorry, we couldn't find your page. </p>
	<?php endif; ?>
</section>


<section class="main col-lg-5 col-md-5 col-sm-5 col-xs-11  description">
	<?php 	the_block("Description"); ?>
	<?php
				wp_nav_menu( array(
					'menu'              => 'Woodcut',
					'theme_location'    => 'woodcut',
					'depth'             => 1,
					'container'         => 'div',
					'container_class'   => 'gallery-nav col-xs-12',
					'container_id'      => 'sub-nav',
					'menu_class'        => 'nav '
					)
				);
    ?>
</section>

<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<hr class="featurette-divider">
</div>
<!--end main-->

<?php get_footer(); ?>