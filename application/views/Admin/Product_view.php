<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $this->load->view('Admin/Header');
    ?>
    <title>Neptune Lights | Products</title>
</head>
<body>
<div class="container-scroller">
    <?php 
      $this->load->view('Admin/Navbar_view');
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php 
        $this->load->view('Admin/Sidebar');
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
             <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Upload new product</h4>
                  <form class="forms-sample" id="create_new_product_form" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Select Main Category</label>
                      <select class="form-select" aria-label="Default select example" name="select_main_cat_id" id="select_main_cat" style="margin-bottom:20px;" required>
                        <option selected>Open this select menu</option>
                        <?php 
                          foreach($categories as $row)
                          {
                            ?>
                              <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?
                          }
                        ?>
                      </select>
                      <label>Select Sub Category</label>
                      <select class="form-select" aria-label="Default select example" name="select_sub_cat_id" id="select_sub_cat" style="margin-bottom:20px;" required>
                        <option selected>Open this select menu</option>
                        <?php 
                          foreach($subcategories as $sub_cat)
                          {
                            ?>
                              <option value="<?php echo $sub_cat['id']; ?>" data-main-id="<?php echo $sub_cat['main_cat'] ?>"><?php echo $sub_cat['name']; ?></option>
                            <?
                          }
                        ?>
                      </select>
                      <label for="exampleInputName1">Title</label>
                      <input type="text" class="form-control" id="cat_name" name="product_name" placeholder="Name" required style="margin-bottom:10px;" required>
                      <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea class="form-control" placeholder="Enter product description" name="product_description" id="product_textarea" rows="4" required></textarea>
                      </div>
                      <label for="upload_img"></label>
                      <input type="file" accept=".jpg" class="form-control" id="product_img" name="product_img" placeholder="Upload image" required multiple/>
                    </div>
                    <button type="submit" class="btn btn-primary me-2" style="color:white;" id="submit_new_product_btn">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="container">
              <div class="row">
                <?php 
                  if(!empty($product_data))
                  {
                    foreach($product_data as $row)
                    {
                      ?>
                        <div class="col">
                          <div class="card">
                            <div class="card-header" style="padding:0px;">
                              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <?php 
                                    $array = unserialize($row['img_paths']);
                                    foreach($array as $key => $value)
                                    {
                                      if ($key === array_key_first($array)) {
                                        ?>
                                          <div class="carousel-item active">
                                            <img src="<?php echo $value; ?>" class="d-block w-100" alt="...">
                                          </div>
                                        <?
                                      }
                                      else
                                      {
                                        ?>
                                          <div class="carousel-item">
                                            <img src="<?php echo $value; ?>" class="d-block w-100" alt="...">
                                          </div>
                                        <?
                                      }
                                    }
                                  ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                            </div>
                            <div class="card-body">
                              <h4 class="card-title"><?php echo $row['title']; ?></h4>
                              <p><?php echo $row['description']; ?></p>
                            </div>
                          </div>
                        </div>
                      <?
                    }
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <?php 
    $this->load->view('Admin/Footer');
  ?>
  <script src="<?php echo base_url(); ?>js/const.js"></script>
  <script src="<?php echo base_url(); ?>js/product.js"></script>
</body>
</html>