</div><!--.tlo-->

<div id="footer">
    <div class="tlo">
        <div class="sidebar">
        	<?php dynamic_sidebar( 'Footer' ); ?>
        </div>
                
    	<div class="copy">&copy; <?php echo date('Y'); ?> - <?php columnist_footer(); ?></div>
    
    </div>
    <?php wp_footer(); /* this is used by many Wordpress features and for plugins to work properly */ ?>

</div>
</body>
</html>