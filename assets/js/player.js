$(window).load(function(){
	
	var music =  document.getElementById('music');
	var playhead =  document.getElementById('playhead');
	var progBar =  $('.buffer span');
	var duration = music.duration;
	var currentTimeWarpper = $('.current-time');
	var totalTimeWarpper = $('.total-time');
	var timeline =  document.getElementById('timeline');
	var timelineWidth = timeline.offsetWidth - playhead.offsetWidth;
	console.log(timelineWidth)

	// Toggke play/pause


	// Go 5s in time
	$('.next').click(function() {
		music.currentTime = music.currentTime + 5
	});
	// Go back 5s in time
	$('.prev').click(function() {
		music.currentTime = music.currentTime - 5
	});

	// Make bar moves and calc time
	music.addEventListener("timeupdate", timeUpdate, false);
	function timeUpdate() {
		var playPercent = 100 * (music.currentTime / duration);
		progBar.width(playPercent+"%")
		playhead.style.marginLeft = playPercent + "%";
		// Calc the current time
		var secoundsCounter = Math.floor(music.currentTime);
		var hours   = Math.floor(secoundsCounter / 3600);
		var minutes = Math.floor((secoundsCounter - (hours * 3600)) / 60);
		var seconds = secoundsCounter - (hours * 3600) - (minutes * 60);
		// Fix format
		if (hours   < 10) {hours   = "0"+hours;}
		if (minutes < 10) {minutes = "0"+minutes;}
		if (seconds < 10) {seconds = "0"+seconds;}
		// Put it in the right place
		currentTimeWarpper.text(minutes+':'+seconds)
	}timeUpdate();


	// Get total time
	var secoundsCounter = Math.floor(music.duration);
	var hours   = Math.floor(secoundsCounter / 3600);
	var minutes = Math.floor((secoundsCounter - (hours * 3600)) / 60);
	var seconds = secoundsCounter - (hours * 3600) - (minutes * 60);
	// Fix format
	if (minutes < 10) {minutes = "0"+minutes;}
	if (seconds < 10) {seconds = "0"+seconds;}
	// Put it in the right place
	totalTimeWarpper.text(minutes+':'+seconds)
	
})


function playAudio() {
	var pButton =  $('#playButton');
	if (music.paused) {
		music.play();
		pButton.find('i').removeClass('fa-play').addClass('fa-pause')
	} else { 
		music.pause();
		pButton.find('i').removeClass('fa-pause').addClass('fa-play')
	}
	timeUpdate();
}



















































































// var music = new Audio();
// music.src = "assets/audio/1.MP3";

// $(document).ready(function(){
	
// 	// Music player
// 	// var music =  document.getElementById('music');

// 	var playhead =  document.getElementById('playhead');
// 	var progBar =  $('.buffer span');
// 	var pButton =  $('#playButton');
// 	var duration = {};
// 	var currentTimeWarpper = $('.current-time');
// 	var totalTimeWarpper = $('.total-time');
// 	var timeline =  document.getElementById('timeline');
// 	var timelineWidth = timeline.offsetWidth - playhead.offsetWidth;
	
// 	function getSongLenght(){
// 		music.addEventListener('loadedmetadata', function() {
// 			duration.lenght = music.duration;
// 		});
// 		return duration.lenght;
// 	}
// 	console.log(duration)
// 	// console.log('SECS ', getSongLenght())


// 	// Go 5s in time
// 	$('.next').click(function() {
// 		music.currentTime = music.currentTime + 5
// 	});
// 	// Go back 5s in time
// 	$('.prev').click(function() {
// 		music.currentTime = music.currentTime - 5
// 	});

// 	// Make bar moves and calc time
// 	music.addEventListener("timeupdate", timeUpdate, false);
// 	function timeUpdate() {
// 		var playPercent = 100 * (music.currentTime / duration);
// 		progBar.width(playPercent+"%")
// 		playhead.style.marginLeft = playPercent + "%";
// 		// Calc the current time
// 		var secoundsCounter = Math.floor(music.currentTime);
// 		var hours   = Math.floor(secoundsCounter / 3600);
// 	    var minutes = Math.floor((secoundsCounter - (hours * 3600)) / 60);
// 	    var seconds = secoundsCounter - (hours * 3600) - (minutes * 60);
// 	    // Fix format
// 	    if (hours   < 10) {hours   = "0"+hours;}
// 	    if (minutes < 10) {minutes = "0"+minutes;}
// 	    if (seconds < 10) {seconds = "0"+seconds;}
// 	    // Put it in the right place
// 	    currentTimeWarpper.text(minutes+':'+seconds)
// 	}


// 	// Get total time
// 	var secoundsCounter = Math.floor(music.duration);
// 	var hours   = Math.floor(secoundsCounter / 3600);
// 	var minutes = Math.floor((secoundsCounter - (hours * 3600)) / 60);
// 	var seconds = secoundsCounter - (hours * 3600) - (minutes * 60);
// 	// Fix format
// 	if (minutes < 10) {minutes = "0"+minutes;}
// 	if (seconds < 10) {seconds = "0"+seconds;}
// 	// Put it in the right place
// 	totalTimeWarpper.text(minutes+':'+seconds)


// });




// // Toggke play/pause
// function playAudio() {
// 	if (music.paused) {
// 		music.play();
// 		$('#playButton').find('i').removeClass('fa-play').addClass('fa-pause')
// 	} else { 
// 		music.pause();
// 		$('#playButton').find('i').removeClass('fa-pause').addClass('fa-play')
// 	}
// }











// // There was a WAR here :D 
// // //Makes timeline clickable
// // timeline.addEventListener("click", function (event) {
// // 	moveplayhead(event);
// // 	music.currentTime = duration * clickPercent(event);
// // 	music.addEventListener('timeupdate', timeUpdate, false);
// // }, false);;
 
// // // returns click as decimal (.77) of the total timelineWidth
// // function clickPercent(e) {
// // 	return (e.pageX - timeline.offsetLeft) / timelineWidth;
// // }
 
// // // Moves playhead as user drags
// // function moveplayhead(e) {
// // 	var newMargLeft = e.pageX - timeline.offsetLeft;
// // 	if (newMargLeft >= 0 && newMargLeft <= timelineWidth) {
// // 		playhead.style.marginLeft = newMargLeft + "px";
// // 	}
// // 	if (newMargLeft < 0) {
// // 		playhead.style.marginLeft = "0px";
// // 	}
// // 	if (newMargLeft > timelineWidth) {
// // 		playhead.style.marginLeft = timelineWidth + "px";
// // 	}
// // }
