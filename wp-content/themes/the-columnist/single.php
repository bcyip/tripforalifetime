<?php get_header(); ?>

<div id="column" class="<?php echo get_theme_mod('columnist_postlayout', 'right');?>-sidebar">

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
                ?> <?php					
                        //post
                        get_template_part( 'content', get_post_format() );
                        //comments
                        if ( comments_open() || get_comments_number() ) :
                            comments_template( '', true );
                        endif;	
                ?><?php
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