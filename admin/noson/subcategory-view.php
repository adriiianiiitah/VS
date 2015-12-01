         <?php 
      require_once('views/navigation.html');
    ?>
    <div id="page-users" class="right-side">
      <div class="content">
        <div class="row">
          <div class="col-xs-12">
            <section class="panel">
              <header class="panel-heading">
                <h3>Subcategory</h3>
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
                          <th scope="row">Subcategory :</th>
                          <td>Bra</td>
                        </tr>
                        <tr>
                          <th scope="row">Categories :</th>
                          <td>Bra</td>
                        </tr>
                        <tr>
                          <th scope="row">Description :</th>
                          <td>All bras</td>
                        </tr>
                        <tr>
                          <th scope="row">Action </th>
                          <td class=" last">
                            <a href="subcategory-view.php" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View </a>
                            <a href="subcategory-edit.php" class="btn btn-warning btn-xs"> <i class="fa fa-pencil"></i> Edit </a>
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