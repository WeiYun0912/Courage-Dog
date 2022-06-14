$(document).ready(function(){
	$('.happydog').hover(
		function(){
			$(this).attr("src","img/happydog.png");
			
		},
		function(){
			$(this).attr("src","img/channel.png")
		}
		);

	$('.happdogV2').hover(
		function(){
			$(this).attr("src","img/happydogv2.png");
		},

		function(){
			$(this).attr("src","img/login.png");
		}
		);

	$('.thumbdog').hover(
		function(){
			$(this).attr("src","img/thumbdog.png");
		},

		function(){
			$(this).attr("src","img/main.png");
		}
		);

	$('.scary').hover(
		function(){
			$(this).attr("src","img/scary.png");
		},
		function(){
			$(this).attr("src","img/villain.png");
		}
		);


	$('.ohno').hover(
		function(){
			$(this).attr("src","img/ohno.png");
		},

		function(){
			$(this).attr("src","img/video.png");
		}

		);

	$('.run').hover(
		function(){
			$(this).attr("src","img/run.png");
		},

		function(){
			$(this).attr("src","img/comment1.png");
		}
		);

	

});

//播放音樂
$(document).ready(function(){    
	var song = document.createElement('audio');
	song.setAttribute('src','music/Courage.mp3');
    song.volume = 1; //調整音量
    song.controls = true;
    $('#play').click(function(){
    	song.play();

    });

    $('#pause').click(function(){
    	song.pause();


    })

    $('#stop').click(function(){
    	song.pause();
    	song.currentTime=0;

    })

    song.onplay = function(){
    	console.log(song.duration);
    	$("#all").html(`<span>${parseInt(song.duration)}</span>`);
    };

    song.ontimeupdate = function(){
    	$("#now").html(`<span>${parseInt(song.currentTime)}</span>`);
    }

})
