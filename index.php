<?php include('inc/init.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/ico/favicon.png">

  <title>Homes.io</title>

  <?php include('inc/head.php'); ?>
</head>

<body>

  <div class="navbar-wrapper">
    <div class="container">

      <?php include('inc/nav.php'); ?>

    </div>
  </div>

  <?php include('inc/pages/home_hero.php'); ?>

  <div id="main">
    <div class="container">


      <h3>Latest Listings <div class="listings-pager btn-group btn-group-xs pull-right"></div></h3>

      <div class="wrap cycle-slideshow" id="latest-listings">      
        <?php include('data/php/homes.php'); ?>
      </div>

      <br>

      <?php include('inc/pages/home_search.php'); ?>

      <br>

      <div class="row">
        <div class="col-md-12">
          <?php include('inc/pages/home_features.php'); ?>
        </div>
      </div>

    </div>

  </div><!--/#main-->

  <?php include('inc/footer.php'); ?>

<!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="/js/jquery.js"></script>
  <script src="/js/bootstrap.min.js"></script>
</body>
</html>
