$(document).ready(function(){
	$('#collapse-one-link').on("click", function(){
		if($('#collapse-one-link').hasClass('collapsed')){
			$('#collapseOne').removeClass('in');
		}
	});
	
	$('#collapseOne').on('hidden.bs.collapse', function (event) {
 		
 		$("#collapseOne").addClass("in");
 		
	});

	
});