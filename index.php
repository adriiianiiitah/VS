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
        <link rel="stylesheet" href="css/normalize.css">
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
    <body class="body-home">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php 
      require_once('views/menu.html');
    ?>
    <section id="slider">
      <div id="owl-demo" class="owl-carousel">
        <div><img src="admin/images/slider/slider01.jpg"></div>
        <div><img src="admin/images/slider/slider01.jpg"></div>
        <div><img src="admin/images/slider/slider01.jpg"></div>
        <div><img src="admin/images/slider/slider01.jpg"></div>
        <div><img src="admin/images/slider/slider01.jpg"></div>
        <div><img src="admin/images/slider/slider01.jpg"></div>
        <div><img src="admin/images/slider/slider01.jpg"></div>
        <div><img src="admin/images/slider/slider01.jpg"></div>
      </div>
    </section>

    <div class="container-fluid">
      <div class="row">
        <aside id="events" class="col-md-3 col-xs-12 col-sm-12" >
          <a class="event" href="#">
            <figure>
              <img src="admin/images/events/ofert01.jpg" alt="Offert 1"/>
              <figcaption>
                <h2>Title 1</h2>
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                  accusantium doloremque laudantium.
                </p>
              </figcaption>
            </figure>
          </a>

          <a class="event" href="#">
            <figure>
              <img src="admin/images/events/ofert01.jpg" alt="Offert 1"/>
              <figcaption>
                <h2>Title 2</h2>
                <p>
                  Veritatis et quasi architecto beatae vitae 
                  dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit 
                  aspernatur aut odit aut fugit, sed quia consequuntur.
                </p>
              </figcaption>
            </figure>
          </a>
        </aside>

        <section id="promos" class="col-md-9 col-xs-12 col-sm-12">
              <a class="promo" href="#">
                <figure class="col-sm-4">
                  <img src="admin/images/events/event01.jpg" alt="Offert 1"/>
                  <figcaption>
                    <h2>Title 2</h2>
                    <p>
                      Ipsam voluptatem quia voluptas sit 
                      aspernatur aut odit aut fugit, sed quia consequuntur.
                    </p>
                  </figcaption>
                </figure>
              </a>
              <a class="promo" href="#">
                <figure class="col-sm-4">
                  <img src="admin/images/events/event02.jpg" alt="Offert 1"/>
                  <figcaption>
                    <h2>Title 2</h2>
                    <p>
                      Architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit 
                      aspernatur aut odit aut fugit.
                    </p>
                  </figcaption>
                </figure>
              </a>
              <a class="promo" href="#">
                <figure class="col-sm-4">
                  <img src="admin/images/events/event03.jpg" alt="Offert 1"/>
                  <figcaption>
                    <h2>Title 2</h2>
                    <p>
                      Quasi architecto beatae vitae ipsam voluptatem quia voluptas sit 
                      aspernatur aut odit aut fugit, sed quia consequuntur.
                    </p>
                  </figcaption>
                </figure>
              </a>
              <a class="promo" href="#">
                <figure class="col-sm-4">
                  <img src="admin/images/events/event04.jpg" alt="Offert 1"/>
                  <figcaption>
                    <h2>Title 2</h2>
                    <p>
                      Veritatis et quasi architecto beatae vitae 
                      dicta consequuntur.
                    </p>
                  </figcaption>
                </figure>
              </a>
              <a class="promo" href="#">
                <figure class="col-sm-4">
                  <img src="admin/images/events/event05.jpg" alt="Offert 1"/>
                  <figcaption>
                    <h2>Title 2</h2>
                    <p>
                      Nemo enim ipsam voluptatem quia voluptas sit 
                      aspernatur aut odit aut fugit, sed quia consequuntur.
                    </p>
                  </figcaption>
                </figure>
              </a>
              <a class="promo" href="#">
                <figure class="col-sm-4">
                  <img src="admin/images/events/event06.jpg" alt="Offert 1"/>
                  <figcaption>
                    <h2>Title 2</h2>
                    <p>
                      Eoluptatem quia voluptas sit 
                      aspernatur aut odit aut fugit, sed quia consequuntur.
                    </p>
                  </figcaption>
                </figure>
              </a>
        </section>
      </div>
    </div> <!-- /container --> 
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
        <script src="js/owl.carousel.js"></script>
        <script src="js/validator.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
        $(document).ready(function() {
 
          $("#owl-demo").owlCarousel({
            autoPlay : 3000,
            stopOnHover : true,
            navigation:true,
            paginationSpeed : 1000,
            goToFirstSpeed : 2000,
            singleItem : true,
            autoHeight : true,
            transitionStyle:"fade"
          });
         
        });
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
