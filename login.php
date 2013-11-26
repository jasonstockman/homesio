<?php
setcookie('homesio', 'true', time()+360000);
include('inc/init.php');
$error = 'false';
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
if (!empty($username)&&!empty($password)) {
  try {
    $api->user->login(array("login" => $username, "password" => $password));
    // User is logged in, save result.token in session
    header( 'Location: http://homes.io/home' ) ;
  }catch(\UserApp\Exceptions\ServiceException $exception){
    $error = 'true';
    $errorMessage = $exception->getMessage();
    // Something went wrong...
    // Check $exception->getErrorCode() or $exception->getMessage().
    // Might just be a wrong username/password.
  }
}
?>
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

    <div id="title">
      <div class="container">
             <h1>Sign In</h1>

      </div>
    </div>

<div id="main">

    <div class="container">


      <div class="row">
      <div class="col-md-4 col-md-push-4">
      <h3>Sign In to Homes.io</h3>
      <?php if ($error=='true'): ?>
      <div class="alert alert-danger">
        <?php echo $errorMessage; ?>
      </div>
      <?php endif; ?>
      <form class="form well" action="" method="POST">
      <div class="form-group">
      <input name="username" id="username" type="text" class="form-control" placeholder="Username" required autofocus>
      </div>
      <div class="form-group">
      <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
      </form>
      <br>
      <p class="text-center">Need an account? <a href="register">Sign Up for free.</a></p>
      </div>
      </div>
    
</div>

  </div>


<?php include('inc/footer.php'); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
