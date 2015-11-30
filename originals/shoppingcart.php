<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" href="favicon.ico"  type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
			<!--[if lt IE 9]>
            <script src="../js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/main.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
   </head>
	<body>
		<?php 
      require_once('views/menu.html');
    ?>
    <div class="container-fluid margin-top-50">
      <section id="shopping-cart">
  			<form class="form" method="post" >
  				<fieldset> 
            <legend><span class="btn-info">Shopping cart</span></legend>
  					<div class="row header-table">
              <div class="col-xs-2">
                <h4>Article</h4>
              </div>
              <div class="col-xs-3">
                <h4>Quantity</h4>
              </div>
              <div class="col-xs-2">
                <h4>Price</h4>
              </div>
              <div class="col-xs-3">
                <h4>Sub-total</h4>
              </div>
              <div class="col-xs-2">
                
              </div>   
            </div>
            <div class="row">
              <div class="col-xs-2">
              <article>
                <figure>
                  <figcaption>
                    <h4 class="name">Shortie Panty</h4>
                  </figcaption>
                  <img src="admin/images/lingerie/V449712.jpg" alt="article 1"/>
                </figure>
              </article>
              
              </div>
              <div class="col-xs-3">
                <span>2553</span>
              </div>
              <div class="col-xs-2">
                <span>$14.50</span>
              </div>
              <div class="col-xs-3">
                <span>123456789</span>
              </div>   
              <div class="col-xs-2">
                <a href="#"><span class="btn btn-red"><i class="fa fa-trash"></i></span></a>
              </div>   
            </div>
  				</fieldset>
  			</form>
		</section>    
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
        <script src="js/owl.carousel.js"></script>
        <script src="js/validator.js"></script>
    </body>
</html>