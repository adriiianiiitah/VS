         <?php 
      require_once('views/navigation.html');
    ?>
    <div id="page-users" class="right-side">
      <div class="content">
        <div class="row">
          <div class="col-xs-12">
            <section class="panel">
              <header class="panel-heading">
                <h3>Category</h3>
              </header>
              <div class="panel-body">
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <div class="profile_img">
                      <div id="crop-avatar">
                        <!-- Current avatar -->
                        <div>
                          <img src="../img/categories/category.png" alt="category" class="img-thumbnail">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12"> 
                    <table class="table table-hover">
                      <tbody>
                        <tr>
                          <th scope="row">No.</th>
                          <td>1</td>
                        </tr>
                        <tr>
                          <th scope="row">Category :</th>
                          <td>Bra</td>
                        </tr>
                        <tr>
                          <th scope="row">Description :</th>
                          <td>All bras</td>
                        </tr>
                        <tr>
                          <th scope="row">Action </th>
                          <td class=" last">
                            <a href="category-view.php" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View </a>
                            <a href="category-edit.php" class="btn btn-warning btn-xs"> <i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"> <i class="fa fa-eraser"></i> Delete </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
      <!--<div class="container-fluid" ></div>-->
    </div>
    <?php 
      require_once('views/footer.html');
    ?>
</body>
</html>




      <?php 
        require_once('views/navigation.html');
      ?>
       
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
                Categories
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Category</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php 
        require_once('views/footer.html');
      ?>
</body>
</html>