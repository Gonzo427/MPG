	
	
	<!-- FOOTER -->
	  
    <footer >
		<div class="container">
			<p class="pull-right"><a href="#">Back to top</a></p>
			
			<p><a href="#">Design by TMT Digital</a></p>
			<p>&copy; 2014 MPG &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
		</div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
	
	<!-- Modal LightBox Script
	================================== -->
	 <script>
	 $(document).ready(function(){
           $('li img').on('click',function(){
                var src = $(this).attr('src');
                var img = '<img src="' + src + '" class="img-responsive"/>';
				
				var index = $(this).parent('li').index();                   
                var html = '';
                html += img;                
                html += '<div style="height:30px;clear:both;display:block;">';
                html += '<a class="controls next" href="'+ (index+2) + '">next &raquo;</a>';
                html += '<a class="controls previous" href="' + (index) + '">&laquo; prev</a>';
                html += '</div>';
				
                $('#myModal').modal();
                $('#myModal').on('shown.bs.modal', function(){
                    $('#myModal .modal-body').html(html);
					 $('a.controls').trigger('click');
                })
                $('#myModal').on('hidden.bs.modal', function(){
                    $('#myModal .modal-body').html('');
                });
           });  
        })
		
		 $(document).on('click', 'a.controls', function(){
			var index = $(this).attr('href');
			var src = $('ul.row li:nth-child('+ index +') img').attr('src');             
			$('.modal-body img').attr('src', src);
			
			var newPrevIndex = parseInt(index) - 1; 
			var newNextIndex = parseInt(newPrevIndex) + 2; 
 
			if($(this).hasClass('previous')){               
				$(this).attr('href', newPrevIndex); 
				$('a.next').attr('href', newNextIndex);
			}else{
				$(this).attr('href', newNextIndex); 
				$('a.previous').attr('href', newPrevIndex);
			}
			
			var total = $('ul.row li').length + 1; 
			//hide next button
			if(total === newNextIndex){
				$('a.next').hide();
			}else{
				$('a.next').show()
			}            
			//hide previous button
			if(newPrevIndex === 0){
				$('a.previous').hide();
			}else{
				$('a.previous').show()
			}
			
			
           return false;
        });
	</script>
   
   
 <!--show resume function--> 
<script>
	$(".show-hide").click(function(){
		var content=$(this).next();
		var icon=$(this).find('.glyphicon');
		$(content).toggle(300);
		
		$(icon).toggleClass('glyphicon-triangle-top', 'glyphicon-triangle-bottom');
	});
	//this code disables right-click menu. 
	document.oncontextmenu = function(e) {
    e = e || window.event;
    if (/^img$/i.test((e.target || e.srcElement).nodeName)) return false;
};
	
</script>
<script>
$('myModal').modal('toggle').css({'width': '800px','margin-left': function () {return -($(this).width() / 2);}})
</script>
<script>
$(document).ready(function() {
	$('#myCarousel').carousel({
	interval: 10000
	})
    
    $('#myCarousel').on('slid.bs.carousel', function() {
    	//alert("slid");
	});
    
    
});
</script>
<!--lightbox expand option-->
<script>
$(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto(
    {
        allow_resize: true, /* Resize the photos bigger than viewport. true/false */
    });
});
</script>


<script>
$(function() {
     var pgurl = window.location.href.substr(window.location.href
.lastIndexOf("/")+1);
     $("#sub-nav ul li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          $(this).addClass("active");
     })
});


</script>

	<?php wp_footer(); ?>
  </body>
</html>