<?php

//Return all songs with isVisible set to 1
$sql = "SELECT * FROM songs WHERE isVisible = 1";
$result = mysqli_query($conn, $sql);
$datas = array();
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $datas[] = $row;
  }
}
