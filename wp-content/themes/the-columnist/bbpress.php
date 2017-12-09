<?php get_header(); ?>

<div id="column" class="<?php echo get_theme_mod('columnist_bblayout', 'right');?>-sidebar">

<!--featured block start-->
	<?php if( get_theme_mod('columnist_featured4', 'sliderwidget') !== '0') { ?>
        <div id="featured" class="<?php echo get_theme_mod('columnist_featured4', 'sliderwidget');?>">
            <?php  get_template_part( 'bit/sliderwidget' ); ?>
        </div> 
    <?php	}; ?>
<!--featured block end-->


    <div id="sidewrap2" >
        <?php get_sidebar(); ?>
    </div>
    
    <!--bloglist-->
    <div id="bloglist">
        <div class="grid grid-1">
            <div class="grid-item">
            
            <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        
                        //post
                        get_template_part( 'content', 'page' );
                        //comments
                        if ( comments_open() || get_comments_number() ) :
                            comments_template( '', true );
                        endif;	
    
                    endwhile;
                           
                else :
    
                    get_template_part( 'content', 'none' );
    
                endif;
            ?>
            </div>
        </div>
    
    </div><!--bloglist end-->
     
</div><!-- column end -->

<?php get_footer(); ?>