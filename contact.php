<?php include('inc/init.php'); ?>
<?php
//If the form is submitted
if(isset($_POST['submit'])) {

        //Check to make sure that the name field is not empty
        if(trim($_POST['contactname']) == '') {
                $hasError = true;
        } else {
                $name = trim($_POST['contactname']);
        }

        //Check to make sure that the subject field is not empty
        if(trim($_POST['subject']) == '') {
                $hasError = true;
        } else {
                $subject = trim($_POST['subject']);
        }

        //Check to make sure comments were entered
        if(trim($_POST['message']) == '') {
                $hasError = true;
        } else {
                if(function_exists('stripslashes')) {
                        $comments = stripslashes(trim($_POST['message']));
                } else {
                        $comments = trim($_POST['message']);
                }
        }

        //If there is no error, send the email
        if(!isset($hasError)) {
                $emailTo = 'jason18241@gmail.com'; // Put your own email address here
                $body = "Name: $name \n\nEmail: $email \n\nPhone Number: $phone \n\nSubject: $subject \n\nComments:\n $comments";
                $headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

                mail($emailTo, $subject, $body, $headers);
                $emailSent = true;
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
    <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>
    <script src="js/bootstrap-contact.js" type="text/javascript"></script>

  </head>

  <body>

    <div class="navbar-wrapper">
      <div class="container">

        <?php include('inc/nav.php'); ?>

      </div>
    </div>


    <div id="title">
      <div class="container">
             <h1>Contact Us</h1>

      </div>
    </div>

<div id="main">

    <div class="container">

<div class="row">
      <div class="col-md-4 col-md-push-4">
        <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
          <fieldset>
            <legend>Send Us a Message</legend>

            <?php if(isset($hasError)) { //If errors are found ?>
              <p class="alert alert-danger">Please check if you've filled all the fields with valid information and try again.</p>
            <?php } ?>

            <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
              <div class="alert alert-success">
                <p><strong>Message Sent Successfully!</strong></p>
                <p>Thanks for reaching out, <strong><?php echo $name;?></strong>! Your message was sent successfully and we&rsquo;ll be in touch soon.</p>
              </div>
            <?php } ?>

            <div class="form-group">
              <label for="name">Your Name<span class="help-required">*</span></label>
              <input type="text" name="contactname" id="contactname" value="" class="form-control required" role="input" aria-required="true" />
            </div>

            <div class="form-group">
              <label for="phone">Your Phone Number</label>
              <input type="text" name="phone" id="phone" value="" class="form-control" role="input" />
            </div>


            <div class="form-group">
              <label for="email">Your Email</label>
              <input type="text" name="email" id="email" value="" class="form-control email" role="input" />
            </div>

            <div class="form-group">
              <label for="subject">Subject<span class="help-required">*</span></label>
              <select name="subject" id="subject" class="form-control required" role="select" aria-required="true">
                <option></option>
                <option>One</option>
                <option>Two</option>
              </select>
            </div>

            <div class="form-group">
              <label for="message">Message<span class="help-required">*</span></label>
              <textarea rows="6" name="message" id="message" class="form-control required" role="textbox" aria-required="true"></textarea>
            </div>

            <div class="actions">
              <input type="submit" value="Send" name="submit" id="submitButton" class="btn btn-primary pull-right" title="Click here to submit your message!" />
              <input type="reset" value="Clear Form" class="btn btn-default" title="Remove all the data from the form." />
            </div>
          </fieldset>
        </form>
      </div><!-- col -->
    </div><!-- row -->

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
