$(document).ready(function() {
});

var GraphFactory = {

	rowNumber: 0,
	graphColumnNumber: 0,

	/**
	 * 	Create a graph div or row every three columns, then return the created div.
	 */
	createGraphDiv: function() {

		this.graphColumnNumber++;
		console.log(this.graphColumnNumber);

		if( this.graphColumnNumber-1 % 3 === 0 ) {
			this.rowNumber++;
			var graphRow = $('<div class="row graph-row' + this.rowNumber + '"></div>');
			$(graphRow).insertAfter('.page-header');
		}
		console.log(this.rowNumber);

		var graphColumn = $('<div class="col-xs-6 col-sm-4 col-md-4 " id="avg_phone_bill' + this.graphColumnNumber + '"></div>');
		$('.graph-row' + this.rowNumber).append(graphColumn);

		$(graphColumn).append('<div class="graph" id="graph' + this.graphColumnNumber + '"></div>');

		return 'graph' + this.graphColumnNumber;
	},

	/**
	 *	Get all of the graph data then start creating the graphs.
	 */
	getGraphData: function( ) {

		$.ajax({
			url: window.location.origin + "/graph/get_graph",
			dataType: "json",
		}).done(function( data ) {	
		});
	},

	insertGraph: function( graphData, graphID ) {

			var chart = new CanvasJS.Chart( graphID, {

			title: {
				text: graphData['title'] 
			},

			toolTip:{
				content: "{label}: ${y}"
			},
			
			data: [//array of dataSeries              
			{ //dataSeries object

				type: "column",
				dataPoints: [
					{ label: "Verizon", y: 10 },
					{ label: "AT@T", y: 29 },
					{ label: "Virgin", y: 40 }, 
					{ label: "Sprint", y: 34 }
				]
			}],

			axisY:{
				prefix: "$"
			}    
		});

		chart.render();
	}
		
	
}

var graphDiv = GraphFactory.createGraphDiv();
console.log(graphDiv);
GraphFactory.insertGraph( 'type', graphDiv  );

//Add the active class to the navbar on page load
$('.navbar-nav > li[name="admin"]').addClass('active');
