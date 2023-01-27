<?php
$customer_id = $_SESSION['customer_id'];
//$login_id = $_SESSION['login_id'];
$ret = "SELECT * FROM  rpos_customers  WHERE customer_id = '$customer_id'";
$stmt = $mysqli->prepare($ret);
$stmt->execute();
$res = $stmt->get_result();
while ($customer = $res->fetch_object()) {

?>
  <!-- <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <a class="navbar-brand pt-0" href="dashboard.php">
        <img src="../admin/assets/img/theme/Screenshot 2023-01-19 225317.png" class="navbar-brand-img" alt="...">
      </a>
      
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt='Image placeholder' src='../admin/assets/img/brand/repos.png'>
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="change_profile.php" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="logout.php" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="dashboard.php">
                <img src="../admin/assets/img/theme/Screenshot 2023-01-19 225317.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        
        <ul class="navbar-nav">
          <li class="nav-item">
            
            <a class="nav-link" href="dashboard.php">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="change_profile.php">
              <i class="fas fa-users text-primary"></i> My Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="orders.php">
              <i class="ni ni-cart text-primary"></i>Make Order
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="payments.php">
              <i class="ni ni-credit-card text-primary"></i> Payments
            </a>
          </li>
        </ul>
        
        <hr class="my-3">
        
        <h6 class="navbar-heading text-muted">Reporting</h6>
        
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="orders_reports.php">
              <i class="fas fa-shopping-basket"></i> My Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="payments_reports.php">
              <i class="fas fa-funnel-dollar"></i> My Payments
            </a>
          </li>
        </ul>
        <hr class="my-3">
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="fas fa-sign-out-alt text-danger"></i> Log Out
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->

      <style>
          .container .nav-link{
    color: black;
    font-weight: 600;
    font-size: 14px;
    letter-spacing: 2px;
}


.container .btn{
    color: white;
    background-color: black;
    border: black solid 2px;
    box-sizing: border-box;
}
.container .btn:hover{
    color: black;
    background-color: white;
}
.navbar-toggler{
  color: black;
}
.navbar-toggler[aria-expanded="true"]{
  border-color: black;
}
.navbar-toggler[aria-expanded="false"]{
    border-color: black;
}
      </style>


    <nav class="navbar navbar-expand-lg sticky-top bg-white" style="box-shadow: 0px 2px 19px #ddd">
        <div class="container">
            <a class="navbar-brand" href=""></a>
                <img class="w-25" src="../admin/assets/img/theme/Screenshot 2023-01-19 225317.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>
            <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link  p-2 p-lg-3" aria-current="page" href="payments.php">Payments</a></li>
                <li class="nav-item"><a class="nav-link  p-2 p-lg-3" aria-current="page" href="orders.php">Make Order</a></li>
                <li class="nav-item"><a class="nav-link  p-2 p-lg-3" aria-current="page" href="change_profile.php" target="blank">My Profile</a></li>
                <li class="nav-item"><a class="nav-link  p-2 p-lg-3" aria-current="page" href="dashboard.php">DASHBOARD</a></li>
            </ul>
            <a style=" border-radius: 0;" class="btn btn-primary  ps-3 pe-3 " href="#">012760587026</a>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-top navbar-expand-md navbar-dark bg-black" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="dashboard.php"><?php echo $customer->customer_name; ?> Dashboard</a>
            <!-- Form -->

            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="../admin/assets/img/theme/user-a-min.png">
                            </span>
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold"><?php echo $customer->customer_name; ?></span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../admin/assets/img/theme/headerbig_1.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../admin/assets/img/theme/headerbig_11.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../admin/assets/img/theme/headerbig_14.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../admin/assets/img/theme/headerbig_11.webp" class="d-block w-100" alt="...">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
  </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>

<?php } ?>