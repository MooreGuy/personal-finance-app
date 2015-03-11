$(document).ready(function(){

	//Close and open a panel body when the header is clicked. 
	$('.header-link-collapse').on("click", function(){
		var elementId = $(this).attr('id');

		if($("."+elementId).hasClass('open')){
			$("."+elementId).addClass('closed-panel').removeClass('open');
		}else if($("."+elementId).hasClass('closed-panel')){
			$("."+elementId).removeClass('closed-panel').addClass('open');
		}
	});


	/*
		When the up vote button is clicked remove any previous selection the
		bottom vote button had and add the appropriate color class depending
		on what was there previously
	*/
	$('.glyphicon-chevron-up').on("click", function(){

		//Get the Id of the post the vote is for
		var postId = $(this).parent().data('post');

		//Get the count of the vote and add or decrease the count depending on the class
		var voteCount = parseInt($('.vote-count-row[data-post=\"'+postId+'\"]').children().text());

		//Remove any neg class the bottom vote button has and set it back to neutral
		if($('.down-vote-wrapper[data-post=\"'+postId+'\"]').children().hasClass('vote-negative')){
			$('.down-vote-wrapper[data-post=\"'+postId+'\"]').children().removeClass('vote-negative').addClass('vote-neutral');

			//Also set the vote count back to normal
			$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(++voteCount);
		}

		//If the up vote button is neutral give it a positive and if it is positive give it a neutral
		if($(this).hasClass('vote-neutral')){
			$(this).removeClass('vote-neutral').addClass('vote-positive');
			//Set the count of the post to +1
			$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(++voteCount);
		}else{
			$(this).removeClass('vote-positive').addClass('vote-neutral');
			//Set the count of the post to -1
			$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(--voteCount);
		}
	});


	/*
		When the down vote button is clicked remove any previous selection the
		up vote button had and add the appropriate color class depending
		on what was there previously
	*/
	$('.glyphicon-chevron-down').on("click", function(){

		//Get the Id of the post the vote is for
		var postId = $(this).parent().data('post');

		//Get the count of the vote and add or decrease the count depending on the class
		var voteCount = parseInt($('.vote-count-row[data-post=\"'+postId+'\"]').children().text());

		//Remove any pos class the bottom vote button has and set it back to neutral
		if($('.up-vote-wrapper[data-post=\"'+postId+'\"]').children().hasClass('vote-positive')){
			$('.up-vote-wrapper[data-post=\"'+postId+'\"]').children().removeClass('vote-positive').addClass('vote-neutral');

			//Also set the vote count back to normal
			$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(--voteCount);
		}

		//If the down vote button is neutral give it a positive and if it is positive give it a neutral
		if($(this).hasClass('vote-neutral')){
			$(this).removeClass('vote-neutral').addClass('vote-negative');
			//Set the count of the post to +1
			$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(--voteCount);
		}else{
			$(this).removeClass('vote-negative').addClass('vote-neutral');
			//Set the count of the post to -1
			$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(++voteCount);
		}
	});
});