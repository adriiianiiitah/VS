<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="../apple-touch-icon.png">
        <link rel="icon" href="favicon.ico"  type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
			<!--[if lt IE 9]>
            <script src="../js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/styles.css">
<<<<<<< HEAD
        <link rel="stylesheet" href="css/main.css">
        
        <script type="text/javascript" src="js/jquery.min.js"></script>
=======
        
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/formulario.js"></script>

>>>>>>> origin/master
	</head>
	<body>
		<?php 
      require_once('views/menu.html');
    ?>
<<<<<<< HEAD
	<div class="container padding">	
	<form class="form" method="post" role="form" onsubmit="return validate()" data-validate>
		<fieldset>
			<legend>Create Account </legend>
			<div>
				<div class="form-group">								
					<label for="name" class="sr-only">Name</label>
					<input class="form-control " id="name" name="name" type="text" placeholder="Name" data-required data-name/>
				</div>
			</div>
			<div>
				<div class="form-group">				
					<label for="lastname" class="sr-only">Last name</label>
					<input class="form-control" id="lastname" name="lastname" type="text" placeholder="Last Name" data-required data-lastname/>
				</div>
			</div>
			<div>
				<div class="form-group">												
					<label for="email" class="sr-only"> Email Address</label>
					<input class="form-control" type="text" name="email" id="email" placeholder="Email" data-required data-email/>
				</div>
			</div>
			<div>
				<div class="form-group">
				<label for="password" class="sr-only"> Password </label>
				<input class="form-control" type="password" name="password" placeholder="Password" data-required data-password data-samepassword/>
				</div>
			</div>
			<div>
				<div class="form-group">
				<label type="Confirmpass" class="sr-only">Confirm password</label>
				<input class="form-control" type="password" name="Confirmpass" placeholder="Confirm Passsword" data-required data-password data-samepassword/>
				</div>
			</div>
			<label for="gender">Gender</label>
			<div class="form-group">
				<input type="radio" name="gender" id="fem" value="Female" checked="checked"/>							
			<div>
					<label for="fem">Female</label>
				<input type="radio" name="gender" id="male" value="Male"/>				
				<label for="male">Male</label>				
				</div>
			</div>
			<div>
				<div class="form-group">
				<label for="bday" class="sr-only">Birthday</label>
				<input class="form-control" type="date" id="bday" name="bday" placeholder="Birthday DD/MM/YY" data-required/>
				</div>
			</div>
			<div>
				<div class="form-group">
				<label for="phone" class="sr-only">Phone Number</label>
	         <input class="form-control" type="tel" id="phone" name="phone" placeholder="Phone Number" data-required/>
			</d	iv>
			</div>
			<div class="form-group">
				 <button class="btn btn-lg" type="submit">Create Account</button>
=======
	<div class="login">	
	<form class="form" method="post" role="form">
		<fieldset>
			<legend>Create Account </legend>
			<div class="form-group">								
					<label for="name" class="sr-only">Name</label>
					<input class="form-control input-lg" id="name" name="name" type="text" required="required" placeholder="Name"/>
			</div>
			<div class="form-group">				
					<label for="lastname" class="sr-only">Last name</label>
					<input class="form-control input-lg" id="lastname" name="lastname" type="text" placeholder="Last Name"/>
			</div>
			<div class="form-group">												
					<label for="email" class="sr-only"> Email Address</label>
					<input class="form-control input-lg" type="email" name="email" id="email" required="required" placeholder="Email"/>
			</div>
			<div class="form-group">
				<label for="password" class="sr-only"> Password </label>
				<input class="form-control input-lg" type="password" name="password" id="password" required="required" placeholder="Password"/>
			</div>
			<div class="form-group">
				<label type="Confirmpass" class="sr-only">Confirm password</label>
				<input class="form-control input-lg" type="password" name="Confirmpass" id="Confirmpass" required="required" placeholder="Confirm Passsword"/>
			</div>
			<label for="gender">Gender</label>
			<div class="form-group">
				<input type="radio" name="gender" id="fem" value="Female"/>							
				<label for="fem">Female</label>
				<input type="radio" name="gender" id="male" value="Male"/>				
				<label for="male">Male</label>				
			</div>
			<div class="form-group">
				<label for="bday" class="sr-only">Birthday</label>
				<input class="form-control input-lg" type="date" id="bday" name="bday" required="required" placeholder="Birthday DD/MM/YY"/>
			</div>
			<div class="form-group">
				<label for="phone" class="sr-only">Phone Number</label>
	         <input class="form-control input-lg" type="tel" id="phone" name="phone" placeholder="Phone Number" />
			</div>
			<div class="form-group">
				 <button class="btn btn-lg" type="submit" id="btnSubmit" onclick="checkForm(this)">Create Account</button>
>>>>>>> origin/master
			</div>
		</fieldset>
	</form>
	</div>
<<<<<<< HEAD
    <footer>
        <nav class="col-md-3 pull-right" id="social-icons">
=======
	<footer>
        <nav class="col-md-3" id="social-icons">
>>>>>>> origin/master
          <ul>
            <li><a href="https://www.facebook.com/"><img class="social-icon" src="img/fb.png"></a></li>
            <li><a href="https://twitter.com/"><img class="social-icon" src="img/tw.png"></a></a></li>
            <li><a href="https://www.google.com.mx/"><img class="social-icon" src="img/gg.png"></a></a></li>
            <li><a href="contacto.php"><img class="social-icon" src="img/mail.png"></a></a></li>
          </ul>
        </nav>
<<<<<<< HEAD
      </footer> 
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/validator.js"></script>
    </body>
</html>
=======
</html>
>>>>>>> origin/master
