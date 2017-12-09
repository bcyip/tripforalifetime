<?php get_header(); ?>

<div id="column" class="<?php echo get_theme_mod('columnist_bloglayout', 'right');?>-sidebar">

<!--featured block start-->
	<?php if( get_theme_mod('columnist_featured2', 'sliderwidget') !== '0' & get_theme_mod('columnist_featured_404', 1) == 1) { ?>
    
        <div id="featured" class="<?php echo get_theme_mod('columnist_featured2', 'sliderwidget');?>">
            <?php  get_template_part( 'bit/sliderwidget' ); ?>
        </div> 
    
    <?php	}; ?>
<!--featured block end-->

    <div id="sidewrap2" >
        <?php get_sidebar(); ?>
    </div>
    
    <div id="bloglist">
    
        <div class="grid grid-1">
            <div class="grid-item">
    
                <article <?php post_class(); ?>>
            
                    <header class="heading">
                        <h1 class="page-title"><?php _e( 'Not Found', 'the-columnist' ); ?></h1>
                    </header>
                    
                    <div class="postcontent">
                        <p><?php _e( 'It looks like nothing was found over here. Maybe try searching?', 'the-columnist' ); ?></p>
                        <?php get_search_form(); ?>
                    </div>
    
                </article>
                
            </div>
        </div>
    
    </div><!--bloglist end-->

</div><!-- column end -->

<?php get_footer(); ?>