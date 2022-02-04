// Europe
$(function(){
	$('#mapEurope').vectorMap({
		map: 'europe_mill',
		zoomOnScroll: false,
		series: {
			regions: [{
				values: gdpData,
				scale: ['#FCE629'],
				normalizeFunction: 'polynomial'
			}]
		},
		backgroundColor: 'transparent',
	});
});