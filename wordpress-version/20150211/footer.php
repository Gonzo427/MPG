	
	
	<!-- FOOTER -->
	  
    <footer class="row">
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
                });
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
			$('#myModal').on('shown.bs.modal', function(){
			$('#myModal .modal-body').html(html);
			//this will hide or show the right links:
			$('a.controls').trigger('click');
		})
			
           return false;
        });
	</script>
   
	<?php wp_footer(); ?>
  </body>
</html>