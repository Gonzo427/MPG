<?php 
/*Template Name: Gallery

*/

?>
<?php get_header(); ?>
<section class="main">
	<?php if(have_posts()): while(have_posts()): the_post();?>
		<h2><?php the_title(); ?></h2>
		
	<?php endwhile; else: ?>
		<p>Sorry, we couldn't find your page. </p>
	<?php endif; ?>
</section>

	<!--Gallery Light Box
	================================= -->
	<div class=" gallery">
	
    <ul class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub-gallery"> When in the Dark Series</div>
       <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12 "><img class="img-responsive" src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-1.jpg"/>When in the Dark 1</li>
	   <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12 "><img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-2.jpg"/>When in the Dark 2</li>
	   <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12 "><img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-3.jpg"/>When in the Dark 3</li>
	   <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12 "><img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-4.jpg"/>When in the Dark 4</li>
   	   <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12"><img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-5.jpg"/>When in the Dark 5</li>
   	   <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12"><img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-6.jpg"/>When in the Dark 6</li>
	   <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12"><img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-7.jpg"/>When in the Dark 7</li>
	   <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12"><img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-8.jpg"/>When in the Dark 8</li>
	   <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12"><img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-9.jpg"/>When in the Dark 9</li>
	   <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12"><img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-10.jpg"/>When in the Dark 10</li>
	   <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12"><img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-11.jpg"/>When in the Dark 11</li>
	   <li class="col-lg-2 col-md-3 col-sm-4 col-xs-12 two-col"><img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-12.jpg"/>When in the Dark 12</li>
	   <br>
	   <br>
	   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub-gallery">Another Series</div>
	  
		<li class="col-lg-2 col-md-3 col-sm-4 col-xs-12"><img style="height: 200px;" class="img-responsive" src="<?php bloginfo('template_url');?>/images/Ruth-la-boricua-fiel.jpg"/>Ruth La Boricua Fiel</li>
		<li class="col-lg-2 col-md-3 col-sm-4 col-xs-12"><img style="height: 200px;" class="img-responsive"  src="<?php bloginfo('template_url');?>/images/Vi-la-muerte-danzar.jpg"/>Vi La Muerta Danzar</li>
		<li class="col-lg-2 col-md-3 col-sm-4 col-xs-12"><img style="height: 200px;" class="img-responsive"  src="<?php bloginfo('template_url');?>/images/Y-que-sabe-ud-Sr.jpg"/>Y Que Sabe Usted Sr.</li>
		<li class="col-lg-2 col-md-3 col-sm-4 col-xs-12"><img style="height: 200px;" class="img-responsive" src="<?php bloginfo('template_url');?>/images/Opression-1989.jpg"/>Oppression</li>
		<li class="col-lg-2 col-md-3 col-sm-4 col-xs-12"><img style="height: 200px;" class="img-responsive"  src="<?php bloginfo('template_url');?>/images/Peligro-injusticia-1990.jpg"/>Peligro Injusticia</li>
		<li class="col-lg-2 col-md-3 col-sm-4 col-xs-12"><img style="height: 200px;" class="img-responsive" src="<?php bloginfo('template_url');?>/images/woodcut_1.jpg"/>Woodcut 1</li>
		<li class="col-lg-2 col-md-3 col-sm-4 col-xs-12"><img style="height: 200px;" class="img-responsive" src="<?php bloginfo('template_url');?>/images/woodcut_3-1.jpg"/>Woodcut 3</li>
		<li class="col-lg-2 col-md-3 col-sm-4 col-xs-12 "><img style="height: 200px;" class="img-responsive" src="<?php bloginfo('template_url');?>/images/Yemaya-2005.jpg"/>Yemaya</li>
		
	</ul>
	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content"> 
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" > &times; </button>
			</div>
          <div class="modal-body">
				  
          </div>
		  
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<div class="container">
	<hr class="featurette-divider">
</div>
<?php get_footer(); ?>