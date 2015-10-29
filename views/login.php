<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="../apple-touch-icon.png">
        <link rel="icon" href="../favicon.ico"  type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
			<!--[if lt IE 9]>
            <script src="../js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
        
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">	
        <link rel="stylesheet" href="../css/styles.css">
        
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/formulario.js"></script>
        <script src="../js/vendor/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>

	</head>
	<body>
		<?php 
      require_once('menu.html');
    ?>
	<div class="login">	
	<form class="form" method="post" role="form">
		<fieldset>
			<legend> Login </legend>
			<div class="form-group">												
					<label for="email" class="sr-only"> Email Address</label>
					<input class="form-control input-lg" type="email" name="email" id="email" placeholder="Email"/>
			</div>
			<div class="form-group">
				<label for="password" class="sr-only"> Password </label>
				<input class="form-control input-lg" type="password" name="password" id="password" placeholder="Password"/>
			</div>
			<button class="btn btn-lg" type="submit" id="btnSubmit">Login</button>
			<button class="btn btn-lg" type="submit">Facebook</button>
			<button class="btn btn-lg" type="submit">Twitter</button>
		</fieldset>
	</form>
	</div>
	<footer>
        <nav class="col-md-3" id="social-icons">
          <ul>
            <li><a href="https://www.facebook.com/"><img class="social-icon" src="../img/fb.png"></a></li>
            <li><a href="https://twitter.com/"><img class="social-icon" src="../img/tw.png"></a></a></li>
	            <li><a href="https://www.google.com.mx/"><img class="social-icon" src="../img/gg.png"></a></a></li>
            <li><a href="../contact.php"><img class="social-icon" src="../img/mail.png"></a></a></li>
          </ul>
        </nav>
	</footer>       
</html>