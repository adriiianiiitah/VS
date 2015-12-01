    <?php 
      require_once('views/navigation.html');
    ?>
    <div id="page-offerts" class="right-side">
      <div class="content">
        <div class="row">
          <div class="col-xs-12">
            <section class="panel">
              <header class="panel-heading">
                <h3>Offerts</h3>
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
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4 col-xs-12" for="image">Image
                      </label>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="file" id="image" name="image" class="form-control col-md-7 col-xs-12 btn">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12"> 
                    <form id="" class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-12 col-xs-12" for="code">Code <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <input type="text" id="code" name="code" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-12 col-xs-12" for="name">Quantity <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <input type="text" id="quantity" name="quantity" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-12 col-xs-12" for="item">Item <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <select id="item" name="item" required="required" class="form-control col-md-7 col-xs-12">
                            <option value="">Select an option</option>
                            <option value="1">ITM123-9</option>
                            <option value="2">PAN456-C</option>
                            <option value="3">BRA4854-Z</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-12 col-xs-12" for="date_start">From <span class="required">*</span>
                        </label>
                        <div>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class='input-group date' id='datetimepickerdate_start'>
                              <input type="text" id="date_start" name="date_start" required="required" class="form-control col-md-7 col-xs-12">
                              <span class="input-group-addon">
                                <span class="fa fa-calendar">
                                </span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-12 col-xs-12" for="date_end">To <span class="required">*</span>
                        </label>
                        <div>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class='input-group date' id='datetimepickerdate_end'>
                              <input type="text" id="date_end" name="date_end" required="required" class="form-control col-md-7 col-xs-12">
                              <span class="input-group-addon">
                                <span class="fa fa-calendar">
                                </span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-12 col-xs-12" for="price">Price <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <input type="number" id="price" name="price" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>
                          </div>
                      </div>
                    </form>
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
  <script src="../js/moment-with-locales.js"></script>
  <script src="../js/bootstrap-datetimepicker.js"></script>
  <script src="../js/scripts.js"></script>
</body>
</html>

