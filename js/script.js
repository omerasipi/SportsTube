
//Funktion für SlowMotion in Videos
function slowMotion(id) {
    //Holt sich id des Sliders und bearbeitet dies zur Id des Videos
    var videoId = id.replace('range','vid');
    //Holt sich das zu SlowMotionende video
    videoId = document.getElementById(videoId);
    //Setzt die neue Play Geschwindigkeit fest
    videoId.playbackRate = document.getElementById(id).value;
}
