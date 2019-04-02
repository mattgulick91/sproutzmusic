<?php
session_start();

//iterate through array and print cards to page with array info

for ($i = count($datas) - 1; $i >= 0; $i--){
  $id = $datas[$i]['ID'];
  $name = $datas[$i]['songName'];
  $file = $datas[$i]['songFile'];
  $img = $datas[$i]['songImage'];
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    echo "<div class=\"card col-xl-2 col-lg-3 col-md-4 col-sm-10 col-10\">
      <audio id=" . $id . " src=\"audio/" . $file . "\"></audio>
      <div class=\"img-box\">
        <button class=\"play-btn\" id=" . $id . " onclick=\"toggleSound(this.id);\"><i id=\"icon" . $id . "\" class=\"play-icon fa fa-play\"></i></button>
        <img class=\"img-fluid card-img\" src=\"img/" . $img . "\" alt=\"Album Art\">
      </div>
      <div class=\"card-body\">
        <h4 class=\"card-title\">" . $name . "</h4>
        <a href=php/hideCard.php?id=".$id." class=\"btn btn-delete\" onclick=\"areYouSure();\">Delete</a>
      </div>
    </div>";
  } else {
  echo "<div class=\"card col-xl-2 col-lg-3 col-md-4 col-sm-10 col-10\">
    <audio id=" . $id . " src=\"audio/" . $file . "\"></audio>
    <div class=\"img-box\">
      <button class=\"play-btn\" id=" . $id . " onclick=\"toggleSound(this.id);\"><i id=\"icon" . $id . "\" class=\"play-icon fa fa-play\"></i></button>
      <img class=\"img-fluid card-img\" src=\"img/" . $img . "\" alt=\"Album Art\">
    </div>
    <div class=\"card-body\">
      <h4 class=\"card-title\">" . $name . "</h4>
      <form action=\"php/setFileName.php\" method=\"post\">
        <input type=\"hidden\" name=\"song-name\" value=".$file.">
        <input type=\"submit\" class=\"btn btn-buy\" border=\"0\" name=\"submit\" value=\"Buy for \$30\">
    </form>
    </div>
  </div>";
  }
}
