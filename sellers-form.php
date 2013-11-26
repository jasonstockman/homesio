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


    <div id="title">
      <div class="container">
        <h1>5-Minute Seller's Form</h1>
      </div>
    </div>

<div id="main" class="buyers-guide">

    <div class="container">

     <div class="row">

      <div class="col-md-8">
      <h2>List your home</h2>
      <p>We understand listing your home can be a daunting task. We've created a simple and fast 5-minute form to help you get started. Once you've submitted our form, a local realtor will be assigned to you for free to followup with you and get more details about your listing. Currently, we only server sellers in Orange County, CA.</p>
      <br>
      
<form role="form" class="well">
  <div class="row">
  <div class="form-group col-md-6">
    <label for="sellerFirstName">First Name</label>
    <input type="text" class="form-control" id="sellerFirstName" placeholder="First Name">
  </div>
  <div class="form-group col-md-6">
    <label for="sellerLastName">Last Name</label>
    <input type="text" class="form-control" id="sellerLastName" placeholder="Last Name">
  </div>
  </div>
  <div class="row">
  <div class="form-group col-md-6">
    <label for="sellerEmail">Email</label>
    <input type="email" class="form-control" id="sellerEmail" placeholder="Email">
  </div>
  <div class="form-group col-md-6">
    <label for="sellerPhone">Phone</label>
    <input type="tel" class="form-control" id="sellerPhone" placeholder="Phone">
  </div>
</div>

  <hr>

  <div class="row">
  <div class="form-group col-md-6">
    <label for="sellerAddress">Street Address</label> 
    <input type="text" class="form-control" id="sellerAddress" placeholder="Street Address">
  </div>
  <div class="form-group col-md-6">
    <label for="sellerZipcode">Zipcode</label>
    <input type="tel" class="form-control" id="sellerZipcode" placeholder="Zipcode">
  </div>

  <div class="col-md-12">
    ??? Other stuff goes here.<br>
  <button type="submit" class="btn btn-primary pull-right">Submit</button>
  </div>
</div>
</form>      

    </div>
    <div class="col-md-4">  

derp

    </div>
    </div><!--/.row-->

    <br><br>
 
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
