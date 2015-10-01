      <?php 
        require_once('views/navigation.html');
      ?>
       
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
                Clothes
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Clothes</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
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
                    <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="example" class="table table-striped responsive-utilities jambo_table">
                    <thead>
                      <tr class="headings">
                        <th>No. </th>
                        <th>Name </th>
                        <th>Last name </th>
                        <th>Email </th>
                        <th>Daye of birthday </th>
                        <th>Phone </th>
                        <th class=" no-link last"><span class="nobr">Action</span>
                        </th>
                      </tr>
                      </thead>

                      <tbody>
                        <tr class="even pointer">
                          <th>1</th>
                          <th>Laura </th>
                          <th>Rojas </th>
                          <th>laurita@cimaff.com </th>
                          <th>2015/05/12</th>
                          <th>36481502</th>
                          <td class=" last">
                            <a href="clothing-view.php" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View </a>
                            <a href="clothing-edit.php" class="btn btn-warning btn-xs"> <i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"> <i class="fa fa-eraser"></i> Delete </a>
                          </td>
                        </tr>
                       
                        <tr class="odd pointer">
                          <th>2</th>
                          <th>Demmy </th>
                          <th>River </th>
                          <th>Driver@mail.com </th>
                          <th>2015/11/09</th>
                          <th>34655655</th>
                          <td class=" last">
                            <a href="clothing-view.php" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View </a>
                            <a href="clothing-edit.php" class="btn btn-warning btn-xs"> <i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"> <i class="fa fa-eraser"></i> Delete </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php 
        require_once('views/footer.html');
      ?>

  <script>
    $(document).ready(function () {
      $('input.tableflat').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      });
    });

    var asInitVals = new Array();
    $(document).ready(function () {
      var oTable = $('#example').dataTable({
        "oLanguage": {
            "sSearch": "Search all columns:"
        },
        "aoColumnDefs": [
            {
              'bSortable': false,
              'aTargets': [0]
            } //disables sorting for column one
          ],
            'iDisplayLength': 12,
            "sPaginationType": "full_numbers",
            "dom": 'T<"clear">lfrtip',
            "tableTools": {
              "sSwfPath": "../js/copy_csv_xls_pdf.swf"
            }
        });
        $("tfoot input").keyup(function () {
          /* Filter on the column based on the index of this element's parent <th> */
          oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
        });
        $("tfoot input").each(function (i) {
          asInitVals[i] = this.value;
        });
        $("tfoot input").focus(function () {
          if (this.className == "search_init") {
            this.className = "";
            this.value = "";
          }
        });
        $("tfoot input").blur(function (i) {
          if (this.value == "") {
            this.className = "search_init";
            this.value = asInitVals[$("tfoot input").index(this)];
          }
        });
      });
  </script>
</body>
</html>