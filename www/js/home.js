$(document).ready(function(){

    var chart = new CanvasJS.Chart("avg_phone_bill", {

    	title:{
        	text: "Average Cost of Phone Bills per Month"              
      	},

      	toolTip:{
        	content: "{label}: ${y}"
      	},
      	
      	data: [//array of dataSeries              
        { //dataSeries object

        	type: "column",
        	dataPoints: [
        		{ label: "Verizon", y: 18 },
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

    var chart = new CanvasJS.Chart("avg_cost_of_rent", {

    	title:{
        	text: "Average Cost of Phone Bills per Month"              
      	},

      	toolTip:{
        	content: "{label}: ${y}"
      	},
      	
      	data: [//array of dataSeries              
        { //dataSeries object

        	type: "column",
        	dataPoints: [
        		{ label: "Verizon", y: 18 },
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

    var chart = new CanvasJS.Chart("avg_cost_of_dining_out", {

    	title:{
        	text: "Average Cost of Phone Bills per Month"              
      	},
      	
		toolTip:{
        	content: "{label}: ${y}"
      	},

      	data: [//array of dataSeries              
        { //dataSeries object

        	type: "column",
        	dataPoints: [
        		{ label: "Verizon", y: 18 },
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

});