<?php
/* Sanitize Checkbox */
function columnist_sanitize_checkbox( $input ) {
    if ( $input ) {
    $output = '1';
    } else {
    $output = false;
    }
    return $output;
}
// -----------------------------------------------------------------------------

/* Sanitize layout options */
function columnist_sanitize_layout( $layout ) {
    if ( ! in_array( $layout, array( 'left', 'full_width', 'right' ) ) ) {
        $layout = 'right';
    }
    return $layout;
}
// -----------------------------------------------------------------------------

/* Sanitize color schemes */
function columnist_sanitize_colorscheme( $scheme ) {
    if ( ! in_array( $scheme, array( 'cyan', 'black', 'blue', 'white' ) ) ) {
        $scheme = 'cyan';
    }
    return $scheme;
}
// -----------------------------------------------------------------------------

/* Sanitize yes/no options */
function columnist_sanitize_yesno( $yesno ) {
    if ( ! in_array( $yesno, array( 'yes', 'no' ) ) ) {
        $yesno = 'yes';
    }
    return $yesno;
}
// -----------------------------------------------------------------------------

/* Sanitize number */
function columnist_sanitize_number( $number ) {
    if ( ! in_array( $number, array( '1', '2', '3', '4' ) ) ) {
        $number = '2';
    }
    return $number;
}
// -----------------------------------------------------------------------------

/* Sanitize number 2 */
function columnist_sanitize_number2( $number ) {
    if ( ! in_array( $number, array( '1','2','3','4','5','6','7','8','9','10' ) ) ) {
        $number = '4';
    }
    return $number;
}
// -----------------------------------------------------------------------------

/* Sanitize logo alignment options */
function columnist_sanitize_align( $align ) {
    if ( ! in_array( $align, array( 'left', 'center', 'right' ) ) ) {
        $align = 'center';
    }
    return $align;
}
// -----------------------------------------------------------------------------

/*Sanitize featured section type */
function columnist_sanitize_featured( $featured ) {
    if ( ! in_array( $featured, array( '0','sliderwidget', 'justwidget', 'sliderwide', 'widgetnarrow' ) ) ) {
        $featured = 'sliderrwidget';
    }
    return $featured;
}
// -----------------------------------------------------------------------------

/* Sanitize site width */
function columnist_sanitize_width( $width ) {
    if ( ! in_array( $width, array( '980px', '1280px', '1400px', '1600px', '1920px' ) ) ) {
        $width = '980px';
    }
    return $width;
}
// -----------------------------------------------------------------------------

/* Sanitize slider transition type */
function columnist_sanitize_trans( $trans ) {
    if ( ! in_array( $trans, array( 'simple', 'slidedown', 'rotate', 'chessreplace', 'blinds', 'fadecorners', 'magic', 'squares', 'flutterinside', 'collapsestairs', 'collapsecircle', 'collapsezigzag', 'clipchessin', 'expandstairs', 'horizontalblinds', 'horizontalfade', 'verticalstripe', 'floatright' ) ) ) {
        $trans= 'simple';
    }
    return $trans;
}
// -----------------------------------------------------------------------------

/* Sanitize blog content */
function columnist_sanitize_content( $content ) {
    if ( ! in_array( $content, array( 'content', 'excerpt' ) ) ) {
        $content = 'excerpt';
    }
    return $content;
}
// -----------------------------------------------------------------------------

/* Sanitize site font */
function columnist_sanitize_fontfamily( $font ) {
    if ( ! in_array( $font, array( 'sans-serif', 'Arial', 'Times New Roman', 'Tahoma', 'Trebuchet MS', 'Verdana', 'Garamond', 'Georgia', 'Impact', 'Monospace', 'serif', 'Open Sans', 'Noto Sans', 'Noto Serif', 'PT Sans', 'PT Sans Narrow', 'Roboto', 'cursive', 'Anton', 'Bangers', 'Lato', 'Lobster', 'Yanone Kaffeesatz' ) ) ) {
        $font = 'Open Sans';
    }
    return $font;
}
// -----------------------------------------------------------------------------

/* Sanitize text for html */
function columnist_sanitize_text( $text ) {
    if ( empty($text) ) {
        $text = '';
    }
	else {
		$text = esc_attr($text);
	}
    return $text;
}
// -----------------------------------------------------------------------------

/* Sanitize text for html */
function columnist_sanitize_category( $text ) {
    if ( empty($text) ) {
        $text = '-1000';
    }
	else {
		$text = esc_attr($text);
	}
    return $text;
}
// -----------------------------------------------------------------------------

/* Sanitize font weight */
function columnist_sanitize_weight( $weight ) {
    if ( ! in_array( $weight, array( '400', '800' ) ) ) {
        $weight = '400';
    }
    return $weight;
}
// -----------------------------------------------------------------------------