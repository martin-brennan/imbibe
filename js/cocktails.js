$(document).ready(function(){
	var i = 3;
	$('h1').each(function(){
		if(i % 6 == 0) {
			$(this).addClass('navy');
			$(this).next('h2').removeClass('navy');
			$(this).next('h2').addClass('red');
		}
		if(i % 9 == 0) {
			$(this).addClass('red');
			$(this).next('h2').removeClass('red');
			$(this).next('h2').addClass('navy');
		}
		if(i % 12 == 0) {
			$(this).removeClass('navy');
			$(this).next('h2').removeClass('navy');
			$(this).next('h2').removeClass('red');
		}
		i = i + 3;
	});
});