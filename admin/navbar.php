  <?php
  include "connection.php";
  session_start();


  $sql = "SELECT * FROM useraccount WHERE username=:usernamex";

  $stid = oci_parse($conn, $sql);
  oci_bind_by_name($stid, ':usernamex', $_SESSION['username']);
  oci_execute($stid);
  $row = oci_fetch_assoc($stid);

  ?>
  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="register.php">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-shopping-bag"></i>
      </div>
      <div class="sidebar-brand-text mx-3"> E<sup>commerce</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Main
    </div>

    <li class="nav-item">
      <a class="nav-link" href="register.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Product Maintenance</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="user.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>User List</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle" style="margin-top: 220%;"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Nav Item - Search Dropdown (Visible Only XS) -->
          <li class="nav-item dropdown no-arrow d-sm-none">
          </li>
          <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                <?= $row['NAME'] ?>
              </span>
              <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
          </li>

        </ul>

      </nav>
      <!-- End of Topbar -->


      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>


      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

              <form action="logout.php" method="POST">
                <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
              </form>


            </div>
          </div>
        </div>
      </div>