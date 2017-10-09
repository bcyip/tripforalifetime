<?php 
/*************************************************************/
## Theme footer style 1. It's footer style, part of the theme.
/*************************************************************/


?>
<footer id="site-footer" class="site-footer">
	<?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3')): ?>
	<div class="site-footer-top">
		<div class="site-container">
			<div class="site-row">
			
				<div class="site-column-4">
					<?php dynamic_sidebar('footer-1'); ?>
				</div>
			
				<div class="site-column-4">
					<?php dynamic_sidebar('footer-2'); ?>
				</div>
			
				<div class="site-column-4">
					<?php dynamic_sidebar('footer-3'); ?>
				</div>
			
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div class="site-footer-bottom">
		<div class="site-container text-center">
			<?php 
				echo esc_html(get_theme_mod('wrt_copyright')); 
			?>

		</div>
	</div>
	
</footer><!-- / footer -->