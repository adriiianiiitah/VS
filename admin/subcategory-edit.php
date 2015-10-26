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
                    <form id="" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-12 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-12 col-xs-12" for="sizes">Categories <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="sizes">Bra
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="sizes">Panties
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="sizes">Pajamas
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="sizes">Sport
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="sizes">Lingerie
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-12 col-xs-12" for="description">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <textarea id="description" name="description" required="required" class="form-control col-md-7 col-sm-12 col-xs-12" class="form-control" rows="3"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-12 col-xs-12" for="image">Image
                        </label>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <input type="file" id="image" name="image" class="form-control col-md-7 col-sm-12 col-xs-12 btn">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
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
</body>
</html>