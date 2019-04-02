<?php
include "databaseConnection.php";

//Set isVisible to false
$delSql = "UPDATE songs SET isVisible=0 WHERE id='$_GET[id]'";

if(mysqli_query($conn, $delSql))
  header('Location: ../index.php');
else
  echo "Unable to delete";

 ?>
