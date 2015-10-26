      <?php 
        require_once('views/navigation.html');
      ?>
      <div id="page-users" class="right-side">
      <div class="content">
        <div class="row">
          <div class="col-xs-12">
            <section class="panel">
              <header class="panel-heading">
                <h3>Clothing Table</h3>
                <div class="pull-right">
                  <ul class="files">
                    <li><button class="fa fa-file-text-o" title="CVS"></button></li>
                    <li><button class="fa fa-file-excel-o" title="Excel"></button></li>
                    <li><button class="fa fa-file-pdf-o" title="PDF"></button></li>
                    <li><button class="fa fa-print" title="Print"></button></li>
                  </ul>
                </div>
              </header>
              <div class="panel-body">
                <table class="table table-bordered table-hover table-condensed">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Code </th>
                      <th>Name </th>
                      <th>Category </th>
                      <th>Size </th>
                      <th>Price </th>
                      <th>Color </th>
                      <th>Multicolor </th>
                      <th>Texture </th>
                      <th>Stock </th>
                      <th>Popularity </th>
                      <th class=" no-link last"><span class="nobr">Action</span></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Code </th>
                      <th>Name </th>
                      <th>Category </th>
                      <th>Size </th>
                      <th>Price </th>
                      <th>Color </th>
                      <th>Multicolor </th>
                      <th>Texture </th>
                      <th>Stock </th>
                      <th>Popularity </th>
                      <th class=" no-link last"><span class="nobr">Action</span></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <th>1</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a href="clothing-view.php"><i class="fa fa-eye"></i></a>
                        <a href="clothing-edit.php"><i class="fa fa-pencil"></i></a>
                        <a href="#"><i class="fa fa-trash-o"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="panel-body">
                <div class="pagination pull-right">
                  <ul>
                    <li><a href="#"><<</a></li>
                    <li><a href="#"><</a></li>
                    <li class="active">
                      <a href="#">1</a>
                    </li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">></a></li>
                    <li><a href="#">>></a></li>
                  </ul>
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