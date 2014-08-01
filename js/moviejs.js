$(document).ready(function(){

  $('.girl_image').fadeIn(10500);
  
});

$(document).ready(function(){

  $('.creepy_light').fadeIn(12500);
  
});

$(document).ready(function(){
	
	
	var releaseDate = new Date("August 30, 2014").getTime();

	var days,
		hours,
		minutes,
		seconds;
	
	var countdown = $('.movie__count');

	setInterval(function(){

		var currentDate = new Date().getTime();

		var secondsLeft = (releaseDate - currentDate) / 1000;

		days = parseInt(secondsLeft / 86400);
		secondsLeft = secondsLeft % 86400;

		hours = parseInt(secondsLeft / 3600);
		secondsLeft = secondsLeft % 3600;

		minutes = parseInt(secondsLeft / 60);
		seconds = parseInt(secondsLeft % 60);

		console.log(days, hours, minutes, seconds);

		countdown.html(days + "." + hours + "." + minutes + "." + seconds);

	}, 1000)
});
