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
          <!-- Wrap my forms here -->

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
</body>
</html>