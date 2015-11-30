<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!--[if lt IE 9]>
      <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
  <![endif]-->
  
  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/owl.transitions.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<?php 
    require_once('views/menu.html');
  ?>
  <div class="container height-80 padding">
  	<form class="form-horizontal col-lg-7" method="post" role="form" onsubmit="return validate()" data-validate>
      <fieldset>
        <legend><span class="btn-info">Recovery password (Step 3)</span></legend>
        <div class="form-group padding-left-15">
          <p>Introduce your credentials.</p>
        </div>

        <div class="form-group">
          <label for="newpassword" class="col-lg-2 control-label text-left">New Password </label>
          <div class="col-lg-10">
            <input class="form-control" type="password" name="newpassword" placeholder="New Password" data-password data-samepassword/>
          </div>
        </div>

        <div class="form-group">
          <label type="Confirmpass" class="col-lg-2 control-label text-left">Confirm password</label>
          <div class="col-lg-10">
            <input class="form-control" type="password" name="Confirmpass" placeholder="Confirm Passsword" data-password data-samepassword/>
          </div>
        </div>

      	<div class="form-group padding-left-15">
          <button class="btn btn-orange" type="submit"><i class="fa fa-check"></i> Save </button>
        </div>
      </fieldset>
  	</form>
  </div>
<footer>
      <nav class="col-md-3" id="social-icons">
        <ul>
          <li><a href="https://www.facebook.com/"><img class="social-icon" src="img/fb.png"></a></li>
          <li><a href="https://twitter.com/"><img class="social-icon" src="img/tw.png"></a></a></li>
          <li><a href="https://www.google.com.mx/"><img class="social-icon" src="img/gg.png"></a></a></li>
          <li><a href="contacto.php"><img class="social-icon" src="img/mail.png"></a></a></li>
        </ul>
      </nav>
    </footer>  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>
      <script src="js/vendor/bootstrap.min.js"></script>
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>
      <script src="js/validator.js"></script>     
  </body>
</html>