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

        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css">
        <!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es&callback=iniciar"></script>-->


        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
    </head>
    <body onload="initialize()">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php 
      require_once('views/menu.html');
    ?>
    <div class="container-contact">
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-12">
            <h2>Contact us</h2>

            <form class="form" role="form" onsubmit="return validate()" data-validate>
              <div class="row">
                <div class="col-md-6">
                  <div>
                  <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Name" data-required data-name>
                  </div>
                  </div>
                  <div>
                  <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Last Name" data-required data-lastname>
                  </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div>
                  <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Email" data-required data-email>
                  </div>
                  </div>
                  <div>
                  <div class="form-group">
                    <input type="tel" class="form-control input-lg" placeholder="Phone Number" data-required>
                  </div>
                  </div>
                </div>

                <div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" rows="3" data-required></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-lg" type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>
        <hr>
      </div> <!-- /container -->  
      <div id="map_canvas" style="width:100%; height:900px"></div>
    </div>   
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/validator.js"></script>
         <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <script type="text/javascript">
          function initialize() {
            var latlng = new google.maps.LatLng(57.0442, 9.9116);
            var settings = {
                zoom: 15,
                center: latlng,
                mapTypeControl: true,
                mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                navigationControl: true,
                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
        };
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
