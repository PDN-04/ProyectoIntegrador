$(document).ready(body);

function body() {
    var video = document.getElementsByTagName("video")[0];
    var audio = document.getElementsByTagName("audio")[0];
    playPauseBtn = document.getElementById("playPause");
    muteBtn = document.getElementById("muteUnmute");
    colorFondoplayPauseBtn = document.getElementsByTagName("span")[0];
    colorFondomuteBtn = document.getElementsByTagName("span")[1];

    video.removeAttribute("controls");

    playPauseBtn.addEventListener("click", function() {
        if (video.paused) {
            video.play();
            playPauseBtn.innerHTML = "&#9825;";
        } else {
            video.pause();
            playPauseBtn.innerHTML = "&#9733;";
        }
    }, false);

    video.addEventListener('pause', function() {
        playPauseBtn.classList.remove('playing');
    }, false);

    muteBtn.addEventListener('click', function() {
        if (audio.muted) {
            audio.play();
            audio.muted = false;
            muteBtn.innerHTML = "&#9762;";
        } else {
            audio.pause();
            audio.muted = true;
            muteBtn.innerHTML = "&#128266;";
        }
    }, false);

    video.addEventListener('volumeChange', function() {
        if (video.muted) {
            muteBtn.classList.add('muted');
        } else {
            muteBtn.classList.remove('muted');
        }
    }, false);
}
