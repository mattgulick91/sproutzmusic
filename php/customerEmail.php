<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sproutz Test</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.2.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="../css/master.css">
    <link rel="stylesheet" href="../css/master.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top nav-bottom-border">
      <a class="navbar-brand" onclick="topFunction();">
        <img src="../img/SproutzWhite.png" alt="">
      </a>
    </nav>

    <div class="container-fluid card-container">
      <div class="row">
        <div class="col-10 offset-1">
          <hr class="landing-hr">
        </div>
        <div class="container-fluid">
          <div class="row justify-content-center"  id="inside-card-container">

            <div class="add-card-form text-center mt-3">
              <form class="col-6r file-upload-form" enctype="multipart/form-data" id="email-form" method="post" action="customerEmail.php">
                Please enter the email you would like your file sent to:<br>
                <input class="active" type="text" id="first-email" name="first-email" value="" placeholder="Enter email"><br>
                <input class="active" type="text" id="second-email" name="second-email" value="" placeholder="Re-enter email"><br>
                <input class="file-submit" type="submit" name="submit"/>
              </form>
            </div>

          </div>
        </div>
        <div class="col-10 offset-1">
          <hr class="landing-hr">
        </div>
      </div>
    </div>

    <?php
    session_start();

      //check if two user emails match and send audio file
      if (isset($_POST['first-email'], $_POST['second-email'])){
        if ($_POST['first-email'] === $_POST['second-email']){
          echo "it worked.";
          $filename = $_SESSION['songName'];
          $path = '../audio';
          $file = $path . "/" . $filename;

          $mailto = $_POST['first-email'];
          $subject = 'Your file from Sproutz.';
          $message = 'Here is your file from Sproutz.  Use it wisely...';

          $content = file_get_contents($file);
          $content = chunk_split(base64_encode($content));

          $separator = md5(time());

          $eol = "\r\n";

          $headers = "From: " . $eol;
          $headers .= "MIME-Version: 1.0" . $eol;
          $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
          $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
          $headers .= "This is a MIME encoded message." . $eol;

          //Email body
          $body = "--" . $separator . $eol;
          $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
          $body .= "Content-Transfer-Encoding: 8bit" . $eol;
          $body .= $message . $eol;

          //Email attachment
          $body .= "--" . $separator . $eol;
          $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
          $body .= "Content-Transfer-Encoding: base64" . $eol;
          $body .= "Content-Disposition: attachment" . $eol;
          $body .= $content . $eol;
          $body .= "--" . $separator . "--";

          //Send Email
          if (mail($mailto, $subject, $body, $headers)) {
            header("Location: ../index.php");
          } else {
            echo "mail send ... ERROR!";
          }
        } else {
          echo '<script language="javascript"> alert("Please make sure both entries match."); </script>';
        }
      }

     ?>



    <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
  </body>
</html>
