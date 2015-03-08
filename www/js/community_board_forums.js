$(document).ready(function(){
	/*$('#collapse-one-link').on("click", function(){
		if($('#collapse-one-link').hasClass('collapsed')){
			$('#collapseOne').removeClass('in');
		}
	});
	
	$('#collapseOne').on('hidden.bs.collapse', function (event) {
 		
 		$("#collapseOne").addClass("in");
 		
	});*/

	/*$('.header-link-collapse').on("click", function(){
		var elementId = $(this).attr('id');
		$("."+elementId).slideToggle("slow", function(){

		});
	});*/

	$('.header-link-collapse').on("click", function(){
		var elementId = $(this).attr('id');

		if($("."+elementId).hasClass('open')){
			$("."+elementId).addClass('closed-panel').removeClass('open');
		}else if($("."+elementId).hasClass('closed-panel')){
			$("."+elementId).removeClass('closed-panel').addClass('open');
		}
	});
});