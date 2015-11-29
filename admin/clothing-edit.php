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
                <form id="" class="form-horizontal form-label-left" onsubmit="return validate()" data-validate>
                  <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <div class="profile_img">
                      <div id="crop-avatar">
                        <!-- Current avatar -->
                        <div>
                          <img id="image-file" src="../img/categories/category.png" alt="category" class="img-thumbnail">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4 col-xs-12" for="image">Image
                      </label>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="file" id="image" name="image" class="form-control col-md-7 col-xs-12 btn" accept="image/jpg,image/png" data-image/>
                      </div>
                    </div>

                    <div class="profile_img">
                      <div id="crop-avatar">
                        <!-- Current avatar -->
                        <div>
                          <img id="thumbnail-file" src="../img/categories/category.png" alt="category" class="img-thumbnail">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-4 col-xs-12" for="texture">Texture
                      </label>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="file" id="texture" name="texture" class="form-control col-md-7 col-xs-12 btn" accept="image/jpg,image/png" data-thumbnail/>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12"> 
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-12 col-xs-12" for="code">Code <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <input type="text" id="code" name="code" class="form-control col-md-7 col-xs-12" data-required data-code />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-12 col-xs-12" for="name">Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12" data-required data-name/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-12 col-xs-12" for="category">Category <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <select id="category" name="category" class="form-control col-md-7 col-xs-12" data-required>
                          <option value="">Select an option</option>
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
                      <label class="control-label col-md-3 col-sm-12 col-xs-12" for="subcategory">Sub Category <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <select id="subcategory" name="subcategory" class="form-control col-md-7 col-xs-12" data-required>
                          <option value="">Select an option</option>
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
                      <label class="control-label col-md-3 col-sm-12 col-xs-12" for="name">Color <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <select id="color" name="color" class="form-control col-md-7 col-xs-12" data-required>
                          <option value="">Select an option</option>
                          <option value="yellow">Yellow</option>
                          <option value="white">White</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-12 col-xs-12" for="multicolor">Multicolor <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="radio">
                          <label>
                            <input type="radio" class="checkbox" checked value="no" id="yes" name="multicolor">Yes
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" class="checkbox" value="yes" id="no" name="multicolor">No
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-12 col-xs-12" for="sizes">Sizes <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="sizes" data-checked>XS
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="sizes" data-checked>S
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="sizes" data-checked>M
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="sizes" data-checked>L
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="sizes" data-checked>XL
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-12 col-xs-12" for="description">Description <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                          <textarea id="description" name="description" class="form-control col-md-7 col-xs-12" rows="3"  data-required data-description></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-12 col-xs-12" for="price">Price <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <input type="number" id="price" name="price" min="0" step="0.5" class="form-control col-md-7 col-xs-12" data-required data-money />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-12 col-xs-12" for="stock">Strock <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <input type="number" id="stock" name="stock" min="0" step="1" class="form-control col-md-7 col-xs-12" data-required data-integer/>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-danger">Cancel</button>
                      </div>
                    </div>
                  </div>
                </form>
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

