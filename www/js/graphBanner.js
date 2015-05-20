//Initalize and call the owl-carousel to show the graphs
$(".owl-carousel").owlCarousel({
	items:3,
	loop:false,
});

// Go to the next item
$('.graphRightBtn').on("click", function() {
	$(".owl-carousel").trigger('next.owl.carousel');
})

// Go to the previous item
$('.graphLeftBtn').on("click", function() {
	$(".owl-carousel").trigger('prev.owl.carousel');
})
