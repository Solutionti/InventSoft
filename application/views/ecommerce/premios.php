<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>premios</title>
    <?php require_once("componentes/head.php"); ?>
</head>
<body  style="background-color: black;">
<?php require_once("componentes/menu.php"); ?>
<div class="shape-container overflow-hidden">
      <div class="bg-black" style="background-image: url(./assets/svg/components/wave-pattern-light.svg);">
        <div class="container content-space-1 content-space-t-md-3 content-space-b-md-4">
          <div class="position-relative w-lg-75 text-center mx-lg-auto">
            <div class="mb-7">
              <h1 class="display-4 text-white">We are coming <span class="text-warning">soon!</span></h1>
              <p class="lead text-white">Currently we are working on our brand new website and will be lunching soon. Do not miss it, subscribe below to keep updated.</p>
            </div>
            <div class="js-countdown row">
              <div class="col-3">
                <h2 class="js-cd-days h1 text-white"></h2>
                <h4 class="text-white-70 mb-0">Days</h4>
              </div>
              <div class="col-3">
                <h2 class="js-cd-hours h1 text-white"></h2>
                <h4 class="text-white-70 mb-0">Hours</h4>
              </div>
              <div class="col-3">
                <h2 class="js-cd-minutes h1 text-white"></h2>
                <h4 class="text-white-70 mb-0">Mins</h4>
              </div>
              <div class="col-3">
                <h2 class="js-cd-seconds h1 text-white"></h2>
                <h4 class="text-white-70 mb-0">Secs</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="shape shape-bottom zi-1" style="margin-bottom: -.125rem">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
          <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
        </svg>
      </div>
      </div>
       <?php require_once("componentes/footer.php"); ?>
     <?php require_once("componentes/modal.php"); ?>
     <?php require_once("componentes/scripts.php"); ?>

</body>
</html>