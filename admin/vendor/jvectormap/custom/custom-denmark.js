// Denmark
$(function(){
	$('#mapDenmark').vectorMap({
		map: 'dk_mill',
		zoomOnScroll: false,
		regionStyle:{
			initial: {
				fill: '#FCE629',
			},
			hover: {
				"fill-opacity": 0.8
			},
			selected: {
				fill: '#aa0000'
			},
		},
		backgroundColor: 'transparent',
	});
});