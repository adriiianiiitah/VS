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
    <div class="main">
      <div class="row">
			<form class="form" method="post" >
				<fieldset> 
					<legend>Shopping cart</legend>
					<div>
						<table id="shopping-cart-table" class="data-table cart-table table table-no-more" >
							<thead>
								<tr>
									<th></th>
									<th> <span>Product name</span> </th>
									<th> <span>Unitary price</span></th>
									<th> <span>Quantity</span></th>
									<th> <span>Sub-total</span></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tbody>
							<tfoot>
								<tr>
										<td colspan="3"><a href="clothing.php">Continuar comprando</a>	</td>
										<td><button type="button">Quitar productos del carrito</button></td>
										<td><button type="button">Comprar</button></td>
								</tr>
							</tfoot>
							
						</table>
					</div>
				</fieldset>
			</form>
		</div>    
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