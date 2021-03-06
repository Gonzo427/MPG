<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
    <title>Marta Web Site v3</title>

    <!-- Bootstrap core CSS -->
        <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url');?>/bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
   <!-- <link href="style.css" rel="stylesheet">-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Marta Perez-Garcia</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
				<li><a href="#about">Portfolio</a></li>
				<li><a href="about">Events</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">These are examples</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">More...</li>
                    <li><a href="#">Another link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


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
          <img  class="img-responsive" src="<?php bloginfo('template_url');?>/images/Adan-y-Eva.png" alt="First slide">
         <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
         
              <p><a class="btn btn-lg btn-primary" href="#" role="button">More </a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/Elgallo1995.jpg" alt="Second slide">
         <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>	
              
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img  class="img-responsive"  src="<?php bloginfo('template_url');?>/images/When-in-the-Dark-4.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
             
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Portfolio</a></p>
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
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="<?php bloginfo('template_url');?>/images/marta-3.png" alt="Generic placeholder image" style="width: 300px; height: 300px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php bloginfo('template_url');?>/images/marta-4.png" alt="Generic placeholder image" style="width: 300px; height: 300px;">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php bloginfo('template_url');?>/images/marta-3.png" alt="Generic placeholder image" style="width: 300px; height: 300px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
		
		 <div class="col-lg-4">
          <img class="img-rounded" src="<?php bloginfo('template_url');?>/images/marta-4.png"  alt="Generic placeholder image" style="width: 300px; height: 300px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
         <img class="img-rounded" src="<?php bloginfo('template_url');?>/images/marta-3.png"  alt="Generic placeholder image" style="width: 300px; height: 300px;">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-rounded" src="<?php bloginfo('template_url');?>/images/marta-4.png"  alt="Generic placeholder image" style="width: 300px; height: 300px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
		
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Artist Statement. <span class="text-muted">My recent works feature women and guns.</span></h2>
          <p class="lead">The image of a woman  holding a handgun can seem a rather strong, unlikely and worrisome one.  For me, a handgun is both a metaphor for violence, and an object of power.  Guns are not objects commonly associated with the conventional image of women.
 
My work is centered on the dynamic tension between domestic, culturally accepted violence perpetrated against women, and the violent and instantaneous act by which, at times, women attempt to break -and escape from- this vicious cycle. 

Wide swaths of our contemporary societies continue to chose to ignore the ever more pressing problem of gender-based violence.  
 
My prints, in fact,  talk about the contemporary feminicide, and how gender-based violence has become an accepted part of modern life. 
 
Through my work, I am trying to initiate a dialogue in which the public is led to experiment in a poetic way the chaotic nature of the human condition. Without using melodrama, simplifications or moralization, I thrive to bring forth the story of women confronted with abuses. 
 
One of my objectives is to I try to give a voice to women who have lived and continue to live through these acts of horror in silence. 

Ultimately, my intention is that the aesthetic space created by my work contributes to bringing the public to reflect on an age old problem that society has struggled to tackle. </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="http://placehold.it/500x500" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="http://placehold.it/500x500" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Check out my work. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Upcoming Events. <span class="text-muted">Where to see my art.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
		<div class="col-md-5">
          <img class="featurette-image img-responsive" src="http://placehold.it/500x500" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
   
  </body>
</html>
