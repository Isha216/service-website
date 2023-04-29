
<?php include('connection.php') ?>
<!DOCTYPE html>
<html>
<head>
  
	<title>Recently Accessed</title>
	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    
    <!-- Custom CSS -->
	<link rel="stylesheet" href="favourites.css">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">

<style>
    body {
    font-family: 'Poppins', sans-serif;
    background-color: #f8f9fa;
}

h1, h2, h3, h4, h5, h6 {
    font-weight: bold;
}
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

  <link rel="shortcut icon" href="images/favicon.png" />
       

 
</head>
<body>
  <div class="container-scroller"> 
    
    <!-- partial:partials/_navbar.html -->
    <?php include ('inc/navbar.php'); ?>
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
 
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include ('inc/sidebar.php');?>
      
    <!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="category-heading">
            <h2>Recently Viewed</h2>
        </div>
        <div class="row justify-content-center" id="favorites">
            <?php
            if (session_status() === PHP_SESSION_ACTIVE && isset($_GET['profile_id'])) {
                $max_viewed_profiles = 20;
                $profile_id = $_GET['profile_id'];
                $user_id = $_SESSION['user_id']; // Assuming you have already set the user ID in the session

                // Check if the service provider ID is already in the viewed profiles array
                if (!in_array($profile_id, $_SESSION['recently_viewed'])) {
                    // If not, add it to the beginning of the array
                    array_unshift($_SESSION['recently_viewed'], $profile_id);
                    // Limit the array to the maximum number of viewed profiles
                    $_SESSION['recently_viewed'] = array_slice($_SESSION['recently_viewed'], 0, $max_viewed_profiles);

                    // Store the recently viewed profile in the database
                    $view_date = date('Y-m-d H:i:s');
                    $sql = "INSERT INTO recently_viewed (user_id, profile_id, view_date) VALUES ('$user_id', '$profile_id', '$view_date')";
                    mysqli_query($conn, $sql);
                }
            }

            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];

                // Fetch recently viewed service providers for the current user from the database
                $sql = "SELECT r.profile_id, p.business_name, p.img_address, c.cat_name 
                        FROM recently_viewed r 
                        JOIN per_profiledata p ON r.profile_id = p.profile_id 
                        JOIN category c ON p.cat_id = c.cat_id 
                        WHERE r.user_id = '$user_id'
                        ORDER BY r.view_date DESC
                        LIMIT 20";

                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // Output a card for each recently viewed service provider
                    while ($row = mysqli_fetch_assoc($result)) {
                        $photo = $row["img_address"];
                        $business_name = $row["business_name"];
                        $category = $row["cat_name"];
                        $profile_id = $row['profile_id'];

                        echo '<div class="card mb-4 shadow-sm">
                              <img src="'.$photo.'" class="card-img-top" alt="'.$business_name.'">
                              <div class="card-body">
                                <h5 class="card-title">'.$business_name.'</h5>
                                <p class="card-text">'.$category.'</p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div>
                                    <a href="profile.php?profile_id='.$profile_id.'" class="btn btn-sm btn-link">View Profile</a>
                      </div>
                    </div>
                  </div>
                </div>';
} }
}else {
    echo '<div class="jumbotron text-center bg-light">
        <h1 class="display-4">No Recently Viewed Service provider Profiles Yet</h1>
        <p class="lead">You haven\'t viewed any service provider profiles yet.</p>
        <hr class="my-4">
        <p>Click the "View Profile" button on a service provider to view their profile.</p>
        <a class="btn btn-primary btn-lg" href="Category.php" role="button">View Categories</a>
      </div>
      ';
    }

    // Close the database connection
    mysqli_close($conn);
?>

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