<?php 
session_start();
if(isset($_SESSION['user_id'])) {
  $user_id = 1;
  echo $user_id;
  // console.log($user_id);
} else {
  // User is not logged in, redirect to login page or do something else
}

include 'connection.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>profile cards</title>
	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    
    <!-- Custom CSS -->
	<link rel="stylesheet" href="service_providers_list.css">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">

 
<!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->

  <link rel="shortcut icon" href="images/favicon.ico" />
  <style>
    .category-heading {
  display: flex;
  align-items: center;
  justify-content: space-between;
  text-align: left;
  margin-bottom: 20px;
  border-bottom: 1px solid #ccc;
  padding-bottom: 10px;
}

.category-heading h2 {
  font-size: 24px;
  font-weight: bold;
  color: #333;
  margin: 0;
  padding: 0;
}

@media (max-width: 576px) {
  .category-heading {
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
  }
}

    </style>
</head>
<body>
<!--  <div class="header">
        <div class="back-arrow"><i class="ri-arrow-left-line"></i></div>
        <div class="title"><i class="ri-store-3-line"></i> Profile Cards</div>
        <div class="three-line-icon">&#9776;</div>
    </div>	 
	<div class="container-fluid mt-3"> -->

	<div class="container-scroller"> 
    
    <!-- partial:partials/_navbar.html -->
    <?php include ('inc/navbar.php'); ?>
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper"> 
      
      <?php include ('inc/sidebar.php');?>
      
    <!-- partial -->
   <div class="main-panel">
  <div class="content-wrapper">
    <?php $category_id = $_GET['cat_id'];
      $sql_cat = "SELECT * FROM category WHERE cat_id = $category_id";
      $result_cat = mysqli_query($conn, $sql_cat);
      $category = mysqli_fetch_assoc($result_cat);
      $category_name = $category['cat_name'];
      ?>
    <div class="category-heading">
      <h2>Category: <?php echo $category_name; ?></h2>
    </div>
    <?php
      $category_id = $_GET['cat_id'];
      // echo $user_id;
      // query the database for service providers in the selected category
      $sql = "SELECT * FROM per_profiledata WHERE cat_id = $category_id";
      $result = mysqli_query($conn, $sql);

      while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['business_name'];
        $description = $row['description'];
        $service_provider_id = $row['profile_id'];

        // $_SESSION['user_id'] = $row['id'];

        $user_id = 1;

        // check if the current service provider is already added to the user's favorites list
        $sql1 = "SELECT * FROM favourites WHERE user_id = $user_id AND profile_id = $service_provider_id";
        $result2 = mysqli_query($conn, $sql1);
        $is_favorite = mysqli_num_rows($result2) > 0;

        // display the data in your HTML/PHP code
    ?>

        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="card mb-4">
              <div class="row no-gutters">
                <div class="col-md-3 col-sm-12">
                  <img src="<?php echo $img_address; ?>" class="logo mt-3 ml-2" alt="...">
                </div>
                <div class="col-md-9 col-sm-12">
                  <div class="card-body">
                    <h5 class="card-title mb-0"><?php echo $name; ?></h5>
                    <p class="card-text"><?php echo $description; ?></p>
                    <div class="row">
                      <div class="col-md-4">
                        <a href="tel:<?php echo $call_number; ?>" class="btn btn-secondary">Call</a>
                      </div>
                      <div class="col-md-4">
                        <?php if ($is_favorite) { ?>
                          <a class="btn btn-secondary" disabled>Added to Favourites <i id="bookmark-icon" class="ri-bookmark-fill"></i></a>
                          
                        <?php } else { ?>
                          <a class="btn btn-secondary add-to-favorites" data-service-provider-id="<?php echo $service_provider_id; ?>">Add to Favourites</a>
                        <?php } ?>
                      </div>
                      <div class="col-md-4">
                        <a href="profile.php?profile_id=<?php echo $row['profile_id']; ?>" class="btn btn-primary">View Profile</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php
      }
    ?>
  </div>
</div>


	</div>
	</div>
	<script>
		const addToFavouritesBtn = document.getElementById("add-to-favourites");
		const bookmarkIcon = document.getElementById("bookmark-icon");

		addToFavouritesBtn.addEventListener("click", function() {
		addToFavouritesBtn.style.display = "none";
		bookmarkIcon.classList.add('bookmarked');
		});

	</script>
	
</script>
 <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>
</html>
