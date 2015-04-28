$(document).ready(function(){
	//Make the community board tab the active tab
	$('.navbar-nav > li[name="community_board_home"]').addClass('active');

	
	//Initalize and call the owl-carousel to show the graphs
	$(".owl-carousel").owlCarousel({
		items:3,
		loop:false,
	});

	// Go to the next item
	$('.graphRightBtn').click(function() {
    	$(".owl-carousel").trigger('next.owl.carousel');
	})

	// Go to the previous item
	$('.graphLeftBtn').click(function() {
	    $(".owl-carousel").trigger('prev.owl.carousel');
	})

	
	//All of the graphs for the community data
	$(document).ready(function(){
		var chart = new CanvasJS.Chart("graph1", {

	    	title:{
	        	text: "1"              
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

		var chart = new CanvasJS.Chart("graph2", {

	    	title:{
	        	text: "2"              
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

		var chart = new CanvasJS.Chart("graph3", {

	    	title:{
	        	text: "3"              
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

		var chart = new CanvasJS.Chart("graph4", {

	    	title:{
	        	text: "4"              
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
	
	$('ul.nav.nav-tabs[role="tablist"] > li').on("click", function(e){
	 	e.preventDefault();

	 	var category = $(this).children().attr('class');
	 	
	 	$('ul > li[role="presentation"].active').removeClass('active');
	 	$(this).addClass('active');
	 	var order = $('#post-filter option:selected').text().toLowerCase();

	 	$.ajax({
    	type: 'get',
    	url: "/community_board_forums/loadCatTabs?tab="+category+"&orderBy="+order+"",
    	dataType: 'html',
    	success: function (html) {
      	// success callback -- replace the div's innerHTML with
      	// the response from the server.
      	
      	$('#tabContent').html(html);
    	}
  		});
	});
	
});