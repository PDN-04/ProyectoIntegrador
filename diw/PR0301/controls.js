$(document).ready(body);

function body() {
    var video = document.getElementsByTagName("video")[0];
    playPauseBtn = document.getElementById("playPause");
    stopBtn = document.getElementById("stop");
    repeatBtn = document.getElementById("repeat");
    vidControls = document.getElementById("controls");
    muteBtn = document.getElementById("muteUnmute");
    timeHolder = document.getElementById("timer");
    lowSpeed = document.getElementById("lento");
    normalSpeed = document.getElementById("normal");
    fastSpeed = document.getElementById("rapido");
    activeRepeat = false;
    timeLineRange = document.getElementById("timeLine");

    video.removeAttribute("controls");

    video.addEventListener('loadedmetadata', function() {
    	timeLineRange.setAttribute("max", video.duration);
	});

    video.addEventListener("canplaythrough", function() {
        vidControls.classList.remove("hidden");
    }, false);

    playPauseBtn.addEventListener("click", function() {
        if (video.paused) {
            video.play();
            playPauseBtn.style.backgroundImage = 'url(images/pause.png)';
        } else {
            video.pause();
            playPauseBtn.style.backgroundImage = 'url(images/play.png)';
        }
    }, false);

    video.addEventListener('pause', function() {
        playPauseBtn.classList.remove('playing');
    }, false);

    muteBtn.addEventListener('click', function() {
        if (video.muted) {
            video.muted = false;
            muteBtn.style.backgroundImage = 'url(images/volume.png)';
        } else {
            video.muted = true;
            muteBtn.style.backgroundImage = 'url(images/mute.png)';
        }
    }, false);

    video.addEventListener('volumeChange', function() {
        if (video.muted) {
            muteBtn.classList.add('muted');
        } else {
            muteBtn.classList.remove('muted');
        }
    }, false);

    video.addEventListener('ended', function() {
        video.currentTime = 0;
        playPauseBtn.style.backgroundImage = 'url(images/play.png)';
    }, false);

    video.addEventListener('timeupdate', function() {
        totalSegundosSinFormatear = video.currentTime;
        totalSegundos = totalSegundosSinFormatear.toFixed()
        horas = Math.floor(totalSegundos / 3600);
        totalSegundos %= 3600;
        minutos = Math.floor(totalSegundos / 60);
        segundos = totalSegundos % 60;

        if (horas < 10) {
            horas = "0" + horas;
        }
        if (minutos < 10) {
            minutos = "0" + minutos;
        }
        if (segundos < 10) {
            segundos = "0" + segundos;
        }
        timeHolder.innerHTML = horas + ":" + minutos + ":" + segundos;
        document.getElementById("timeLine").value = totalSegundos;

    }, false);

    stopBtn.addEventListener("click", function() {
        video.pause();
        video.currentTime = 0;
        playPauseBtn.style.backgroundImage = 'url(images/play.png)';
    }, false);

    lowSpeed.addEventListener("click", function() {
        video.playbackRate = 0.5;
        lowSpeed.style.backgroundColor = '#ffffff';
        lowSpeed.style.color = 'grey';
        normalSpeed.style.backgroundColor = 'grey';
        normalSpeed.style.color = '#ffffff';
        fastSpeed.style.backgroundColor = 'grey';
        fastSpeed.style.color = '#ffffff';
    }, false);

    normalSpeed.addEventListener("click", function() {
        video.playbackRate = 1;
        lowSpeed.style.backgroundColor = 'grey';
        lowSpeed.style.color = '#ffffff';
        normalSpeed.style.backgroundColor = '#ffffff';
        normalSpeed.style.color = 'grey';
        fastSpeed.style.backgroundColor = 'grey';
        fastSpeed.style.color = '#ffffff';
    }, false);

    fastSpeed.addEventListener("click", function() {
        video.playbackRate = 2;
        lowSpeed.style.backgroundColor = 'grey';
        lowSpeed.style.color = '#ffffff';
        normalSpeed.style.backgroundColor = 'grey';
        normalSpeed.style.color = '#ffffff';
        fastSpeed.style.backgroundColor = '#ffffff';
        fastSpeed.style.color = 'grey';
    }, false);

    repeatBtn.addEventListener("click", function() {
        if (!activeRepeat) {
            document.getElementsByTagName("video")[0].setAttribute("loop","");
            repeatBtn.style.backgroundImage = 'url(images/repeat-enabled.png)';
            activeRepeat = true;
        }
        else {
            document.getElementsByTagName("video")[0].removeAttribute("loop");
            repeatBtn.style.backgroundImage = 'url(images/repeat-disabled.png)';
            activeRepeat = false;
        }
    }, false);

    timeLineRange.addEventListener("change", function() {
        video.currentTime = timeLineRange.value;
    }, false);

    timeLineRange.addEventListener("mousedown", function() {
        video.pause();
        playPauseBtn.style.backgroundImage = 'url(images/play.png)';
    }, false);

    timeLineRange.addEventListener("mouseup", function() {
        video.play();
        playPauseBtn.style.backgroundImage = 'url(images/pause.png)';
    }, false);
}
