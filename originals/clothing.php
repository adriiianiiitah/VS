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
    <div class="modal fade" id="modalItem" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="login">
      
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header modal-header-skyblue">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">View</h4>
            </div>
            <div class="modal-body">
              <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                <figure>
                  <img src="admin/images/lingerie/V449712.jpg" alt="article 1"/>
                  <figcaption>
                    <p class="btn btn-orange btn-block">Price: $49.50</p>
                  </figcaption>
                </figure>
              </div>

              <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12"> 
                <h3>Shortie Panty</h3>
                <nav class="filters">
                  <ul>
                    <li><span>Sizes</span></li>
                    <li>
                      <ul>
                        <li><a href="#">XS</a></li>
                        <li><a href="#">S</a></li>
                        <li><a href="#">XS</a></li>
                        <li><a href="#">M</a></li>
                        <li><a href="#">L</a></li>
                        <li><a href="#">XL</a></li>
                      </ul>
                    </li>
                    <li>
                      <ul>
                        <li><a href="#">30A</a></li>
                        <li><a href="#">30B</a></li>
                        <li><a href="#">32A</a></li>
                        <li><a href="#">32B</a></li>
                        <li><a href="#">32C</a></li>
                        <li><a href="#">34A</a></li>
                        <li><a href="#">34B</a></li>
                        <li><a href="#">34C</a></li>
                        <li><a href="#">36B</a></li>
                        <li><a href="#">36C</a></li>
                        <li><a href="#">38A</a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
                 <nav class="filters">
                  <ul>
                    <li><span>Textures</span></li>
                    <li>
                      <ul class="textures">
                        <li><a href="#"><img src="admin/images/colors/yellow.png"/></a></li>
                        <li><a href="#"><img src="admin/images/colors/red.png"/></a></li>
                        <li><a href="#"><img src="admin/images/colors/green.png"/></a></li>
                        <li><a href="#"><img src="admin/images/colors/sky-blue.png"/></a></li>
                        <li><a href="#"><img src="admin/images/colors/black.png"/></a></li>
                        <li><a href="#"><img src="admin/images/colors/white.png"/></a></li>
                        <li><a href="#"><img src="admin/images/colors/pink.png"/></a></li>
                        <li><a href="#"><img src="admin/images/colors/purple.png"/></a></li>
                        <li><a href="#"><img src="admin/images/colors/cyan.png"/></a></li>
                        <li><a href="#"><img src="admin/images/colors/orange.png"/></a></li>
                        <li><a href="#"><img src="admin/images/colors/fucsia.png"/></a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
                <div>
                  <h3>Description</h3>
                  <p>Seriously smooth under everything, this bikini gives you the coverage you want, with a supersoft waistband and a body-loving mid rise. Panties perfect for every day, with a comfy fit and sleek feel.</p>
                </div>
                <div>
                  <h3>Popularity</h3>
                  <p class="popularity"><i class="fa fa-heart"></i> <i class="fa fa-heart"></i> <i class="fa fa-heart"></i></p>
                </div>
                <form class="form-inline" role="form">
                  <h3>Quantity</h3>
                  <div class="form-group">
                    <label class="sr-only" for="id">Contraseña</label>
                    <input type="hidden" id="id" name="id" value="1" />
                    <label class="sr-only" for="quantity">Contraseña</label>
                    <input type="number" step="1" min="1" name="quantity" id="quantity"  class="form-control"  value="1" />
                  </div>
                  <button type="submit" href="#" class="btn btn-skyblue"><i class="fa fa-shopping-cart"></i> Add to cart</span></button>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid margin-top-50">
      
      <aside id="filter-bar" class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
        <h3>Categories</h3>
        <nav class="categories">
          <ul>
            <li><span>Categories</span></li>
            <li>
              <ul class="categories">
                <li><a href="#">Subcategories</a></li>
                <li><a href="#">Bras</a></li>
                <li><a href="#">Panties</a></li>
                <li><a href="#">Sleep</a></li>
                <li><a href="#">Lingerie</a></li>
                <li><a href="#">Swim</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <h3>Filters</h3>
        <nav class="remove-filters">
          <ul>
            <li><a href="#"><span class="btn btn-red"><i class="fa fa-trash"></i></span> Color: ficsia</a></li>
            <li><a href="#"><span class="btn btn-red"><i class="fa fa-trash"></i></span> Size: 32B</a></li>
          </ul>
        </nav>
        <button class="btn btn-red btn-lg btn-block">Remove filters</button>
        <nav class="filters">
          <ul>
            <li><span>Sizes</span></li>
            <li>
              <ul>
                <li><a href="#">XS</a></li>
                <li><a href="#">S</a></li>
                <li><a href="#">XS</a></li>
                <li><a href="#">M</a></li>
                <li><a href="#">L</a></li>
                <li><a href="#">XL</a></li>
              </ul>
            </li>
            <li>
              <ul>
                <li><a href="#">30A</a></li>
                <li><a href="#">30B</a></li>
                <li><a href="#">32A</a></li>
                <li><a href="#">32B</a></li>
                <li><a href="#">32C</a></li>
                <li><a href="#">34A</a></li>
                <li><a href="#">34B</a></li>
                <li><a href="#">34C</a></li>
                <li><a href="#">36B</a></li>
                <li><a href="#">36C</a></li>
                <li><a href="#">38A</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <h3>Colors</h3>
        <nav class="filters">
          <ul>
            <li><span>Colors</span></li>
            <li>
              <ul class="colors">
                <li><a href="#"><img src="admin/images/colors/yellow.png"/></a></li>
                <li><a href="#"><img src="admin/images/colors/red.png"/></a></li>
                <li><a href="#"><img src="admin/images/colors/green.png"/></a></li>
                <li><a href="#"><img src="admin/images/colors/sky-blue.png"/></a></li>
                <li><a href="#"><img src="admin/images/colors/black.png"/></a></li>
                <li><a href="#"><img src="admin/images/colors/white.png"/></a></li>
                <li><a href="#"><img src="admin/images/colors/pink.png"/></a></li>
                <li><a href="#"><img src="admin/images/colors/purple.png"/></a></li>
                <li><a href="#"><img src="admin/images/colors/cyan.png"/></a></li>
                <li><a href="#"><img src="admin/images/colors/orange.png"/></a></li>
                <li><a href="#"><img src="admin/images/colors/fucsia.png"/></a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <nav class="filters">
          <ul>
            <li><span>Prices</span></li>
            <li><a href="#">$0 - $100</a></li>
            <li><a href="#">$100 - $200</a></li>
            <li><a href="#">$200 - $300</a></li>
            <li><a href="#">$300 - $400</a></li>
            <li><a href="#">$400 - $500</a></li>
            <li><a href="#">$500 - $1000</a></li>
          </ul>
        </nav>
      </aside>
      <section id="catalog" class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
        <section id="filter" class="row">
          <div class="pull-rigth">
            <ul class="pagination">
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">></a></li>
            </ul>
          </div>
        </section>
        <article class="item col-sm-3">
          <a href="#" data-toggle="modal" data-target="#modalItem">
            <figure>
              <figcaption>
                <h4 class="name">Shortie Panty</h4>
              </figcaption>
              <img src="admin/images/lingerie/V449712.jpg" alt="article 1"/>
              <figcaption>
                <p class="btn btn-orange">Price: $49.50</p>
              </figcaption>
            </figure>
          </a>
          <ul>
            <li><a href="#" class="btn btn-skyblue"><i class="fa fa-heart"></i> I wish</a></li>
            <li><a href="#" class="btn btn-skyblue"><i class="fa fa-shopping-cart"></i> Buy</a></li>
          </ul>
        </article>

        <article class="item col-sm-3">
          <a href="#" data-toggle="modal" data-target="#modalItem">
            <figure>
              <figcaption>
                <h4 class="name">Shortie Panty</h4>
              </figcaption>
              <img src="admin/images/lingerie/V449712.jpg" alt="article 1"/>
              <figcaption>
                <p class="btn btn-orange">Price: $49.50</p>
              </figcaption>
            </figure>
          </a>
          <ul>
            <li><a href="#" class="btn btn-skyblue"><i class="fa fa-heart"></i> I wish</a></li>
            <li><a href="#" class="btn btn-skyblue"><i class="fa fa-shopping-cart"></i> Buy</a></li>
          </ul>
        </article>

        <article class="item col-sm-3">
          <a href="#" data-toggle="modal" data-target="#modalItem">
            <figure>
              <figcaption>
                <h4 class="name">Shortie Panty</h4>
              </figcaption>
              <img src="admin/images/lingerie/V449712.jpg" alt="article 1"/>
              <figcaption>
                <p class="btn btn-orange">Price: $49.50</p>
              </figcaption>
            </figure>
          </a>
          <ul>
            <li><a href="#" class="btn btn-skyblue"><i class="fa fa-heart"></i> I wish</a></li>
            <li><a href="#" class="btn btn-skyblue"><i class="fa fa-shopping-cart"></i> Buy</a></li>
          </ul>
        </article>

        <article class="item col-sm-3">
          <a href="#" data-toggle="modal" data-target="#modalItem">
            <figure>
              <figcaption>
                <h4 class="name">Shortie Panty</h4>
              </figcaption>
              <img src="admin/images/lingerie/V449712.jpg" alt="article 1"/>
              <figcaption>
                <p class="btn btn-orange">Price: $49.50</p>
              </figcaption>
            </figure>
          </a>
          <ul>
            <li><a href="#" class="btn btn-skyblue"><i class="fa fa-heart"></i> I wish</a></li>
            <li><a href="#" class="btn btn-skyblue"><i class="fa fa-shopping-cart"></i> Buy</a></li>
          </ul>
        </article>
      </section>
    </div>   
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
