<?php
  include_once 'databaseConnection.php';

  //add song information to database

  $name = mysqli_real_escape_string($conn, $_POST['songName']);
  $img = mysqli_real_escape_string($conn, $_FILES['songImage']['name']);
  $file = mysqli_real_escape_string($conn, $_FILES['songFile']['name']);

  $sql = "INSERT INTO songs (songName, songImage, songFile) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL error";
  } else {
    mysqli_stmt_bind_param($stmt, "sss", $name, $img, $file);
    mysqli_stmt_execute($stmt);
  }

function uploadAudio(){
  $target_dir = "../audio/";
  $target_file = $target_dir . basename($_FILES["songFile"]["name"]);
  $uploadOk = 1;

  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["songFile"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["songFile"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
}

function uploadImage(){
  $target_dir = "../img/";
  $target_file = $target_dir . basename($_FILES["songImage"]["name"]);
  $uploadOk = 1;

  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["songImage"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["songImage"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
}

uploadAudio();
uploadImage();
  echo "<script>location='../index.php'</script>";
