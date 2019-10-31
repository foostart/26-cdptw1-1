$(document).ready(function(){
 // $(".my-rating-9").starRating({
 //    initialRating: 3.5,
 //    disableAfterRate: false,
 //    onHover: function(currentIndex, currentRating, $el){
 //      $('.live-rating').text(currentIndex);
 //    },
 //    onLeave: function(currentIndex, currentRating, $el){
 //      $('.live-rating').text(currentRating);
 //    }
 //  });
 $('.aaaa').on('click',function(){
 	//$('.fa-heart').css({'color':'red'});
 	if($('.fa-heart').css('color')!="black")
 	{
 		
 		$('.fa-heart').addClass('heart2');
 		
 		
 		
 	}
 	else{
 		if($('.fa-heart').css('color')=="red"){
 		$('.fa-heart').removeClass('heart2');
 	}
 	}
 	
 });
});