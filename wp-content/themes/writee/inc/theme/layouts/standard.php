<?php 
/**************************************/
## Standard blog layout
/**************************************/

?>

<div class="standard-container">
	<?php
		query_posts('posts_per_page=5&offset=5');

		if(have_posts()):
			while(have_posts()): the_post();
				
				get_template_part('inc/theme/layouts/standard/content'); 
				
			endwhile;
			
		else:
			get_template_part('inc/theme/views/content-none'); 
		endif; 
		
	?>
</div>