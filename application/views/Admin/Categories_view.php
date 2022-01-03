<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('Admin/Header'); ?>
  <title>Neptune Lights | Categories</title>
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
             <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create new categories</h4>
                  <form class="forms-sample" id="create_new_cat_form" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Name" required>
                      <label for="upload_img"></label>
                      <input type="file" accept=".jpg" class="form-control" id="cat_img" name="cat_img" placeholder="Upload image" required/>
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
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="load_cat_here">
                        <?php 
                          if(empty($categories))
                          {
                            ?>
                                <tr>
                                  <td>Please create categories, no categories found</td>
                                </tr>     
                            <?
                          }
                          else
                          {
                            foreach($categories as $row)
                            {
                              ?>
                                <tr>
                                  <td><?php echo $row['name']; ?></td>
                                  <td>
                                    <div class="wrapper_action" style="display:flex;width:20%;justify-content:space-between;">
                                      <a href="javascript:void;" data-id="<?php echo $row['id']; ?>" onclick="delete_cat(this)"><i class="lni lni-cross-circle" style="font-size: x-large;"></i></a>
                                      <a href="javascript:void;" data-id="<?php echo $row['id']; ?>" onclick="add_sub_cat(this)"><i class="lni lni-circle-plus" style="font-size: x-large;"></i></a>
                                    </div>
                                  </td>
                                </tr>  
                                <tr class="add_sub_cat_wrapper_<?php echo $row['id']; ?>" style="display:none;">
                                  <td>
                                    <div style="width:100%;">
                                      <form class="forms-sample" id="create_new_sub_cat_<?php echo $row['id']; ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                          <label for="exampleInputName1">Name</label>
                                          <input type="text" class="form-control" id="sub_cat_name" name="sub_cat_name" placeholder="Name" required>
                                          <label for="upload_img"></label>
                                          <input type="file" accept=".jpg" class="form-control" id="sub_cat_img" name="sub_cat_img" placeholder="Upload image" required/>
                                          <input type="hidden" name="main_cat_id" value="<?php echo $row['id']; ?>"/>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2" style="color:white;" id="submit_sub_cat_btn_<?php echo $row['id']; ?>">Submit</button>
                                        <button type="submit" class="btn btn-danger me-2" style="color:white;" id="reject_sub_cat" data-id="<?php echo $row['id']; ?>">Close</button>
                                      </form>
                                    </div>
                                  </td>
                                </tr>
                                <?php 
                                  if(!empty($subcategories))
                                  {
                                    foreach($subcategories as $sub_cat)
                                    {
                                      ?>
                                        <tr>
                                          <td style="padding-left:50px;border-bottom:0px;"><?php echo $sub_cat['name']; ?></td>
                                          <td><a href="javascript:void;" data-id="<?php echo $sub_cat['id']; ?>" onclick="delete_sub_cat(this)"><i class="lni lni-cross-circle" style="font-size: x-large;"></i></a></td>
                                        </tr>                 
                                      <?
                                    }
                                  }
                                ?>
                              <?
                            }
                          } 
                        ?>
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