//Scroll to top of page
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//Confirmation for delete of card
function areYouSure(){
  confirm('Are you sure?');
}

//Toggle play/pause of audio file and play button icon
function toggleSound(clickedId) {
  var buttonId = "button" + clickedId;
  var iconId = "icon" + clickedId;
  var audioElem = document.getElementById(clickedId);
  var players = document.getElementsByTagName('audio');
  // toggle icon and play element if paused
  if (audioElem.paused) {
    var icons = document.getElementsByClassName("play-icon");
    for (var i = 0; i < icons.length; i++){
      var iconButtons = icons[i];
      iconButtons.classList.toggle('fa-play')
    }
    // iterate through all players and pause if they're playing
    for(var i = 0; i < players.length; i++){
      var audio = players[i];
      if (audio.duration > 0 && !audio.paused) {
        audio.pause();
        document.getElementById(iconId).classList.toggle('fa-play');
      }
    }
    // iterate through all icons and toggle to play icon
    document.getElementById(iconId).classList.toggle('fa-pause');
    audioElem.play();
  }else{
    // toggle icon and pause element if playing
    document.getElementById(iconId).classList.toggle('fa-play');
    audioElem.pause();
  }
}
