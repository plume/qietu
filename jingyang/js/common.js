/*jQuery(function(){
	jQuery.fn.supersized.options = {  
		startwidth: 2000,  
		startheight: 695,
		vertical_center:0,
		slideshow: 1,
		navigation: 0,
		transition: 0,
		pause_hover: 0,
		slide_counter: 1,
		slide_captions: 0,
		slide_interval: 5000 
	};
	jQuery('#web-supersize').supersized();
});
*/
$(function(){
	$.fn.supersized.options = {
		startwidth: 2000,  
		startheight: 695,
		vertical_center: 1,
		slideshow: 1,
		navigation: 0,
		thumbnail_navigation: 0,
		transition: 1, //0-None, 1-Fade, 2-slide top, 3-slide right, 4-slide bottom, 5-slide left
		pause_hover: 0,
		slide_counter: 1,
		slide_captions: 1,
		slide_interval: 6000,
		slides : [
			{image : 'images/body_1.jpg', title : 'City Clock Tower', url : 'http://www.helloweba.com'},
			{image : 'images/body_2.jpg', title : 'Canal Park Fence', url : 'http://www.helloweba.com/blog.html'},  
			{image : 'images/body_3.jpg', title : 'Old Train Tracks', url : 'http://www.helloweba.com/case.html'}
		]
	};
	$('#web-supersize').supersized(); 
});