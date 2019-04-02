<!-- Landing page  -->
<div class="container-fluid card-container">
  <div class="row">
    <div class="col-12 col-sm-10 offset-sm-1">
      <hr class="landing-hr-top">
    </div>
    <div class="col-10 col-sm-8 col-md-6 col-lg-4 offset-1 offset-sm-2 offset-md-3 offset-lg-4 text-center">
      <h1 class="landing-title">Beats</h1>
    </div>
    <div class="col-1 col-sm-2 col-md-3 col-lg-4">
    </div>
    <?php include_once "./php/songForm.php" ?>
    <div class="container-fluid">
      <div class="row justify-content-center"  id="inside-card-container">
        <!-- cards go here -->
        <?php include_once "./php/printCards.php" ?>
      </div>
    </div>
    <div class="col-10 offset-1">
      <hr class="landing-hr">
    </div>

  </div>
</div>
