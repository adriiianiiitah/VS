<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css">
        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php 
      require_once('views/menu.html');
    ?>
    <aside id="filter">
      <form role="form">
        <div class="form-group">
          <label for="category">Category</label>
          <select id="category" name="category" required="required" class="form-control col-md-7 col-xs-12">
            <option value="bras">Bras</option>
            <option value="panties">Panties</option>
            <option value="sleep">Sleep</option>
            <option value="lingerie">Lingerie</option>
            <option value="swim">Swim</option>
            <option value="sport">Sport</option>
            <option value="clothing">Clothing</option>
          </select> 
        </div>
        <div class="form-group">
          <label for="color">Color</label>
          <select id="color" name="color" required="required" class="form-control col-md-7 col-xs-12">
            <option value="black">Black</option>
            <option value="white">White</option>
            <option value="red">Red</option>
            <option value="sky-blue">Sky-blue</option>
            <option value="purple">Purple</option>
          </select> 
        </div>

        <div class="form-group">
          <label for="size">Size</label>
          <select id="size" name="size" required="required" class="form-control col-md-7 col-xs-12">
            <option value="xs">XS</option>
            <option value="s">S</option>
            <option value="m">M</option>
            <option value="l">L</option>
            <option value="xl">XL</option>
          </select> 
        </div>

        <div class="form-group">
          <label for="price">Range</label>
          <select id="size" name="size" required="required" class="form-control col-md-7 col-xs-12">
            <option value="0">0</option>
            <option value="100">100</option>
            <option value="1000">1000</option>
          </select>
        </div>

        <div class="form-group">
          <label for="price">To</label>
          <select id="size" name="size" required="required" class="form-control col-md-7 col-xs-12">
            <option value="0">1000</option>
            <option value="100">10000</option>
            <option value="1000000">1000000</option>
          </select>
        </div><br>
    </aside>

    <div class="container-articles">
      <section class="catalog">
        <div class="container">
          <div class="row">
          <a href="#">
            <div class="col-sm-6 col-md-4 col-lg-3 img-article"> 
              <ul class="icons-article">
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
              <img src="admin/images/Pajamas/pajama1.jpg" class="offert"/>
              <div class="description">
                <span>Price: $49.50</span>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="col-sm-6 col-md-4 col-lg-3 img-article"> 
              <ul class="icons-article">
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
              <img src="admin/images/Pajamas/pajama2.jpg" class="offert"/>
              <div class="description">
                <span>Price: $49.50</span>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="col-sm-6 col-md-4 col-lg-3 img-article"> 
              <ul class="icons-article">
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
              <img src="admin/images/Pajamas/pajama3.jpg" class="offert"/>
              <div class="description">
                <span>Price: $49.50</span>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="col-sm-6 col-md-4 col-lg-3 img-article"> 
              <ul class="icons-article">
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
              <img src="admin/images/Pajamas/pajama4.jpg" class="offert"/>
              <div class="description">
                <span>Price: $49.50</span>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="col-sm-6 col-md-4 col-lg-3 img-article"> 
              <ul class="icons-article">
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
              <img src="admin/images/Pajamas/pajama5.jpg" class="offert"/>
              <div class="description">
                <span>Price: $49.50</span>
              </div>
            </div>
          </a>
           
          <a href="#">
            <div class="col-sm-6 col-md-4 col-lg-3 img-article"> 
              <ul class="icons-article">
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
              <img src="admin/images/Pajamas/pajama6.jpg" class="offert"/>
              <div class="description">
                <span>Price: $49.50</span>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="col-sm-6 col-md-4 col-lg-3 img-article"> 
              <ul class="icons-article">
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
              <img src="admin/images/Pajamas/pajama7.jpg" class="offert"/>
              <div class="description">
                <span>Price: $49.50</span>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="col-sm-6 col-md-4 col-lg-3 img-article"> 
              <ul class="icons-article">
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
              <img src="admin/images/Pajamas/pajama8.jpg" class="offert"/>
              <div class="description">
                <span>Price: $49.50</span>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="col-sm-6 col-md-4 col-lg-3 img-article"> 
              <ul class="icons-article">
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
              <img src="admin/images/Pajamas/pajama9.jpg" class="offert"/>
              <div class="description">
                <span>Price: $49.50</span>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="col-sm-6 col-md-4 col-lg-3 img-article"> 
              <ul class="icons-article">
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
              <img src="admin/images/Pajamas/pajama10.jpg" class="offert"/>
              <div class="description">
                <span>Price: $49.50</span>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="col-sm-6 col-md-4 col-lg-3 img-article"> 
              <ul class="icons-article">
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
              <img src="admin/images/Pajamas/pajama11.jpg" class="offert"/>
              <div class="description">
                <span>Price: $49.50</span>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="col-sm-6 col-md-4 col-lg-3 img-article"> 
              <ul class="icons-article">
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
              <img src="admin/images/Pajamas/pajama12.jpg" class="offert"/>
              <div class="description">
                <span>Price: $49.50</span>
              </div>
            </div>
          </a>
            
          </div> 
        </div> <!-- /container -->  
      </section>
    </div>   
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
