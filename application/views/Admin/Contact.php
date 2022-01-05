<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('Admin/Header'); ?>
  <title>Neptune Lights | Contact Us</title>
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
          <!-- Update contact information here -->
          <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" id="update_Contact_Info" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" placeholder="enter your address details" name="your_address" id="your_address" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Contact us</label>
                                <input type="text" class="form-control" name="contact_number" placholder="enter your contact details seperated by comma" required/> 
                            </div>
                            <div class="form-group">
                                <label>Google embed code</label>
                                <textarea class="form-control" placeholder="copy and paste the iframe code here" name="google_map_code" id="google_map_code" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary me-2" style="color:white;" id="update_contact_info">Submit</button>
                        </form>
                    </div>
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
  <script src="<?php echo base_url(); ?>js/const.js"></script>
  <?php 
    $this->load->view('Admin/Footer');
  ?>
  <script src="<?php echo base_url(); ?>js/contact.js"></script>
</body>
</html>