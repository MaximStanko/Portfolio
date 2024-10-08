	$(window).load(function(){
	      $('.flexslider').flexslider({
				itemMargin: 0,

	        	namespace: "flex-",             //{NEW} String: Prefix string attached to the class of every element generated by the plugin
				selector: ".slides > li",       //{NEW} Selector: Must match a simple pattern. '{container} > {slide}' -- Ignore pattern at your own peril
				animation: "slide",              //String: Select your animation type, "fade" or "slide"
				easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
				direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"
				reverse: false,                 //{NEW} Boolean: Reverse the animation direction
				animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
				smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode
				startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
				slideshow: true,                //Boolean: Animate slider automatically
				slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
				animationSpeed: 800,            //Integer: Set the speed of animations, in milliseconds
				initDelay: 0,                   //{NEW} Integer: Set an initialization delay, in milliseconds
				randomize: false,               //Boolean: Randomize slide order

				// Usability features
				pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
				pauseOnHover: true,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
				useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
				touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
				video: false,                   //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches

				// Primary Controls
				controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
				directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
				prevText: "<<<",           //String: Set the text for the "previous" directionNav item
				nextText: ">>>",               //String: Set the text for the "next" directionNav item

				// Secondary Navigation
				keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys
				multipleKeyboard: false,        //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
				mousewheel: false,              //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
				pausePlay: false,               //Boolean: Create pause/play dynamic element
				pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
				playText: 'Play',               //String: Set the text for the "play" pausePlay item


	        	start: function(slider){
	          		$('body').removeClass('loading');
	        	}
	      });
    });