<?php 
/*Template Name: Test-Home-2
*/

?>
<?php get_header(); ?>
 <p class="row tagline">Marta Pèrez Garcìa expresses the bestiary of mankind; <br>a humanimality of skeleton that conceals and mask that reveals. </p>
   
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing main">

      <!-- Three columns of text below the carousel -->
      <section class="row">
		<div class="col-lg-4 col-md-6 col-xs-12">
			<?php the_block("Picture 1"); ?>
		</div>
		<div class="col-lg-4 col-md-6 col-xs-12">
			<?php the_block("Picture 2"); ?>
		</div>
		<div class="col-lg-4 col-md-6 col-xs-12">
			<?php the_block("Picture 3"); ?>
		</div>
		<div class="clearfix"></div>
		
	   <section class="row">
		<div class="col-lg-4 col-md-6 col-xs-12">
			<?php the_block("Picture 1"); ?>
		</div>
		<div class="col-lg-4 col-md-6 col-xs-12">
			<?php the_block("Picture 2"); ?>
		</div>
		<div class="col-lg-4 col-md-6 col-xs-12">
			<?php the_block("Picture 3"); ?>
		</div>
	</section>
	  
	 <!--<div class="row">
        <div class="col-lg-4 col-md-6 col-xs-12">
          <img class="" src="<?php bloginfo('template_url');?>/images/marta-3.png" alt="Generic placeholder image" style="width: 300px; height: 300px;">
          <h2>Heading</h2>
         
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <img class="" src="<?php bloginfo('template_url');?>/images/marta-4.png" alt="Generic placeholder image" style="width: 300px; height: 300px;">
          <h2>Heading</h2>
          
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <img class="" src="<?php bloginfo('template_url');?>/images/marta-3.png" alt="Generic placeholder image" style="width: 300px; height: 300px;">
          <h2>Heading</h2>
          
        </div>
      </div> -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Artist Statement. <span class="text-muted">"Recent works feature women &amp; guns.</span></h2>
          <p class="lead">The image of a woman  holding a handgun can seem a rather strong, unlikely and worrisome one.  For me, a handgun is both a metaphor for violence, and an object of power.  Guns are not objects commonly associated with the conventional image of women. . ."</p>
		   <p><a class="btn btn-lg btn-primary" href="#" role="button">More </a></p>
 

        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="<?php bloginfo('template_url');?>/images/featured2.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="<?php bloginfo('template_url');?>/images/WhenintheDark12.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Check out my work. <span class="text-muted">My portfolio.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
		<p><a class="btn btn-lg btn-primary" href="#" role="button">View </a></p>
      </div>

      <hr class="featurette-divider">

    <!--  <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Upcoming Events. <span class="text-muted">Where to see my art.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
		<div class="col-md-5">
          <img class="featurette-image img-responsive" src="http://placehold.it/500x500" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">-->

      <!-- /END THE FEATURETTES -->


 <?php get_footer(); ?>