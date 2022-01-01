<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('Admin/Header'); ?>
  <title>Neptune Lights | Categories</title>
  <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css"> 
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
             <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create new categories</h4>
                  <form class="forms-sample" id="create_new_cat_form">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="cat_name" placeholder="Name">
                    </div>
                    <button type="submit" class="btn btn-primary me-2" style="color:white;" id="submit_button_new_cat">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Available Categories</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Created On</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>53275531</td>
                          <td>
                            <div class="wrapper_action" style="display:flex;width:20%;justify-content:space-between;">
                              <a href="javascript:void;"><i class="lni lni-pencil-alt" style="font-size: x-large;"></i></a>
                              <a href="javascript:void;"><i class="lni lni-cross-circle" style="font-size: x-large;"></i></a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
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
  <script src="<?php echo base_url(); ?>js/categories.js"></script>
</body>
</html>