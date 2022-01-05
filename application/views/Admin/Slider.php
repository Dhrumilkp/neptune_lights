<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('Admin/Header'); ?>
  <title>Neptune Lights | Misc</title>
  <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css"> 
  <style>
    .sub_cat_wrapper{
      padding-left: 50px;
    }
  </style>
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
          <!-- Wrap my forms here -->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h6>Hero Section</h6>
                            <div class="hero_wrapper" style="margin-top:20px;">
                                <form class="forms-sample" id="create_new_slider" enctype="multipart/form-data">
                                    <div class="form-group">
                                    <label for="exampleInputName1">Slider Caption</label>
                                    <input type="text" class="form-control" id="slider_cap" name="slider_cap" placeholder="Enter the caption of the slide" required>
                                    <label style="margin-top:10px;">Select one product for slider</label>
                                    <select class="form-select" aria-label="Default select example" name="select_product" id="select_product" style="margin-bottom:20px;" required>
                                      <option selected>Open to select product</option>
                                      <?php 
                                        foreach($products as $row)
                                        {
                                          
                                          ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option> 
                                          <?
                                        }
                                      ?>
                                    </select>
                                    <label for="upload_img">Slider Image</label>
                                    <input type="file" accept=".jpg" class="form-control" id="slider_img" name="slider_img" placeholder="Upload image" required/>
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2" style="color:white;" id="submit_click_hero_slider">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
              <?php 
                if(!empty($sliders_data))
                {
                  foreach($sliders_data as $row)
                  {
                    ?>
                      <div class="col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="slider_wrapper" style="display:flex;flex-direction: column;">
                                    <img class="slider_img_wrapper" src="<?php echo base_url(); ?><?php echo $row['img_path']; ?>"/>
                                    <p style="margin-top:10px;"><?php echo $row['caption']; ?></p>
                                    <div class="action_wrapper" style="display:flex;width:100%;justify-content: space-between;">
                                        <button class="btn btn-danger delete_slider_from_db" style="color:white;" data-id="<?php echo $row['id']; ?>" >Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    <?
                  }
                }
                else
                {
                  ?>
                    <p>Please create new slider to see it </p>
                  <?
                }
              ?>
            </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <script src="<?php echo base_url(); ?>js/const.js"></script>
  <?php 
    $this->load->view('Admin/Footer');
  ?>
  <script src="<?php echo base_url(); ?>js/landing.js"></script>
</body>
</html>