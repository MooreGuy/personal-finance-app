$(document).ready(function(){
	//Make the community board tab the active tab
	$('.navbar-nav > li[name="community_board_home"]').addClass('active');

	
	//Initalize and call the owl-carousel to show the graphs
	$(".owl-carousel").owlCarousel({
		items:3,
		loop:false,
		dots:true,
		navContainer: '#graphNav',
		nav:true
	});

	
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

	$('ul.nav.nav-tabs > li > a.transport').click(function(e){
	 	e.preventDefault();
	 	$('#tabContent').empty();
	 	
	 	$('ul > li[role="presentation"].active').removeClass('active');
	 	$(this).parent().addClass('active');

	 	$.ajax({
    	type: 'get',
    	url: '/community_board_forums/loadCatTabs?tab=transport',
    	dataType: 'html',
    	success: function (html) {
      	// success callback -- replace the div's innerHTML with
      	// the response from the server.
      	
      	$('#tabContent').html(html);
    	}
  		});
	});

	$('ul.nav.nav-tabs > li > a.food').click(function(e){
	 	e.preventDefault();
	 	$('#tabContent').empty();

	 	$('ul > li[role="presentation"].active').removeClass('active');
	 	$(this).parent().addClass('active');

	 	$.ajax({
    	type: 'get',
    	url: '/community_board_forums/loadCatTabs?tab=food',
    	dataType: 'html',
    	success: function (html) {
      	// success callback -- replace the div's innerHTML with
      	// the response from the server.
      	
      	$('#tabContent').html(html);
    	}
  		});
	});

	$('ul.nav.nav-tabs > li > a.communications').click(function(e){
	 	e.preventDefault();
	 	$('#tabContent').empty();
	 	
	 	$('ul > li[role="presentation"].active').removeClass('active');
	 	$(this).parent().addClass('active');

	 	$.ajax({
    	type: 'get',
    	url: '/community_board_forums/loadCatTabs?tab=communications',
    	dataType: 'html',
    	success: function (html) {
      	// success callback -- replace the div's innerHTML with
      	// the response from the server.
      	
      	$('#tabContent').html(html);
    	}
  		});
	});

	$('ul.nav.nav-tabs > li > a.entertainment').click(function(e){
	 	e.preventDefault();
	 	$('#tabContent').empty();
	 	
	 	$('ul > li[role="presentation"].active').removeClass('active');
	 	$(this).parent().addClass('active');

	 	$.ajax({
    	type: 'get',
    	url: '/community_board_forums/loadCatTabs?tab=entertainment',
    	dataType: 'html',
    	success: function (html) {
      	// success callback -- replace the div's innerHTML with
      	// the response from the server.
      	
      	$('#tabContent').html(html);
    	}
  		});
	});

	$('ul.nav.nav-tabs > li > a.housing').click(function(e){
	 	e.preventDefault();
	 	$('#tabContent').empty();
	 	
	 	$('ul > li[role="presentation"].active').removeClass('active');
	 	$(this).parent().addClass('active');

	 	$.ajax({
    	type: 'get',
    	url: '/community_board_forums/loadCatTabs?tab=housing',
    	dataType: 'html',
    	success: function (html) {
      	// success callback -- replace the div's innerHTML with
      	// the response from the server.
      	
      	$('#tabContent').html(html);
    	}
  		});
	});

	$('ul.nav.nav-tabs > li > a.utilities').click(function(e){
	 	e.preventDefault();
	 	$('#tabContent').empty();
	 	
	 	$('ul > li[role="presentation"].active').removeClass('active');
	 	$(this).parent().addClass('active');

	 	$.ajax({
    	type: 'get',
    	url: '/community_board_forums/loadCatTabs?tab=utilities',
    	dataType: 'html',
    	success: function (html) {
      	// success callback -- replace the div's innerHTML with
      	// the response from the server.
      	
      	$('#tabContent').html(html);
    	}
  		});
	});

	$('ul.nav.nav-tabs > li > a.travel').click(function(e){
	 	e.preventDefault();
	 	$('#tabContent').empty();
	 	
	 	$('ul > li[role="presentation"].active').removeClass('active');
	 	$(this).parent().addClass('active');

	 	$.ajax({
    	type: 'get',
    	url: '/community_board_forums/loadCatTabs?tab=travel',
    	dataType: 'html',
    	success: function (html) {
      	// success callback -- replace the div's innerHTML with
      	// the response from the server.
      	
      	$('#tabContent').html(html);
    	}
  		});
	});

	$('ul.nav.nav-tabs > li > a.general').click(function(e){
	 	e.preventDefault();
	 	$('#tabContent').empty();
	 	
	 	$('ul > li[role="presentation"].active').removeClass('active');
	 	$(this).parent().addClass('active');

	 	$.ajax({
    	type: 'get',
    	url: '/community_board_forums/loadCatTabs?tab=general',
    	dataType: 'html',
    	success: function (html) {
      	// success callback -- replace the div's innerHTML with
      	// the response from the server.
      	
      	$('#tabContent').html(html);
    	}
  		});
	});
	
});