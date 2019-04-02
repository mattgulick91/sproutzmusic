<?php
include_once "databaseConnection.php";
session_start();

//Secret login page for owner


$username = "SELECT username FROM users WHERE ID = 2";
$password = "SELECT password FROM users WHERE ID = 2";

$unresult = mysqli_query($conn, $username);
$pwdresult = mysqli_query($conn, $password);

$unm = mysqli_fetch_assoc($unresult);
$pwd = mysqli_fetch_assoc($pwdresult);


//if username and password match database username and password then log in
if (isset($_POST['username']) && isset($_POST['password'])) {
  if ($_POST['username'] == $unm['username'] && $_POST['password'] == $pwd['password']){
    $_SESSION['loggedin'] = true;
    echo 'success';
  }
}

//if login successful, redirect to homepage
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  header("Location: ../index.php");
}
?>

<html>
  <body>
    <form method="post" action="XBMW4LQC3sWztJ3uumsUVZGHCpkVy3ah.php">
      Username:<br>  <input type="text" name="username"><br>
      Password:<br> <input type="password" name="password"><br>
      <input type="submit" value="Login">
    </form>
  </body>
</html>
