<?php
session_start();
include('config/config.php');
include('config/checklogin.php');
check_login();

require_once('partials/_head.php');
?>
<style>
  .btn{
    color: white;
    background-color: black;
    border: black solid 2px;
    box-sizing: border-box;
    outline: none;

}
.btn:hover{
    color: black;
    background-color: white;
}
</style>
<body>
  <!-- Sidenav -->
  <?php
  require_once('partials/_sidebar.php');
  ?>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <?php
    require_once('partials/_topnav.php');
    ?>

    <!-- Header -->
    <div style="background-image: url(../admin/assets/img/theme/restro00.jpg); background-size: cover;" class="header  pb-8 pt-5 pt-md-8">
    <span class="mask bg-gradient-dark opacity-8"></span>
      <div class="container-fluid">
        <div class="header-body">
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--8">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              Select On Any Product To Make An Order
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light text-center">
                  <tr>
                    <th  scope="col">Product</th>
                    <!-- <th scope="col">Product Code</th> -->
                    <!-- <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $ret = "SELECT * FROM  rpos_products  ORDER BY `rpos_products`.`created_at` DESC ";
                  $stmt = $mysqli->prepare($ret);
                  $stmt->execute();
                  $res = $stmt->get_result();
                  while ($prod = $res->fetch_object()) {
                  ?>
                    <tr>
                      
                      <td class="text-center ">
                        <?php
                        if ($prod->prod_img) {
                          echo "<img src='../admin/assets/img/products/$prod->prod_img' height='100%' width='100% class='img-thumbnail' style=' border-radius: 20px' > ";
                        } else {
                          echo "<img src='../admin/assets/img/products/default.jpg' height='60' width='100 class='img-thumbnail' >  ";
                        }
                        ?>
                        
                        <h5 class="card-title pt-3 fs-4 mb-0 " style="font-weight: bold;" ><?php echo $prod->prod_name; ?></h5> 
                        <h5 class="card-title pt-3 fs-4 mb-0" style="font-weight: bold;" ><?php echo $prod->prod_price; ?> EGP </h5> 
                        <br>
                        <a href="https://wa.me/qr/2WALFMOD4AW2N1">
                          <button class="btn btn-primary ">
                            <i class="fas fa-cart-plus"></i>
                            Order Now
                          </button>
                        </a>
                        
                      </td>
                      
                      <!-- <td><?php echo $prod->prod_code; ?></td> -->
                      <!-- <td><?php echo $prod->prod_name; ?></td>
                      <td>$ <?php echo $prod->prod_price; ?></td> -->
                      <!-- <td>
                        <a href="make_oder.php?prod_id=<?php echo $prod->prod_id; ?>&prod_name=<?php echo $prod->prod_name; ?>&prod_price=<?php echo $prod->prod_price; ?>">
                          <button class="btn btn-sm btn-warning">
                            <i class="fas fa-cart-plus"></i>
                            Place Order
                          </button>
                        </a>
                        <a href="https://wa.me/qr/2WALFMOD4AW2N1">
                          <button class="btn btn-sm btn-warning">
                            <i class="fas fa-cart-plus"></i>
                            Order Now
                          </button>
                        </a>
                      </td> -->
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      



      <!-- Footer -->

      
      <?php
      require_once('partials/_footer.php');
      ?>
    </div>
  </div>
  <!-- Argon Scripts -->
  <?php
  require_once('partials/_scripts.php');
  ?>
</body>

</html>