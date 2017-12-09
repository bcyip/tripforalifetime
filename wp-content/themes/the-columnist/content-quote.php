<?php
/**
 * The default template for displaying quotation
 * Used for both single and index/archive/search. As Quotes are small, no need to show them as excerpts in search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
	<div class="postcontent">
    <span class="fa fa-3x fa-quote-left"></span>
			<?php the_content(__( '<div class="more">Read More &rarr;</div>', 'the-columnist' )); ?>
 		<?php
			if ( is_single() ) :
				the_title( '<p class="quote">&mdash; ', '</p>' );
			else :
				the_title( sprintf( '<p class="quote">&mdash; <a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' );
			endif;
		?>               
	</div>
                             
</article>

