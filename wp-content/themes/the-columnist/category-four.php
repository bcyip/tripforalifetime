<?php get_header();?>

<div id="column" class="<?php echo get_theme_mod('bloglayout', 'right');?>-sidebar">

<!--featured block start-->
	<?php if( get_theme_mod('columnist_featured3', 'sliderwidget') !== '0') { ?>
        <div id="featured" class="<?php echo get_theme_mod('columnist_featured3', 'sliderwidget');?>">
            <?php  get_template_part( 'bit/sliderwidget' ); ?>
        </div> 
    <?php	}; ?>
<!--featured block end-->


<div id="sidewrap2" >
	<?php get_sidebar(); ?>
</div>

<!--bloglist-->
<div id="bloglist">

<div id="mainheader">
    <h1 class="archive-tit">
		<?php printf( __( '<span class="fa fa-folder-open-o"></span> %s', 'the-columnist' ), single_cat_title( '', false ) ); ?>
    </h1>
</div>

<div class="grid grid-4">

		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
			?>	<div class="grid-item"> <?php
					get_template_part( 'content', get_post_format() );
?></div><?php
				endwhile;					
                    
			           
			else :
				get_template_part( 'content', 'none' );
			endif;
		?>
 </div>       
<?php			the_posts_pagination( array(
				'prev_text'          => __( '&lt;&lt;', 'the-columnist'),
				'next_text'          => __( '&gt;&gt;', 'the-columnist'),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'the-columnist' ) . ' </span>',
			) ); ?>        

</div><!--bloglist end-->

</div><!-- column end -->

<?php get_footer(); ?>