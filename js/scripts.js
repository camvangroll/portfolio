$(function(){

	$('.fa-bars').on('click', function(){
		$('.dropDownNav').toggleClass('open');
		$(this).toggleClass('fa-bars fa-times')

	});

});