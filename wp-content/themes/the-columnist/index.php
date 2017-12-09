<?php get_header();?>

<div id="column" class="<?php echo get_theme_mod('columnist_bloglayout', 'right');?>-sidebar">

    <!--featured block start-->
    <?php if( get_theme_mod('columnist_featured', 'sliderwidget') !== '0') { ?>
        <div id="featured" class="<?php echo get_theme_mod('columnist_featured', 'sliderwidget');?>">
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
           <h2>
        <?php if(! get_theme_mod('columnist_show_news_heading', 1) == 0){
              	echo esc_attr(get_theme_mod('columnist_news_heading', 'Newest posts'));
				if(! get_theme_mod('columnist_show_rss', 1) == 0){ ?>    
            		<a href="<?php bloginfo('rss2_url');?>"> <span title="<?php _e( 'Subscribe', 'the-columnist' ); ?>" class="fa fa-rss"></a></span><?php }
        		} ?>
           </h2>
        </div>
    
        <div class="grid grid-<?php echo get_theme_mod('columnist_homepage_gridwidth', '2'); ?>">
                <?php
                    $args = array('posts_per_page'=>5,'offset' => 4);
                    $latestpost = new WP_Query( $args );
                    if ( have_posts() ) :
                        while ( $latestpost->have_posts()) : $latestpost->the_post(); # have_posts() ) : the_post();
                    ?>	<div class="grid-item">
                            <header class="heading">
                                <?php
                                if ( is_single() ) :
                                    the_title( '<h1 class="entry-title">', '</h1>' );
                                else :
                                    the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                                endif;
                                ?>
                            </header>
                            <div class="postcontent">

                                <?php
                                if ( !is_single()):
                                    if ( has_post_thumbnail() ) { ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php the_post_thumbnail('medium_large'); ?>
                                        </a> <?php
                                    }; endif;

                                if ( is_single() & get_theme_mod('columnist_show_fimages', 0) == 1):
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail();
                                    }; endif;
                                ?>

                                <?php the_excerpt() ;?>
                                <?php
                                wp_link_pages( array(
                                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'the-columnist' ) . '</span>',
                                    'after'       => '</div>',
                                    'link_before' => '<span class="page-numbers">',
                                    'link_after'  => '</span>',
                                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'the-columnist' ) . ' </span>%',
                                    'separator'   => '<span class="screen-reader-text">, </span>',
                                ) );
                                ?>
                            </div>
                            <?php if(! get_theme_mod('columnist_show_meta', 0) == 1): /*the general meta switch*/
                                get_template_part( 'bit/postline-meta' );
                            endif; ?>
        </div><?php
                        endwhile;					
                            
                               
                    else :
                        get_template_part( 'content', 'none' );
                    endif;
                ?>
         </div>       
        <?php 
		the_posts_pagination( array(
                        'prev_text'          => __( '&lt;&lt;', 'the-columnist'),
                        'next_text'          => __( '&gt;&gt;', 'the-columnist'),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'the-columnist' ) . ' </span>',
              ) ); 
		?>        
    
    </div><!--bloglist end-->

</div><!-- column end -->

<?php get_footer(); ?>