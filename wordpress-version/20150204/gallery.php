<?php 
/*Template Name: Gallery
*/

?>
<?php get_header(); ?>

	<!--Gallery Light Box
	================================= -->
	<div class="container gallery">
    <ul class="row baseline">
       <li class="col-lg-2 col-md-4 col-sm-6 "><img style="width: 180px; height: auto; margin: 5% 0 1% 0;" src="<?php bloginfo('template_url');?>/images/WhenintheDark12.jpg"/>Caption</li>
	   <li class="col-lg-2 col-md-4 col-sm-6 "><img style="width: 180px; height: auto; margin: 5% 0 1% 0;" src="<?php bloginfo('template_url');?>/images/El-gallo.png"/>Caption</li>
	   <li class="col-lg-2 col-md-4 col-sm-6 "><img style="width: 180px; height: auto; margin: 5% 0 1% 0;" src="<?php bloginfo('template_url');?>/images/The-End-Game.png"/>Caption</li>
	   <li class="col-lg-2 col-md-4 col-sm-6 "><img style="width: 180px; height: auto; margin: 5% 0 1% 0;" src="<?php bloginfo('template_url');?>/images/lluviaazul.jpg"/>Caption</li>
   	   <li class="col-lg-2 col-md-4 col-sm-6 "><img style="width: 180px; height: auto; margin: 5% 0 1% 0;" src="<?php bloginfo('template_url');?>/images/Nosotroselpueblo.jpg"/>Caption</li>
   	   <li class="col-lg-2 col-md-4 col-sm-6 "><img style="width: 180px; height: auto; margin: 5% 0 1% 0;" src="<?php bloginfo('template_url');?>/images/WhenintheDark12.jpg"/>Caption</li>
      
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
	
<?php get_footer(); ?>