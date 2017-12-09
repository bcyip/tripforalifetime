<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>	
	<?php wp_head(); ?>   
</head>

<body <?php body_class(); ?>>
    <div class="hide">
        <p><a href="#content"><?php _e( 'Skip to content', 'the-columnist' ); ?></a></p>
    </div>
    
    <div id="headerwrap">
		<div class="longline">
            <nav>
    			<?php if(! get_theme_mod('columnist_show_social', '1') == 0){ get_template_part( 'bit/social-panel' ); } ?>
            </nav>
    	</div>
        
        <div id="logo">             
        	<?php if (get_theme_mod( 'custom_logo' ) !='') {
					the_custom_logo();
				} else { ?>
                	<h1 class="site-title"><a href="<?php echo esc_url( home_url()); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <?php } ?>	
        
        <?php if (get_theme_mod( 'custom_logo' ) =='') { ?>         
        	<?php $description = get_bloginfo( 'description', 'display' );
            
			if ( $description || is_customize_preview() ) : ?>
            	<p class="site-description"><?php echo esc_attr( $description );?></p> 
        <?php endif; } ?>      
                        
        </div>
        
        <div class="clear"></div>

        <div id="menutoggle"><a href="javascript:toggleByClass('hidder-99');"><span class="fa fa-ellipsis-h fa-3x"></span></a></div>
                
        <div class="longline" id="menuline">
        	<nav class="hidder-99">            
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                /*Only if there is menu in primary location*/
                 wp_nav_menu( array( 'container_class' => 'menutop','theme_location' => 'primary' ) );
                } ?>
        	</nav>
        </div>
    
    </div> <!--headerwrap-->
    
    <div class="tlo">