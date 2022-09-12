//var playList = []
var currentPlaylist =[];
var audioElement;
var repeat =false;

var currentPlaying = 0;

//getSongs()

function openPage(url){
	var encodedUrl = encodeURI(url);

}

function formatTime(seconds){
	var time =Math.round(seconds)
	var minutes = Math.floor(time/60);
	var seconds = time-(minutes*60);
var extraZero;
if (seconds <10){
	extraZero ="0";
	return minutes + ":"+ extraZero + seconds
}
return minutes + ":" + seconds
}

function updateTimeProgressBar(audio){
	$(".progressTime.current").text(formatTime(audio.currentTime))
	$(".progressTime.remaining").text(formatTime(audio.duration - audio.currentTime))
var progress = audio.currentTime / audio.duration *100
$(".progress").css("width", progress+"%");
}


function Audio(){
	
	this.audio = document.createElement("audio")
	this.audio.addEventListener("canplay", function(){
		var duration = formatTime(this.duration)
		$(".progressTime.remaining").text(duration)
		


	})
	this.audio.addEventListener("timeupdate", function(){
		if(this.duration){
			updateTimeProgressBar(this)
		}

	})
	this.setTrack  = function(src){
 this.audio.src = src
 //console.log(this.audio.duration)
	} 
	this.play =  function(){
		this.audio.play()

	}
	this.pause =  function (){
		this.audio.pause();
	}

}

