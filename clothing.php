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
    <div class="container">
      <section id="filter">
        <form role="form" class="form-horizontal">
          <div class="form-select">
            <label class="sr-only" for="category">Category</label>
            <div class="col-md-offset-1 col-md-2 col-xs-12">
              <select id="category" name="category" class="form-control">
                <option value="">Category</option>
                <option value="bras">Bras</option>
                <option value="panties">Panties</option>
                <option value="sleep">Sleep</option>
                <option value="lingerie">Lingerie</option>
                <option value="swim">Swim</option>
                <option value="sport">Sport</option>
                <option value="clothing">Clothing</option>
              </select> 
            </div>
          </div>

          <div class="form-select">
            <label class="sr-only" for="color">Color</label>
            <div class="col-md-2 col-xs-12">
              <select id="color" name="color" class="form-control">
                <option value="">Color</option>
                <option value="black">Black</option>
                <option value="white">White</option>
                <option value="red">Red</option>
                <option value="sky-blue">Sky-blue</option>
                <option value="purple">Purple</option>
              </select>  
            </div>
          </div>

          <div class="form-select">
            <label class="sr-only" for="size">Size</label>
            <div class="col-md-2 col-xs-12">
              <select id="size" name="size" class="form-control">
                <option value="">Size</option>
                <option value="xs">XS</option>
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
              </select>  
            </div>
          </div>

          <div class="form-select">
            <label class="sr-only" for="range">Range</label>
            <div class="col-md-2 col-xs-12">
              <select id="range" name="range" class="form-control">
                <option value="">Price min</option>
                <option value="0">0</option>
                <option value="100">100</option>
                <option value="1000">1000</option>
              </select>  
            </div>
          </div>

          <div class="form-select">
            <label class="sr-only" for="to">To</label>
            <div class="col-md-2 col-xs-12">
              <select id="to" name="to" class="form-control">
                <option value="">Price max</option>
                <option value="0">0</option>
                <option value="100">100</option>
                <option value="1000">1000</option>
              </select>  
            </div>
          </div>
        </form>
      </section>

      <section id="catalog" class="row">
        <a href="#">
          <figure class="col-sm-4">
            <img src="admin/images/Pajamas/pajama1.jpg" alt="article 1"/>
            <figcaption>
              <p>Price: $49.50</p>
            </figcaption>
          </figure>
        </a>

        <a href="#">
          <figure class="col-sm-4">
            <img src="admin/images/Pajamas/pajama1.jpg" alt="article 1"/>
            <figcaption>
              <p>Price: $49.50</p>
            </figcaption>
          </figure>
        </a>

        <a href="#">
          <figure class="col-sm-4">
            <img src="admin/images/Pajamas/pajama1.jpg" alt="article 1"/>
            <figcaption>
              <p>Price: $49.50</p>
            </figcaption>
          </figure>
        </a>

        <a href="#">
          <figure class="col-sm-4">
            <img src="admin/images/Pajamas/pajama1.jpg" alt="article 1"/>
            <figcaption>
              <p>Price: $49.50</p>
            </figcaption>
          </figure>
        </a>

        <a href="#">
          <figure class="col-sm-4">
            <img src="admin/images/Pajamas/pajama1.jpg" alt="article 1"/>
            <figcaption>
              <p>Price: $49.50</p>
            </figcaption>
          </figure>
        </a>
         
        <a href="#">
          <figure class="col-sm-4">
            <img src="admin/images/Pajamas/pajama1.jpg" alt="article 1"/>
            <figcaption>
              <p>Price: $49.50</p>
            </figcaption>
          </figure>
        </a>

        <a href="#">
          <figure class="col-sm-4">
            <img src="admin/images/Pajamas/pajama1.jpg" alt="article 1"/>
            <figcaption>
              <p>Price: $49.50</p>
            </figcaption>
          </figure>
        </a>

        <a href="#">
          <figure class="col-sm-4">
            <img src="admin/images/Pajamas/pajama1.jpg" alt="article 1"/>
            <figcaption>
              <p>Price: $49.50</p>
            </figcaption>
          </figure>
        </a>

        <a href="#">
          <figure class="col-sm-4">
            <img src="admin/images/Pajamas/pajama1.jpg" alt="article 1"/>
            <figcaption>
              <p>Price: $49.50</p>
            </figcaption>
          </figure>
        </a>

        <a href="#">
          <figure class="col-sm-4">
            <img src="admin/images/Pajamas/pajama1.jpg" alt="article 1"/>
            <figcaption>
              <p>Price: $49.50</p>
            </figcaption>
          </figure>
        </a>

        <a href="#">
          <figure class="col-sm-4">
            <img src="admin/images/Pajamas/pajama1.jpg" alt="article 1"/>
            <figcaption>
              <p>Price: $49.50</p>
            </figcaption>
          </figure>
        </a>

        <a href="#">
          <figure class="col-sm-4">
            <img src="admin/images/Pajamas/pajama1.jpg" alt="article 1"/>
            <figcaption>
              <p>Price: $49.50</p>
            </figcaption>
          </figure>
        </a>
      </section>
    </div>   
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
