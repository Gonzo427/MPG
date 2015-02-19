<?php get_header(); ?>
<!--Here is the main content-->

<section class="main col-lg-6 col-lg-offset-1">
	<?php if(have_posts()): while(have_posts()): the_post();?>
		<h2><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h2>
		<?php the_post_thumbnail(); ?>
		<p><?php the_content(); ?></p>
	<?php endwhile; else: ?>
		<p>Sorry, we couldn't find your page. </p>
	<?php endif; ?>
</section>	
<section class="col-lg-3 col-lg-offset-1 sidebar">
<h2> Hello Felix</h2>
<p> You are cute </p>
<p> Sed no omnes numquam. Ex sea cetero nonumes voluptatum, in eam esse quot. Qui te rebum erant nonumes, nec ei choro quaeque gloriatur. Sit ne probo atqui, per ad sumo error noluisse.</p>

<p>Cu repudiare complectitur nec. Sensibus consequuntur no mei, et his omnes nostrud consetetur, diam porro nusquam ne duo. Per ad vitae indoctum, unum audire eu pro. Duo eros ornatus deserunt ne, duis possit mandamus ut mel, euismod suscipit ocurreret ea eam.</p>

<p>Qui et tation conceptam, ad usu vocibus albucius definitiones. Ea ludus tritani eligendi has. Ne audire urbanitas sed, ne his odio quot noluisse, justo doming sea ex. Iracundia forensibus in nam. Nibh singulis patrioque sit an, eros suscipiantur ea sit.</p>
</section>


<!--end main-->

<?php get_footer(); ?>