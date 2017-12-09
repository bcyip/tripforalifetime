<?php
/**
 * Contains methods for customizing the theme customization screen.
 * @link http://codex.wordpress.org/Theme_Customization_API
 */
class Columnist_Customize {
   /**
    * This hooks into 'customize_register' and allows
    * you to add new sections and controls to the Theme Customize screen.
    */
   public static function columnist_register ( $wp_customize ) {

        /* SECTIONS */
 		 
        // Container Width
        $wp_customize->add_section( 'columnist_width' , array(
        'title'      => __( 'Width of the Site', 'the-columnist' ),
        'priority'   => 20,
        ));

        // Color schemes
        $wp_customize->add_section( 'columnist_colorscheme_section' , array(
        'title'      => __( 'Color schemes', 'the-columnist' ),
        'priority'   => 25,
        ));
		  
        // Font Options
        $wp_customize->add_section( 'columnist_fonts' , array(
        'title'      => __( 'Fonts', 'the-columnist' ),
        'priority'   => 30,
        ));
		
        // Columnist Logo
        $wp_customize->add_section( 'columnist_logo' , array(
        'title'      => __( 'Header & Main Menu', 'the-columnist' ),
        'priority'   => 35,
		));		
						
        // Social Accounts
        $wp_customize->add_section( 'columnist_social_section' , array(
        'title'      => __( 'Social Accounts', 'the-columnist' ),
        'description' => __( '<strong>Enter full URL with http://</strong><br/> Leave empty to disable.', 'the-columnist' ),
        'priority'   => 40,
        ));
		
        // Layout
        $wp_customize->add_section( 'columnist_layout', array(
        'priority'       => 45,
        'title'          => __('Layout Options', 'the-columnist'),
        ));

        // Slider Settings
        $wp_customize->add_section( 'columnist_slider_section' , array(
        'title'      => __( 'Slider Settings', 'the-columnist' ),
        'priority'   => 50,
        ));
		
        // Featured section - Homepage
        $wp_customize->add_section( 'columnist_homepage' , array(
        'title'      => __( 'Homepage', 'the-columnist' ),
        'priority'   => 55,
        ));
		
        // Featured section - Archives
        $wp_customize->add_section( 'columnist_featured_section3' , array(
        'title'      => __( 'Archive Pages', 'the-columnist' ),
        'priority'   => 60,
        ));
		
        // Featured section - Posts and pages
        $wp_customize->add_section( 'columnist_featured_section2' , array(
        'title'      => __( 'Posts and Pages', 'the-columnist' ),
        'priority'   => 65,
        ));
		
	    // Featured section - bbPress and BuddyPress
        $wp_customize->add_section( 'columnist_featured_section4' , array(
        'title'      => __( 'bbPress, BuddyPress', 'the-columnist' ),
        'priority'   => 70,
        ));					

        // Meta Options
        $wp_customize->add_section( 'columnist_meta' , array(
        'title'      => __( 'Meta Options', 'the-columnist' ),
        'priority'   => 75,
        ));
		
		
		/* SETTINGS */
		
        /**
        * Archive titles
        */
        $wp_customize->add_setting( 'columnist_show_archivetitles', array(
            'sanitize_callback' => 'columnist_sanitize_checkbox',
			'default'        => 0
        ));

        $wp_customize->add_control(
          'columnist_show_archivetitles',
          array(
            'description' => __( 'Displays titles in category, author and calendar archives', 'the-columnist' ),
            'type' => 'checkbox',
            'label' => __( 'Show archive titles', 'the-columnist' ),
            'section' => 'columnist_featured_section3'
        ));
        // -----------------------------------------------------------------------------
		
        /**
        * Show/Hide featured image - single
        */
        $wp_customize->add_setting( 'columnist_show_fimages', array(
            'sanitize_callback' => 'columnist_sanitize_checkbox',
			'default'        => 0
        ));

        $wp_customize->add_control(
          'columnist_show_fimages',
          array(
            'description' => __( 'Shows the post featured image at the top, when viewing single post.', 'the-columnist' ),
            'type' => 'checkbox',
            'label' => __( 'Show featured image in post', 'the-columnist' ),
            'section' => 'columnist_featured_section2'
        ));
        // -----------------------------------------------------------------------------

        /**
        * Show/Hide meta for pages
        */
        $wp_customize->add_setting( 'columnist_show_meta_pages', array(
            'sanitize_callback' => 'columnist_sanitize_checkbox',
			'default' => 0
        ));

        $wp_customize->add_control(
          'columnist_show_meta_pages',
          array(
            'description' => __( 'If checked - no meta info for pages.', 'the-columnist' ),
            'type' => 'checkbox',
            'label' => __( 'HIDE ALL meta info for pages', 'the-columnist' ),
            'section' => 'columnist_meta'
		));
        // -----------------------------------------------------------------------------		
        
		/**
        * Show/Hide categories on posts
        */
        $wp_customize->add_setting( 'columnist_show_cat', array(
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_checkbox',
			'default' => 1
        ));

        $wp_customize->add_control(
          'columnist_show_cat',
          array(
            'description' => __( 'Hide categories in post meta?', 'the-columnist' ),
            'type' => 'checkbox',
            'label' => __( 'Hide categories', 'the-columnist' ),
            'section' => 'columnist_meta',
        ));
        // -----------------------------------------------------------------------------
	
		/**
        * Featured type - homepage
        */
        $wp_customize->add_setting('columnist_featured', array(
            'default'        => 'sliderwidget',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_featured'
            ));

        $wp_customize->add_control('columnist_featured', array(
            'label'      => __('Featured section on homepage', 'the-columnist'),
            'section'    => 'columnist_homepage',
            'settings'   => 'columnist_featured',
            'description' => __('Select how featured section will look like.', 'the-columnist'),
            'type'       => 'select',
            'choices'    => array(
				'0' => __('None', 'the-columnist'),			
                'sliderwidget' => __('Narrow slider', 'the-columnist'),
                'sliderwide' => __('Full-width slider', 'the-columnist'),
				'widgetnarrow' => __('Narrow two-column widgets', 'the-columnist'),
				'justwidget' => __('Three-column widgets', 'the-columnist')
                ),
        ));
        // -----------------------------------------------------------------------------
        
		/**
        * Show/Hide News heading
        */
        $wp_customize->add_setting( 'columnist_show_news_heading', array(
            'sanitize_callback' => 'columnist_sanitize_checkbox',
            'default'        => 1
        ));

        $wp_customize->add_control(
          'columnist_show_news_heading',
          array(
            'description' => __( 'Homepage, above recent posts', 'the-columnist' ),
            'type' => 'checkbox',
            'label' => __( 'Show main section heading', 'the-columnist' ),
            'section' => 'columnist_homepage',
        ));
        // -----------------------------------------------------------------------------
        
		/**
        * Show/Hide RSS Link
        */
        $wp_customize->add_setting( 'columnist_show_rss', array(
            'sanitize_callback' => 'columnist_sanitize_checkbox',
            'default'        => 1
        ));

        $wp_customize->add_control(
          'columnist_show_rss',
          array(
            'description' => __( 'Near the News Heading', 'the-columnist' ),
            'type' => 'checkbox',
            'label' => __( 'Show RSS link', 'the-columnist' ),
            'section' => 'columnist_homepage',
        ));
        // -----------------------------------------------------------------------------		
	
		/**
        * Main section heading
        */
        $wp_customize->add_setting('columnist_news_heading', array(
            'default'        => 'Latest News',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'transport'      => 'postMessage',
            'sanitize_callback' => 'columnist_sanitize_text',
            ));

        $wp_customize->add_control('columnist_news_heading', array(
            'label'      => __('Main section heading', 'the-columnist'),
            'section'    => 'columnist_homepage',
            'settings'   => 'columnist_news_heading'
        ));
        // ----------------------------------------------------------------------------- 

  		/**
        * Homepage grid
        */
        $wp_customize->add_setting('columnist_homepage_gridwidth', array(
            'default'        => '2',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_number',
        ));

        $wp_customize->add_control('columnist_homepage_gridwidth', array(
            'label'      => __('Number of columns in latest posts view', 'the-columnist'),
            'section'    => 'columnist_homepage',
            'settings'   => 'columnist_homepage_gridwidth',
            'description' => '',
            'type'       => 'radio',
            'choices'    => array(
             	'1' => '1',
             	'2' => '2',
             	'3' => '3',
             	'4' => '4'
                ),
        ));
        // -----------------------------------------------------------------------------  

		/**
        * Featured type - posts and pages
        */
        $wp_customize->add_setting('columnist_featured2', array(
            'default'        => 'sliderwidget',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_featured'
            ));

        $wp_customize->add_control('columnist_featured2', array(
            'label'      => __('Featured section on pages/posts', 'the-columnist'),
            'section'    => 'columnist_featured_section2',
            'settings'   => 'columnist_featured2',
            'description' => __('Select how featured section will look like.', 'the-columnist'),
            'type'       => 'select',
            'choices'    => array(
				'0' => __('None', 'the-columnist'),			
                'sliderwidget' => __('Narrow slider', 'the-columnist'),
                'sliderwide' => __('Full-width slider', 'the-columnist'),
				'widgetnarrow' => __('Narrow two-column widgets', 'the-columnist'),
				'justwidget' => __('Three-column widgets', 'the-columnist')
                ),
        ));		
        // -----------------------------------------------------------------------------				

		/**
        * Display featured section on search results page (search.php)
        */
        $wp_customize->add_setting('columnist_featured_search', array(
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'default'        => 1,
            'sanitize_callback' => 'columnist_sanitize_checkbox'
            ));

        $wp_customize->add_control('columnist_featured_search', array(
            'type' => 'checkbox',
            'label' => __( 'Display in Search Results', 'the-columnist' ),
            'section' => 'columnist_featured_section2',
            'std' => '1'
        ));
        // -----------------------------------------------------------------------------

		/**
        * Display featured section on 404 page (404.php)
        */
        $wp_customize->add_setting('columnist_featured_404', array(
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'default'        => 1,
            'sanitize_callback' => 'columnist_sanitize_checkbox'
            ));

        $wp_customize->add_control('columnist_featured_404', array(
            'type' => 'checkbox',
            'label' => __( 'Display on 404 page', 'the-columnist' ),
            'section' => 'columnist_featured_section2',
            'std' => '1'
        ));
        // -----------------------------------------------------------------------------

		/**
        * Featured type - archives
        */
        $wp_customize->add_setting('columnist_featured3', array(
            'default'        => 'sliderwidget',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_featured'
            ));

        $wp_customize->add_control('columnist_featured3', array(
            'label'      => __('Featured section on archive pages', 'the-columnist'),
            'section'    => 'columnist_featured_section3',
            'settings'   => 'columnist_featured3',
            'description' => __('Select how featured section will look like in tags/category/author an other post archives.', 'the-columnist'),
            'type'       => 'select',
            'choices'    => array(
				'0' => __('None', 'the-columnist'),			
                'sliderwidget' => __('Narrow slider', 'the-columnist'),
                'sliderwide' => __('Full-width slider', 'the-columnist'),
				'widgetnarrow' => __('Narrow two-column widgets', 'the-columnist'),
				'justwidget' => __('Three-column widgets', 'the-columnist')	
                ),
        ));		
        // -----------------------------------------------------------------------------	
  	
		/**
        * Archive grid
        */
        $wp_customize->add_setting('columnist_archive_gridwidth', array(
            'default'        => '2',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_number',
        ));

        $wp_customize->add_control('columnist_archive_gridwidth', array(
            'label'      => __('Number of columns in archive view', 'the-columnist'),
            'section'    => 'columnist_featured_section3',
            'settings'   => 'columnist_archive_gridwidth',
            'description' => '',
            'type'       => 'radio',
            'choices'    => array(
             	'1' => '1',
             	'2' => '2',
             	'3' => '3',
             	'4' => '4'
                ),
        ));
        // -----------------------------------------------------------------------------  

		/**
        * Featured type - bbPress and BuddyPress
        */
        $wp_customize->add_setting('columnist_featured4', array(
            'default'        => 'sliderwidget',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_featured'
            ));

        $wp_customize->add_control('columnist_featured4', array(
            'label'      => __('Featured section in bbPress/ BuddyPress', 'the-columnist'),
            'section'    => 'columnist_featured_section4',
            'settings'   => 'columnist_featured4',
            'description' => __('Select how featured section will look like on bbPress and BuddyPress pages.', 'the-columnist'),
            'type'       => 'select',
            'choices'    => array(
				'0' => __('None', 'the-columnist'),			
                'sliderwidget' => __('Narrow slider', 'the-columnist'),
                'sliderwide' => __('Full-width slider', 'the-columnist'),
				'widgetnarrow' => __('Narrow two-column widgets', 'the-columnist'),
				'justwidget' => __('Three-column widgets', 'the-columnist')		
                ),
        ));		
        // -----------------------------------------------------------------------------
		
		/**
        * Select category for slider
		*/
        require_once 'category-dropdown.php';
        $wp_customize->add_setting( 'columnist_slider_category', array(
            'default'        => '-999',
            'sanitize_callback' => 'columnist_sanitize_text'			
        ) );
        $wp_customize->add_control( new Columnist_Category_Dropdown_Custom_Control( $wp_customize, 'columnist_category_dropdown_setting', array(
            'label'   => 'Featured Category',
            'section' => 'columnist_slider_section',
            'settings'   => 'columnist_slider_category',
            'priority' => 3
        ) ) );
        // -----------------------------------------------------------------------------				

  		/*
        * Number of slider's post
        */
        $wp_customize->add_setting('columnist_slider_number', array(
            'default'        => '4',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_number2',
        ));

        $wp_customize->add_control('columnist_slider_number', array(
            'label'      => __('Number of posts to slide', 'the-columnist'),
            'section'    => 'columnist_slider_section',
            'settings'   => 'columnist_slider_number',
            'description' => '',
            'type'       => 'select',
            'choices'    => array(
             	'1' => '1',
             	'2' => '2',
             	'3' => '3',
             	'4' => '4',
             	'5' => '5',
             	'6' => '6',
             	'7' => '7',
             	'8' => '8',
             	'9' => '9',
             	'10' => '10'				
                ),
        ));
        // -----------------------------------------------------------------------------				
		
		/**
        * Slider autoplay toggle
        */
        $wp_customize->add_setting('columnist_autoplay_toggle', array(
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'default'        => 0,
            'sanitize_callback' => 'columnist_sanitize_checkbox'
            ));

        $wp_customize->add_control('columnist_autoplay_toggle', array(
            'type' => 'checkbox',
            'label' => __( 'Enable autoplay', 'the-columnist' ),
            'section' => 'columnist_slider_section'
        ));
        // -----------------------------------------------------------------------------

	    /**
        * Autoplay delay
        */
        $wp_customize->add_setting('columnist_autoplay_delay', array(
            'default'        => '2000',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_text'
            ));

        $wp_customize->add_control('columnist_autoplay_delay', array(
            'label'      => __('Autoplay delay', 'the-columnist'), 
            'description' => __('Delay (1000 = 1s)', 'the-columnist'),
            'section'    => 'columnist_slider_section',
            'settings'   => 'columnist_autoplay_delay'
        ));
        // -----------------------------------------------------------------------------

		/**
        * Featured slider transition type
        */
        $wp_customize->add_setting('columnist_slider_trans', array(
            'default'        => 'simple',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
          	'sanitize_callback' => 'columnist_sanitize_trans'
            ));

        $wp_customize->add_control('columnist_slider_trans', array(
            'label'      => __('Autoplay transition type', 'the-columnist'),
            'section'    => 'columnist_slider_section',
            'settings'   => 'columnist_slider_trans',
            'description' => __('How slides change during autoplay', 'the-columnist'),
            'type'       => 'select',
            'choices'    => array(
				'simple' => __('Simple', 'the-columnist'),
				'slidedown' => __('Slide down', 'the-columnist'),
				'rotate' => __('Rotate', 'the-columnist'),
				'chessreplace' => __('Chess replace', 'the-columnist'),
				'blinds' => __('Blinds', 'the-columnist'),
				'fadecorners' => __('Fade corners', 'the-columnist'),
				'magic' => __('Magic', 'the-columnist'),
				'squares' => __('Squares', 'the-columnist'),
				'flutterinside' => __('Flutter inside', 'the-columnist'),
				'collapsestairs' => __('Collapse stairs', 'the-columnist'),
				'collapsecircle' => __('Collapse circle', 'the-columnist'),
				'collapsezigzag' => __('Collapse zigzag', 'the-columnist'),
				'clipchessin' => __('Clip chess in', 'the-columnist'),
				'expandstairs' => __('Expand stairs', 'the-columnist'),
				'horizontalblinds' => __('Horizontal blinds', 'the-columnist'),
				'horizontalfade' => __('Horizontal fade', 'the-columnist'),
				'verticalstripe' => __('Vertical stripe', 'the-columnist'),
				'floatright' => __('Float right', 'the-columnist')
                ),
        ));
        // -----------------------------------------------------------------------------
  
	    /**
        * Show/Hide social panel in header
        */
        $wp_customize->add_setting( 'columnist_show_social', array(
		    'default'        	=> '1',
            'sanitize_callback' => 'columnist_sanitize_checkbox'
        ));

        $wp_customize->add_control('columnist_show_social',
          array(
            'type' => 'checkbox',
            'label' => __( 'Show social links and search in header', 'the-columnist' ),
            'section' => 'columnist_social_section',
            'settings'   => 'columnist_show_social',
            'std' => '1',
        ));
        // -----------------------------------------------------------------------------
	  
	    /**
        Facebook
        */
        $wp_customize->add_setting('columnist_social_facebook', array(
            'default'        => '',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_text',
            ));

        $wp_customize->add_control('columnist_social_facebook', array(
            'label'      => __('Facebook', 'the-columnist'),
            'section'    => 'columnist_social_section',
            'settings'   => 'columnist_social_facebook'
        ));
        // ----------------------------------------------------------------------------- 	

	    /**
        Instagram
        */
        $wp_customize->add_setting('columnist_social_instagram', array(
            'default'        => '',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_text',
            ));

        $wp_customize->add_control('columnist_social_instagram', array(
            'label'      => __('Instagram', 'the-columnist'),
            'section'    => 'columnist_social_section',
            'settings'   => 'columnist_social_instagram'
        ));
        // ----------------------------------------------------------------------------- 	

	    /**
        Youtube
        */
        $wp_customize->add_setting('columnist_social_youtube', array(
            'default'        => '',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_text',
            ));

        $wp_customize->add_control('columnist_social_youtube', array(
            'label'      => __('YouTube', 'the-columnist'),
            'section'    => 'columnist_social_section',
            'settings'   => 'columnist_social_youtube'
        ));
        // -----------------------------------------------------------------------------

	    /**
        Twitter
        */
        $wp_customize->add_setting('columnist_social_twitter', array(
            'default'        => '',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_text',
            ));

        $wp_customize->add_control('columnist_social_twitter', array(
            'label'      => __('Twitter', 'the-columnist'),
            'section'    => 'columnist_social_section',
            'settings'   => 'columnist_social_twitter'
        ));
        // -----------------------------------------------------------------------------		

	    /**
        Google plus
        */
        $wp_customize->add_setting('columnist_social_googleplus', array(
            'default'        => '',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_text',
            ));

        $wp_customize->add_control('columnist_social_googleplus', array(
            'label'      => __('Google +', 'the-columnist'),
            'section'    => 'columnist_social_section',
            'settings'   => 'columnist_social_googleplus'
        ));
        // -----------------------------------------------------------------------------
		
	    /**
       	Pinterest
        */
        $wp_customize->add_setting('columnist_social_pinterest', array(
            'default'        => '',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_text',
            ));

        $wp_customize->add_control('columnist_social_pinterest', array(
            'label'      => __('Pinterest', 'the-columnist'),
            'section'    => 'columnist_social_section',
            'settings'   => 'columnist_social_pinterest'
        ));
        // -----------------------------------------------------------------------------
		
	    /**
        Vk.com
        */
        $wp_customize->add_setting('columnist_social_vk', array(
            'default'        => '',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_text',
            ));

        $wp_customize->add_control('columnist_social_vk', array(
            'label'      => __('Vk.com', 'the-columnist'),
            'section'    => 'columnist_social_section',
            'settings'   => 'columnist_social_vk'
        ));
        // -----------------------------------------------------------------------------		

				
        /**
        * Hide meta for posts
        */
        $wp_customize->add_setting( 'columnist_show_meta', array(
            'sanitize_callback' => 'columnist_sanitize_checkbox',
			'default' => 0
        ));

        $wp_customize->add_control(
          'columnist_show_meta',
          array(
            'description' => __( 'Both single and blog views', 'the-columnist' ),
            'type' => 'checkbox',
            'label' => __( 'HIDE ALL meta info for posts', 'the-columnist' ),
            'section' => 'columnist_meta'
        ));
        // -----------------------------------------------------------------------------

        /**
        * Hide meta for pages
        */
        $wp_customize->add_setting( 'columnist_show_meta_pages', array(
            'sanitize_callback' => 'columnist_sanitize_checkbox',
			'default' => 0
        ));

        $wp_customize->add_control(
          'columnist_show_meta_pages',
          array(
            'description' => __( 'If checked - no meta info for pages.', 'the-columnist' ),
            'type' => 'checkbox',
            'label' => __( 'HIDE ALL meta info for pages', 'the-columnist' ),
            'section' => 'columnist_meta'
        ));
        // -----------------------------------------------------------------------------			
 
        /**
        * Show/Hide date on posts
        */
        $wp_customize->add_setting( 'columnist_show_date', array(
            'sanitize_callback' => 'columnist_sanitize_checkbox',
			'default' => 1
        ));

        $wp_customize->add_control(
          'columnist_show_date',
          array(
            'description' => __( 'Hide date in post meta?', 'the-columnist' ),
            'type' => 'checkbox',
            'label' => __( 'Hide date', 'the-columnist' ),
            'section' => 'columnist_meta',
        ));
        // -----------------------------------------------------------------------------
		
 		/**
        * Show/Hide author on posts
        */
        $wp_customize->add_setting( 'columnist_autho', array(
            'sanitize_callback' => 'columnist_sanitize_checkbox',
			'default' => 1
        ));

        $wp_customize->add_control(
          'columnist_autho',
          array(
            'description' => __( 'Hide the author in post meta?', 'the-columnist' ),
            'type' => 'checkbox',
            'label' => __( 'Hide author', 'the-columnist' ),
            'section' => 'columnist_meta',
        ));
        // -----------------------------------------------------------------------------
		
        /**
        * Show/Hide categories on posts
        */
        $wp_customize->add_setting( 'columnist_show_cat', array(
            'sanitize_callback' => 'columnist_sanitize_checkbox',
			'default' => 1
        ));

        $wp_customize->add_control(
          'columnist_show_cat',
          array(
            'description' => __( 'Hide categories in post meta?', 'the-columnist' ),
            'type' => 'checkbox',
            'label' => __( 'Hide categories', 'the-columnist' ),
            'section' => 'columnist_meta'
        ));
        // -----------------------------------------------------------------------------

	    /**
        * Show/Hide tags on posts
        */
        $wp_customize->add_setting( 'columnist_show_tags', array(
            'sanitize_callback' => 'columnist_sanitize_checkbox',
			'default' => 1
        ));

        $wp_customize->add_control(
          'columnist_show_tags',
          array(
            'description' =>  __( 'Hide tags in post meta?', 'the-columnist' ),
            'type' => 'checkbox',
            'label' => __( 'Hide tags', 'the-columnist' ),
            'section' => 'columnist_meta',
        ));
        // -----------------------------------------------------------------------------
	    
		/**
        * Show/Hide comment count on posts
        */
        $wp_customize->add_setting( 'columnist_show_comm', array(
            'sanitize_callback' => 'columnist_sanitize_checkbox',
			'default' => 1
        ));

        $wp_customize->add_control(
          'columnist_show_comm',
          array(
            'description' => __( 'Hide the comment count in post meta?', 'the-columnist' ),
            'type' => 'checkbox',
            'label' => __( 'Hide comment link', 'the-columnist' ),
            'section' => 'columnist_meta',
        ));
        // -----------------------------------------------------------------------------

		/**
        * Predefined Color Scheme
        */
        $wp_customize->add_setting('columnist_colorscheme', array(
            'default'        => 'cyan',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_colorscheme'
            ));

        $wp_customize->add_control('columnist_colorscheme', array(
            'label'      => __('Blog color scheme', 'the-columnist'),
            'section'    => 'columnist_colorscheme_section',
            'settings'   => 'columnist_colorscheme',
            'type'       => 'radio',
            'choices'    => array(
				'cyan' => __('default cyan', 'the-columnist'),			
                'black' => __('professional black', 'the-columnist'),
                'blue' => __('suave blue', 'the-columnist'),
				'white' => __('old timer white', 'the-columnist')
                ),
        ));		
        // -----------------------------------------------------------------------------

		/*
        * Blog Layout
        */
        $wp_customize->add_setting('columnist_bloglayout', array(
            'default'        => 'right',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_layout'
        ));

        $wp_customize->add_control('columnist_option_bloglayout', array(
            'label'      => __('Blog layout', 'the-columnist'),
            'section'    => 'columnist_layout',
            'settings'   => 'columnist_bloglayout',
            'description' => '',
            'type'       => 'radio',
            'choices'    => array(
                'left' => __('Left Sidebar', 'the-columnist'),
                'full_width' => __('Full Width / No sidebar', 'the-columnist'),
                'right'   => __('Right Sidebar', 'the-columnist')
                ),
        ));
        // -----------------------------------------------------------------------------
        
		/**
        * Post Layout
        */
        $wp_customize->add_setting('columnist_postlayout', array(
            'default'        => 'right',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_layout',
        ));

        $wp_customize->add_control('columnist_option_postlayout', array(
            'label'      => __('Single post layout', 'the-columnist'),
            'section'    => 'columnist_layout',
            'settings'   => 'columnist_postlayout',
            'description' => '',
            'type'       => 'radio',
            'choices'    => array(
                'left' => __('Left Sidebar', 'the-columnist'),
                'full_width' => __('Full Width / No sidebar', 'the-columnist'),
                'right'   => __('Right Sidebar', 'the-columnist')
                ),
        ));
        // -----------------------------------------------------------------------------
       
	    /**
        * Page Layout
        */
        $wp_customize->add_setting('columnist_pagelayout', array(
            'default'        => 'right',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_layout',
        ));

        $wp_customize->add_control('columnist_option_pagelayout', array(
            'label'      => __('Single page layout', 'the-columnist'),
            'section'    => 'columnist_layout',
            'settings'   => 'columnist_pagelayout',
            'description' => '',
            'type'       => 'radio',
            'choices'    => array(
                'left' => __('Left Sidebar', 'the-columnist'),
                'full_width' => __('Full Width / No sidebar', 'the-columnist'),
                'right'   => __('Right Sidebar', 'the-columnist')
                ),
        ));
        // -----------------------------------------------------------------------------

	    /**
        * bbPress, BuddyPress Layout
        */
        $wp_customize->add_setting('columnist_bblayout', array(
            'default'        => 'right',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_layout',
        ));

        $wp_customize->add_control('columnist_option_bblayout', array(
            'label'      => __('BuddyPress, bbPress layout', 'the-columnist'),
            'section'    => 'columnist_layout',
            'settings'   => 'columnist_bblayout',
            'description' => '',
            'type'       => 'radio',
            'choices'    => array(
                'left' => __('Left Sidebar', 'the-columnist'),
                'full_width' => __('Full Width / No sidebar', 'the-columnist'),
                'right'   => __('Right Sidebar', 'the-columnist')
                ),
        ));
        // -----------------------------------------------------------------------------
        
		/**
        * Site width
        */
        $wp_customize->add_setting('columnist_container_width', array(
            'default'        => '1400px',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_width',
            ));

        $wp_customize->add_control('columnist_option_container_width', array(
            'label'      => __('Width', 'the-columnist'),
            'section'    => 'columnist_width',
            'settings'   => 'columnist_container_width',
            'description' => __('Choose max site width (in pixels). It changes how the site looks on wider screens.', 'the-columnist'),
            'type'       => 'radio',
            'choices'    => array(
                '980px' => __('980', 'the-columnist'),
                '1280px' => __('1280', 'the-columnist'),
                '1400px' => __('1400', 'the-columnist'),
                '1600px' => __('1600', 'the-columnist'),
                '1920px' => __('1920', 'the-columnist')
                ),
        ));
        // -----------------------------------------------------------------------------
       
	    /**
        * Headings
        */
        $wp_customize->add_setting('columnist_headings_font', array(
            'default'        => 'Open Sans',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_fontfamily',
            ));

        $wp_customize->add_control('columnist_headings_font', array(
            'label'      => __('Heading Font', 'the-columnist'),
            'section'    => 'columnist_fonts',
            'settings'   => 'columnist_headings_font',
            'description' => __('Pick a font for headings.', 'the-columnist'),
            'type'       => 'select',
            'choices'    => array(
                'sans-serif' => '---STANDARD--------',
                'Arial' => 'Arial',
                'Times New Roman' => 'Times New Roman',
                'Tahoma' => 'Tahoma',
                'Trebuchet MS' => 'Trebuchet MS',
                'Verdana' => 'Verdana',
                'Garamond' => 'Garamond',
                'Georgia' => 'Georgia',
                'Impact' => 'Impact',
                'Monospace' => 'Monospace',
                'serif' => '---POPULAR---------',
                'Open Sans' => 'Open Sans *',
                'Noto Sans' => 'Noto Sans *',	
                'Noto Serif' => 'Noto Serif *',
				'PT Sans' => 'PT Sans *',
				'PT Sans Narrow' => 'PT Sans Narrow *',
				'Roboto' => 'Roboto *',
				'cursive' => '---OTHER-----------',
				'Anton' => 'Anton',
				'Bangers' => 'Bangers',
				'Lato' => 'Lato',
                'Lobster' => 'Lobster *',
				'Yanone Kaffeesatz' => 'Yanone Kaffeesatz'
				),
        ));
        // -----------------------------------------------------------------------------	

        /**
        * Headings weight
        */
        $wp_customize->add_setting('columnist_headings_weight', array(
            'default'        => '400',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_weight',
            ));

        $wp_customize->add_control('columnist_headings_weight', array(
            'label'      => __('Heading Weight', 'the-columnist'),
            'section'    => 'columnist_fonts',
            'settings'   => 'columnist_headings_weight',
            'description' => __('Bold or normal headings?', 'the-columnist'),
            'type'       => 'select',
            'choices'    => array(
                '400' => __('Normal', 'the-columnist'),
                '800' => __('Bold', 'the-columnist'),
                ),
            ));	
        // -----------------------------------------------------------------------------

      
	    /**
        * Body Font
        */
        $wp_customize->add_setting('columnist_body_font', array(
            'default'        => 'Open Sans',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_fontfamily',
            ));

        $wp_customize->add_control('columnist_body_font', array(
            'label'      => __('Body Font', 'the-columnist'),
            'section'    => 'columnist_fonts',
            'settings'   => 'columnist_body_font',
            'description' => __('Pick a font for body text.', 'the-columnist'),
            'type'       => 'select',
            'choices'    => array(
                'sans-serif' => '---STANDARD--------',
                'Arial' => 'Arial',
                'Times New Roman' => 'Times New Roman',
                'Tahoma' => 'Tahoma',
                'Trebuchet MS' => 'Trebuchet MS',
                'Verdana' => 'Verdana',
                'Garamond' => 'Garamond',
                'Georgia' => 'Georgia',
                'Impact' => 'Impact',
                'Monospace' => 'Monospace',
                'serif' => '---POPULAR---------',
                'Open Sans' => 'Open Sans *',
                'Noto Sans' => 'Noto Sans *',	
                'Noto Serif' => 'Noto Serif *',
				'PT Sans' => 'PT Sans *',
				'PT Sans Narrow' => 'PT Sans Narrow *',
				'Roboto' => 'Roboto *',
				'cursive' => '---OTHER-----------',
				'Anton' => 'Anton',
				'Bangers' => 'Bangers',
				'Lato' => 'Lato',
                'Lobster' => 'Lobster *',
				'Yanone Kaffeesatz' => 'Yanone Kaffeesatz'
				),
            ));	
        // -----------------------------------------------------------------------------	

        /**
        * Include Cyrillic font variant
        */
        $wp_customize->add_setting( 'columnist_cyrillic', array(
            'sanitize_callback' => 'columnist_sanitize_checkbox',
			'default' => '0'
        ));

        $wp_customize->add_control(
          'columnist_cyrillic',
          array(
            'description' => __( 'Only fonts marked with asterix support cyrillic languages.', 'the-columnist' ),
            'type' => 'checkbox',
            'label' => __( 'Include cyrillic subset for fonts?', 'the-columnist' ),
            'section' => 'columnist_fonts'
        ));
        // -----------------------------------------------------------------------------
		        
	    /**
        Logo (or title) alignment
        */
        $wp_customize->add_setting('columnist_logo_alignment', array(
            'default'        => 'center',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'columnist_sanitize_align',
            ));

        $wp_customize->add_control('columnist_logo_alignment', array(
            'label'      => __('Logo alignment', 'the-columnist'),
            'section'    => 'columnist_logo',
            'settings'   => 'columnist_logo_alignment',
            'description' => __( 'Where will the logo/title be?', 'the-columnist' ),
            'type'       => 'radio',
            'choices'    => array(
                'left' => __( 'Left', 'the-columnist' ),
                'center' => __( 'Center', 'the-columnist' ),
                'right' => __( 'Right', 'the-columnist' ),
                ),
            ));	
        // -----------------------------------------------------------------------------
		       
	    /**
        footer copyright text
        */
        $wp_customize->add_setting('columnist_footer_copyright', array(
            'default'        => '',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'transport'      => 'refresh',
            'sanitize_callback' => 'columnist_sanitize_text',
            ));

        $wp_customize->add_control('columnist_footer_copyright', array(
            'label'      => __('Footer Copyright', 'the-columnist'),
            'section'    => 'title_tagline',
            'settings'   => 'columnist_footer_copyright'
        ));
        // -----------------------------------------------------------------------------           

		//Upgrade to PRO Section
		$wp_customize->add_section( 'columnist_pro_add', array(
			  'priority'       => 1001,
			  'title'          => __('Upgrade to Columnist Pro', 'the-columnist'),
			  'description'    => __('<p>
			  Do you like The Columnist theme? <br />Buy Columnist Pro to support the developer and get even more exciting features:</p>
				<ul style="font-weight:bold;padding-left:10px;">
				<li>Premium widget pack. Pixel perfect and designed to look great with your theme.</li>
				<li>Ability to fully customise all the colors</li>
				<li>Breadcrumbs navigation support</li>
				<li>More Google Fonts for you to choose</li>
				<li>Lifetime updates for Columnist Pro theme</li>
				<li>Premium support for 1 year!</li>			
				</ul>		  
			  <h2 style="padding-left:10px;">
			  <a href="http://www.poisonedcoffee.com/columnistpro/">Read More</a>
			  </h2>
			  <h2 style="padding-left:10px;"><a href="http://www.poisonedcoffee.com/forums/">Support forums</a>
			  </h2>
			  ', 'the-columnist'),
			));
		// -----------------------------------------------------------------------------
		$wp_customize->add_setting('columnist_pro_info', array(
          'sanitize_callback' => 'columnist_no_sanitize',
		  'type' => 'info_control',
		  'capability' => 'edit_theme_options',
		  )
		);
		$wp_customize->add_control( 'columnist_pro_info_control', array(
			'section' => 'columnist_pro_add',
			'settings' => 'columnist_pro_info',
			'priority' => 10,
            'type'       => 'radio',
			'style' => 'display: none;',
			)
		);
		// ----------------------------------------------------------------------------- 
		      
		// Stuff that uses live preview JS
        $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
        $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
        $wp_customize->get_setting( 'columnist_news_heading' )->transport = 'postMessage';   
   }

    /**
    * This will output the custom WordPress settings to the live theme's WP head. Used by hook: 'wp_head'
    */
	
   public static function columnist_header_output() {
      ?>
      <!--Customizer CSS--> 
      <style type="text/css">
            <?php 			
			if (get_theme_mod('columnist_show_date') == '1'){ ?>
                .s_date {display: none;} <?php }		
			if (get_theme_mod('columnist_show_tags') == '1'){ ?>
                .s_tags {display: none;} <?php } 
			if (get_theme_mod('columnist_show_cat') == '1'){ ?>
                .s_category {display: none;} <?php } 	
			if (get_theme_mod('columnist_show_comm') == '1'){ ?>
                .s_comm {display: none;} <?php } 		
			if (get_theme_mod('columnist_autho') == '1'){ ?>
                .s_auth {display: none;} <?php } 		
			if (get_theme_mod('columnist_show_archivetitles') == '0'){ ?>
                .archive-tit {display: none;} <?php } 				
//general
self::columnist_generate_css('#logo', 'text-align', 'columnist_logo_alignment'); /**/ 
self::columnist_generate_css('.tlo, #menuline > nav', 'max-width', 'columnist_container_width');/**/
//fonts
self::columnist_generate_css('body, input, button, textarea, .site-description,  #mainheader .archive-tit', 'font-family', 'columnist_body_font');
self::columnist_generate_css('h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, h1, h2, h3, h4, h5, h6, .site-description', 'font-family', 'columnist_headings_font');
self::columnist_generate_css('h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, h1, h2, h3, h4, h5, h6, .site-description', 'font-weight', 'columnist_headings_weight');

//color schemes (separate css for buddypress and bbpress per color)
	switch (get_theme_mod('columnist_colorscheme', 'cyan')) {
		  case 'cyan':
			break;
		  case 'black':
			wp_enqueue_style( 'columnist-black', get_template_directory_uri() . "/color-schemes/black.css");
			if(function_exists('is_bbpress') && is_bbpress()) { 
				wp_enqueue_style( 'columnist-black-bbpress', get_template_directory_uri() . "/color-schemes/black-bbpress.css");}
			if(function_exists('is_buddypress') && is_bbpress()) {
				wp_enqueue_style( 'columnist-black-buddypress', get_template_directory_uri() . "/color-schemes/black-buddypress.css");}
			break;
		  case 'blue':
			wp_enqueue_style( 'columnist-blue', get_template_directory_uri() . "/color-schemes/blue.css");
			if(function_exists('is_bbpress') && is_bbpress()) { 
				wp_enqueue_style( 'columnist-blue-bbpress', get_template_directory_uri() . "/color-schemes/blue-bbpress.css");}
			if(function_exists('is_buddypress') && is_bbpress()) {
				wp_enqueue_style( 'columnist-blue-buddypress', get_template_directory_uri() . "/color-schemes/blue-buddypress.css");}
			break;
		  case 'white':
			wp_enqueue_style( 'columnist-white', get_template_directory_uri() . "/color-schemes/white.css");
			if(function_exists('is_bbpress') && is_bbpress()) { 
				wp_enqueue_style( 'columnist-white-bbpress', get_template_directory_uri() . "/color-schemes/white-bbpress.css");}
			if(function_exists('is_buddypress') && is_bbpress()) {
				wp_enqueue_style( 'columnist-white-buddypress', get_template_directory_uri() . "/color-schemes/white-buddypress.css");}
			break;
	};?>
	
      </style> 
      <!--/Customizer CSS-->
<?php
   }
   
   /**
   Outputs the javascript needed to automate the live settings preview.
    */
   public static function columnist_live_preview() {
		wp_enqueue_script( 'columnist-theme-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array(  'jquery', 'customize-preview' ), '', true);
   }

    /**
	Generate a line of CSS for use in header output. If the setting ($mod_name) has no defined value, the CSS will not be output.
     */
   public static function columnist_generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {
	$return = '';
	$mod = esc_attr( get_theme_mod($mod_name) );
      if ( ! empty( $mod ) ) {
         $return = sprintf('%s { %s:%s; }',
            $selector,
            $style,
            $prefix.$mod.$postfix
         );
         if ( $echo ) {
            echo $return;
         }
      }
      return $return;
    }
}

// Setup the Theme Customizer settings and controls
add_action( 'customize_register' , array( 'columnist_Customize' , 'columnist_register' ) );
// Output custom CSS to live site
add_action( 'wp_head' , array( 'columnist_Customize' , 'columnist_header_output' ) );
// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init' , array( 'columnist_Customize' , 'columnist_live_preview' ) );
?>