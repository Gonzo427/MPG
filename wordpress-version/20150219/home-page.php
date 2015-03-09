<?php 
/*Template Name: Home
*/

?>
<?php get_header(); ?>
 <section class="main">
	
	<?php if(have_posts()): while(have_posts()): the_post();?>
		<h2><?php the_title(); ?></h2>
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
		<p>Sorry, we couldn't find your page. </p>
	<?php endif; ?>
	
</section>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img  class="img-responsive" src="<?php bloginfo('template_url');?>/images/Optimized-Adan-y-Eva.png" alt="First slide">
         <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
         
              <p ><a class="btn  btn-primary" href="#" role="button">Learn more </a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/Optimized-El-gallo.png" alt="Second slide">
         <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>	
              
              <p><a class="btn  btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
		<div class="item">
          <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/Optimized-The-End-Game.png" alt="Second slide">
         <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>	
              
              <p><a class="btn btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img  class="img-responsive"  src="<?php bloginfo('template_url');?>/images/Optimized-When-in-the-Dark-4.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
             
              <p><a class="btn btn-primary" href="#" role="button">Portfolio</a></p>
            </div>
          </div>
        </div>
		
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

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