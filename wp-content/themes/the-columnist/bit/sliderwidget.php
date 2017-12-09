<?php 
/*This file creates the slider, don't forget the slider-init template*/
wp_register_script( 'columnist-slider-init', get_template_directory_uri() . "/js/slider-init.js", array( 'jquery' ));

if (get_theme_mod('columnist_autoplay_toggle', 0)== 1) {
	

$columnist_slideroptions = array(
    'delay'            => get_theme_mod("columnist_autoplay_delay", '2000'),
    'toggle' => 'true',
	'slidingType'=> get_theme_mod('columnist_slider_trans', 'slidedown')
	);
	
} else {
	
$columnist_slideroptions = array(
    'delay'            => '2000',
    'toggle' => 'false',
	'slidingType'=> 'slidedown'
	);
};

wp_localize_script( 'columnist-slider-init', 'columnistAutoplay', $columnist_slideroptions);
wp_enqueue_script( 'columnist-slider-init');

?>

<div id="slidebag">

    <div id="sliderbig">
        <div id="slider1_container">
            <div u="slides" id="slides">
                     
            <?php 
            // the query
            $the_query = new WP_Query( array( 'cat' => get_theme_mod('columnist_slider_category', -999), 'posts_per_page'=> get_theme_mod('columnist_slider_number', '4')) ); ?>
            
            <?php if ( $the_query->have_posts() ) : ?>
            
            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
			if(is_sticky()) continue;?>
                        
            <div>   
				<?php if ( has_post_thumbnail() ) { ?> <img u="image" src="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())));  ?>" />
                <?php } ?>
                <div u="caption" t="caption-transition-name" class="slidecaption">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php echo get_the_excerpt(); ?></p>
                </div>
            </div>        
                       
                <?php endwhile; ?>
            
                <?php wp_reset_postdata(); ?>
            
            <?php else : ?>
               <p class="big"><?php _e( 'Sorry, no posts in the category selected for the slider.', 'the-columnist' ); ?></p>
            <?php endif; ?>  
            
                    <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
                    <span u="arrowleft" class="jssora14l"></span>
                    <span u="arrowright" class="jssora14r"></span>
                    
                    <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
                    <div u="navigator" class="jssorb14">
                        <div u="prototype"></div>
                    </div>
                    
            </div> <!--slides-->
        </div> <!--slider1_container-->
    </div> <!--sliderbig-->
</div> <!--sliderbag-->

<div id="sidewrap3">
    <div class="sidebar">
        <?php dynamic_sidebar( 'Sidebar Featured' ); ?>
    </div>
</div>