<?php
/**
 * The default template for displaying content
 * Used for both single and index/archive/search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
    <header class="heading">
		<?php
            if ( is_single() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
            endif;
        ?>
    </header>

	<?php if ( is_search() ) : ?>
        <div class="postcontent summary">
            <?php the_excerpt(); ?>
        </div>
	<?php else: ?> 
        <div class="postcontent">       
        
        <?php
        if ( !is_single()):    
        if ( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail(); ?>
            </a> <?php
        }; endif; 
        
        if ( is_single() & get_theme_mod('columnist_show_fimages', 0) == 1):  
        if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        }; endif; 
        ?>       
            
        <?php the_content(__( '<div class="more">Read More &rarr;</div>', 'the-columnist' ));?>
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
    <?php endif; ?>
           
    <?php if(! get_theme_mod('columnist_show_meta', 0) == 1): /*the general meta switch*/  
                    get_template_part( 'bit/postline-meta' );
    endif; ?>

</article>