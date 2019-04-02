<?php
session_start();

//If logged in, show form to upload a new song

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  echo '
  <div class="container-fluid">
    <div class="row justify-content-center align-content-center">
      <div class="add-card-form text-center">
        <form class="col-6r file-upload-form" enctype="multipart/form-data" id="form1" method="post" action="php/uploadDb.php">
          !!! Make sure images are 300 x 300 and song is mp3 !!!<br>
          Song Name: <input class="active" type="text" id="songName" name="songName" value="" maxlength="16" placeholder="up to 16 characters"><br>
          Song File: <input type="file" id="songFile" name="songFile" accept=".ogg,.flac,.mp3" required="required"><br>
          Song Image: <input type="file" id="songImage" name="songImage" accept=".jpg,.png,.gif" required="required"><br>
          <input class="file-submit" type="submit" name="submit"/>
        </form>
      </div>
    </div>
  </div>';
}
