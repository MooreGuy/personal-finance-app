$("document").ready(function() {
	//Initalize and call the owl-carousel to show the graphs
	$(".owl-carousel").owlCarousel({
		items:3,
		loop:false,
	});

	// Go to the next item
	$('.graphRightBtn').on("click", function() {
		$(".owl-carousel").trigger('next.owl.carousel');
	});

	// Go to the previous item
	$('.graphLeftBtn').on("click", function() {
		$(".owl-carousel").trigger('prev.owl.carousel');
	});

	$.ajax({
		url: window.location.origin + "/graphfactory/get_available_user_graphs"
	}).done( function(graphData) {

		var parsedGraphData = JSON.parse(graphData);

		for(var x = 0; x < parsedGraphData.length; x++) {
			var chart = new CanvasJS.Chart("graph" + (x + 1), {
				title: parsedGraphData[x].title,
				tooltip: parsedGraphData[x].tooltip,
				data: parsedGraphData[x].data
			});

			console.log(parsedGraphData[x].data);

			chart.render();
		}
	});
});
