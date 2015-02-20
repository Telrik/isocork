/*global jQuery:false */
jQuery(document).ready(function($) {
"use strict";
	//Camera Jquery
	$('#camera-slide').camera({		
		thumbnails: false,
		hover: false,
		fx: 'random',
		time: 20000,
		transPeriod: 1100,
		pagination: false,
		loader: 'none'
	});
});