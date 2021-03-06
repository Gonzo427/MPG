<?php 
/*Template Name: Home
*/

?>
<?php get_header(); ?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
       
      </ol>
      <div class="carousel-inner" role="listbox">
       
        <div class="item active">
		<div class="row">
           <div class="col-sm-4 col-xs-4">
			<img class="img-responsive" src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-1.jpg" alt="1 ">
			</div>
			<div class="col-sm-4 col-xs-4">
			<img class="img-responsive" src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-2.jpg" alt="2">
			</div>
          
			<div class="col-sm-4 col-xs-4">
			<img class="img-responsive" src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-5.jpg" alt="5">
			</div>
		</div>
		</div>
		
		<div class="item">
		<div class="row">
			<div class="col-sm-4 col-xs-4">
			<img class="img-responsive" src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-6.jpg" alt="6">
			</div>
			<div class="col-sm-4 col-xs-4">
			<img class="img-responsive" src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-3.jpg" alt="3">
			</div>
			<div class="col-sm-4 col-xs-4">
			<img class="img-responsive" src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-4.jpg" alt="4">
			</div>
        </div>
		
		<div class="container">
         <!--   <div class="carousel-caption">
              <h1>Another example headline.</h1>	
              
              <p><a class="btn  btn-primary" href="#" role="button">Learn more</a></p>
            </div>-->
          </div>
        </div>
		
		<div class="item">
		<div class="row">
			<div class="col-sm-4 col-xs-4">
			<img class="img-responsive" src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-7.jpg" alt="7">
			</div>
			<div class="col-sm-4 col-xs-4">
			<img class="img-responsive" src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-8.jpg" alt="8">
			</div>
			<div class="col-sm-4 col-xs-4">
			<img class="img-responsive" src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-11.jpg" alt="11">
			</div>
		</div>
		</div>
		
		<div class="item">
		<div class="row">
			<div class="col-sm-4 col-xs-4">
			<img class="img-responsive" src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-12.jpg" alt="12">
			</div>
			<div class="col-sm-4 col-xs-4">
			<img class="img-responsive" src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-9.jpg" alt="9">
			</div>
			<div class="col-sm-4 col-xs-4">
			<img class="img-responsive" src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-10.jpg" alt="10">
			</div>
         </div>
		</div>
		
    </div> <!--end .carousel-inner-->
	
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
	<section class="intro">
	
	<?php if(have_posts()): while(have_posts()): the_post();?>
		
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
		<p>Sorry, we couldn't find your page. </p>
	<?php endif; ?>
	
	</section>
      <!-- Three columns of text below the carousel -->
    <section class="row">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<?php the_block("Picture 1"); ?>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<?php the_block("Picture 2"); ?>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<?php the_block("Picture 3"); ?>
		</div>
		
		<div class="clearfix"></div>
		


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5 col-sm-12">
          <!--<img class="featurette-image img-responsive" src="<?php //bloginfo('template_url');?>/images/Marta-portrait.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">-->
		  <?php the_block("Marta Portrait"); ?>
        </div>
		<div class="col-md-7">
          <h2 class="featurette-heading">Artist Statement. </h2>
		  <?php the_block("Artist Statement"); ?>
        </div>
		
        
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5  col-sm-12 col-xs-12">
         <?php the_block("Image"); ?>
        </div>
        <div class="col-md-7 col-xs-12">
          <h2 class="featurette-heading">Check out my work. <span class="text-muted"></span></h2>
          <?php the_block("Text"); ?>
		  
        </div>
		
      </div>

      <hr class="featurette-divider">
	  
	  <div class="row featurette">
        <div class="col-md-5  col-sm-12 col-xs-12">
          <?php the_block("News-Image"); ?>
        </div>
        <div class="col-md-7col-xs-12">
          <h2 class="featuorette-heading">News <span class="text-muted"></span></h2>
          <?php the_block("News"); ?>
        </div>
		
      </div>

      <hr class="featurette-divider">

 
	</section><!--end section.row-->
	</div><!--end .container.marketing-->

 <?php get_footer(); ?>