<?php setcookie('homesio', 'true', time()+360000); ?>
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
    <script src="https://app.userapp.io/js/userapp.client.js"></script>

    <script>
      UserApp.initialize({ appId: "5283611bee23d" });

function signup() {
  // This will sign up the user
  UserApp.User.save({
    login: document.getElementById("username").value,
    first_name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    password: document.getElementById("password").value
  }, function(error, user) {
    if (error) {
      alert("Error: " + error.message);
    } else {
      window.location = 'register';
    }
  });
  
  return false;
}      
    </script>

  </head>

  <body class="narrow">

    <div class="navbar-wrapper">
      <div class="container">

        <?php include('inc/nav.php'); ?>

      </div>
    </div>

    <div id="title">
      <div class="container">
             <h1>Sign Up</h1>

      </div>
    </div>

<div id="main">

    <div class="container">

      <div class="row">
      <div class="col-md-4 col-md-push-4">

      <h3>Sign Up for Homes.io</h3>

      <form class="form well" onsubmit="return signup()">
      <div class="form-group">
      <input id="name" type="text" class="form-control" placeholder="Name" autofocus>
      </div>  
      <div class="form-group">    
      <input id="username" type="text" class="form-control" placeholder="Username" required>
      </div>  
      <div class="form-group">    
      <input id="email" type="text" class="form-control" placeholder="Email address" required>
      </div>  
      <div class="form-group">    
      <input id="password" type="password" class="form-control" placeholder="Password" required>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Create my account</button>
      </form>

      <br>
      <p class="text-center">Already have an account? <a href="login">Sign In</a>.</p>
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
