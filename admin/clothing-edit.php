    <?php 
      require_once('views/navigation.html');
    ?>
    <div id="page-users" class="right-side">
      <div class="content">
        <div class="row">
          <div class="col-xs-12">
            <section class="panel">
              <header class="panel-heading">
                <h3>Clothing</h3>
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
                    <form id="" class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="code">Code <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="code" name="code" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category">Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="category" name="category" required="required" class="form-control col-md-7 col-xs-12">
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
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subcategory">Sub Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="subcategory" name="subcategory" required="required" class="form-control col-md-7 col-xs-12">
                            <option value="pushup">Push-Up</option>
                            <option value="coverage">Full/Perfect Coverage</option>
                            <option value="demi">Demi</option>
                            <option value="unlined">Unlined</option>
                            <option value="strapless">Strapless & Multi-Way</option>
                            <option value="bralette">Bralette</option>
                            <option value="sport">Sport Bra</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Color <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="color" name="color" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="multicolor">Multicolor <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="radio">
                            <label>
                              <input type="radio" class="checkbox" checked value="no" id="yes" name="multicolor"> Yes
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" class="checkbox" value="yes" id="no" name="multicolor"> No
                            </label>
                          </div>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sizes">Sizes <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="sizes" class="flat" checked="checked"> XS
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="sizes" class="flat" checked="checked"> S
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="sizes" class="flat" checked="checked"> M
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="sizes" class="flat" checked="checked"> L
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="sizes" class="flat" checked="checked"> XL
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea id="description" name="description" required="required" class="form-control col-md-7 col-xs-12" rows="3"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Price <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="price" name="price" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stock">Strock <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="stock" name="stock" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="texture">Texture
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="texture" name="texture" class="form-control col-md-7 col-xs-12 btn">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="image" name="image" class="form-control col-md-7 col-xs-12 btn">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
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

