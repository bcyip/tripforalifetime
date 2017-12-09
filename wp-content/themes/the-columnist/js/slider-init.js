jQuery(document).ready(function ($columnistAutoplay) {
		"use strict"
switch (columnistAutoplay.slidingType) {
    case "slidedown":
        var _SlideshowTransitions = {$Duration:500,y:1,$Easing:$JssorEasing$.$EaseInQuad};
		break;
    case "rotate":
		var _SlideshowTransitions = {$Duration:1200,$Zoom:11,$Rotate:-1,$Easing:{$Zoom:$JssorEasing$.$EaseInQuad,$Opacity:$JssorEasing$.$EaseLinear,$Rotate:$JssorEasing$.$EaseInQuad},$Opacity:2,$Round:{$Rotate:0.5},$Brother:{$Duration:1200,$Zoom:1,$Rotate:1,$Easing:$JssorEasing$.$EaseSwing,$Opacity:2,$Round:{$Rotate:0.5},$Shift:90}};
		break;
    case "chessreplace":
		var _SlideshowTransitions = {$Duration:1600,y:-1,$Cols:2,$ChessMode:{$Column:12},$Easing:{$Top:$JssorEasing$.$EaseInOutQuart,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2,$Brother:{$Duration:1600,y:1,$Cols:2,$ChessMode:{$Column:12},$Easing:{$Top:$JssorEasing$.$EaseInOutQuart,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}};
		break;
    case "blinds":
		var _SlideshowTransitions = {$Duration:1200,x:1,$Delay:40,$Cols:6,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:{$Left:$JssorEasing$.$EaseInOutQuart,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2,$ZIndex:-10,$Brother:{$Duration:1200,x:1,$Delay:40,$Cols:6,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:{$Top:$JssorEasing$.$EaseInOutQuart,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2,$ZIndex:-10,$Shift:-100}};
		break;
    case "fadecorners":
		var _SlideshowTransitions = {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Top:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2};
		break;
    case "magic":
		var _SlideshowTransitions = {$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Easing:{$Left:$JssorEasing$.$EaseInWave,$Top:$JssorEasing$.$EaseInWave,$Clip:$JssorEasing$.$EaseOutQuad},$Assembly:260,$Outside:true,$Round:{$Left:1.3,$Top:2.5}};
		break;
    case "squares":
		var _SlideshowTransitions = {$Duration:1200,x:0.3,y:-0.3,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Easing:{$Left:$JssorEasing$.$EaseInJump,$Top:$JssorEasing$.$EaseInJump,$Clip:$JssorEasing$.$EaseSwing},$Assembly:260,$Round:{$Left:0.8,$Top:0.8}};
		break;
    case "flutterinside":
		var _SlideshowTransitions = {$Duration:1800,x:1,$Delay:30,$Cols:10,$Rows:5,$Clip:15,$During:{$Left:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Easing:{$Left:$JssorEasing$.$EaseInOutExpo,$Clip:$JssorEasing$.$EaseInOutQuad},$Assembly:260,$Round:{$Top:0.8}};
		break;
    case "collapsestairs":
		var _SlideshowTransitions = {$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Easing:$JssorEasing$.$EaseOutQuad,$Assembly:2049};
		break;
    case "collapsecircle":
		var _SlideshowTransitions = {$Duration:800,$Delay:200,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Assembly:2049};
		break;
    case "collapsezigzag":
		var _SlideshowTransitions = {$Duration:500,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Easing:$JssorEasing$.$EaseOutQuad};
		break;
    case "clipchessin":
		var _SlideshowTransitions = {$Duration:1200,y:-1,$Cols:8,$Rows:4,$Clip:15,$During:{$Top:[0.5,0.5],$Clip:[0,0.5]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$ScaleClip:0.5};
		break;		
    case "expandstairs":
		var _SlideshowTransitions = {$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Easing:$JssorEasing$.$EaseInQuad,$Assembly:2050};
		break;	
    case "horizontalblinds":
		var _SlideshowTransitions = {$Duration:400,$Delay:100,$Rows:7,$Clip:4,$Formation:$JssosrSlideshowFormations$.$FormationStraight};
		break;	
    case "horizontalfade":
		var _SlideshowTransitions = {$Duration:600,$Delay:100,$Rows:7,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Opacity:2};
		break;	
    case "verticalstripe":
		var _SlideshowTransitions = {$Duration:1000,$Cols:8,$Clip:1};
		break;
    case "floatright":
		var _SlideshowTransitions = {$Duration:600,x:-1,$Delay:50,$Cols:8,$Rows:4,$SlideOut:true,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2};
		break;
    default:
        var _SlideshowTransitions = {$Duration:1200,$Opacity:2};
		break;
}
		var _dura= Number(columnistAutoplay.delay);	
		var _autoplay = columnistAutoplay.toggle;

        var options = {
			$BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $ChanceToShow: 2
				       },
					   
        $AutoPlay: _autoplay,
		$AutoPlayInterval: _dura,
            $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: _SlideshowTransitions,
                    $TransitionsOrder: 1,
                    $ShowLink: true
                },
			$ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $ChanceToShow: 1,
				$Scale: false                 
            }
        };
		
        var jssor_slider1 = new $JssorSlider$('slider1_container', options);
		
        //responsive code begin
        function ScaleSlider() {
            var parentWidth = jQuery('#slider1_container').parent().width();
            if (parentWidth) {
                jssor_slider1.$ScaleWidth(parentWidth);
            }
            else
                window.setTimeout(ScaleSlider, 30);
        }
        //Scale slider after document ready
        ScaleSlider();
                                        
        //Scale slider while window load/resize/orientationchange.
        jQuery(window).bind("load", ScaleSlider);
        jQuery(window).bind("resize", ScaleSlider);
        jQuery(window).bind("orientationchange", ScaleSlider);
        //responsive code end		
    });