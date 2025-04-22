var vid1 = '/Frontend/video/VID-20230117-WA0027.mp4';
var vid2 = '/Frontend/video/VID-20230117-WA0033.mp4';
var vid3 = '/Frontend/video/video-home-3.mp4';

$('.thumb-1').on('click', function(){
	console.log('hola');
	$('video').attr('src', vid1);
});

$('.thumb-2').on('click', function(){
	$('video').attr('src', vid2);
});

$('.thumb-3').on('click', function(){
	$('video').attr('src', vid3);
});

