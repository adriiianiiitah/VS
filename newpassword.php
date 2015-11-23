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
	<div class="container padding">
    	<form class="form" method="post" role="form" onsubmit="return validate()" data-validate>
        	<div class="form-group">
        		<label for="password" class="sr-only"> Password </label>
        		<input class="form-control input-lg" type="password" name="password" placeholder="Password" data-password/>
        	</div>
        	<div class="form-group">
        		<label for="newpassword" class="sr-only">New Password </label>
        		<input class="form-control input-lg" type="password" name="newpassword" placeholder="New Password" data-password data-samepassword/>
        	</div>
        	<div class="form-group">
        		<label for="Confirmpass" class="sr-only">Confirm password</label>
        		<input class="form-control input-lg" type="password" name="Confirmpass" placeholder="Confirm Passsword" data-password data-samepassword/>
        	</div>
        	<div class="form-group">
        		 <button class="btn btn-lg" type="submit">Update Password</button>
        	</div>
    	</form>
	</div>
	<footer>
        <nav class="col-md-3 pull-right" id="social-icons">
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