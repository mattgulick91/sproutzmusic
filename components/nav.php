<?php session_start(); ?>

<!-- Navigation page that shows logout link if logged in  -->

<nav class="navbar navbar-expand-md navbar-dark fixed-top nav-bottom-border">
  <a class="navbar-brand" onclick="topFunction();">
    <img src="img/SproutzWhite.png" alt="">
  </a>
  <button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarResponsive">
    <ul class="navbar-nav mr-auto mt-3">
      <li class="nav-item active">
        <a class="nav-link home-link" onclick="topFunction();">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#socials">Socials</a>
      </li>
      <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        echo '
        <li class="nav-item">
          <a class="nav-link" href="php/logout.php">Log Out</a>
        </li>
        ';
      } ?>
    </ul>
  </div>
</nav>
