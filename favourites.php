 <!-- Connect to the MySQL database -->
<?php include('connection.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Favorites</title> 
    <!-- Custom CSS -->
    <style>
        .card {
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .card-img-top {
  max-height: 200px;
  object-fit: cover;
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
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">

     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
     -->
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
  <!-- <link rel="stylesheet" href="style2.css"> -->
  <!-- endinject -->

  <link rel="shortcut icon" href="images/favicon.ico" />
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
            <h2>Favourites</h2>
          </div>
  <div class="row justify-content-center" id="favorites">
    <?php
   
    // Fetch favorite contacts from the database
    $sql = "SELECT f.*, p.*, c.cat_name 
              FROM favourites f 
              JOIN per_profiledata p ON f.profile_id = p.profile_id 
              JOIN category c ON p.cat_id = c.cat_id";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      // Output a card for each favorite contact
      while ($row = mysqli_fetch_assoc($result)) {
        $photo = $row["img_address"];
        $business_name = $row["business_name"];
        $category = $row["cat_name"];
        $description = $row["description"];
        $callus = $row['call_number'];
        $whatsapp = $row['whatsapp_number'];
        $locate = $row['google_address'];
        $profile_id = $row['profile_id'];
      
        echo '<div class="card mb-4 shadow-sm">
          <img src="'.$photo.'" class="card-img-top" alt="'.$business_name.'">
          <div class="card-body">
            <h5 class="card-title">'.$business_name.'</h5>
            <p class="card-text">'.$category.'</p>
            <p class="card-text">'.$description.'</p>
            <div class="d-flex justify-content-between align-items-center">
              <div>
              <a href="tel:'.$callus.'" class="btn btn-primary"><i class="ri-phone-line"></i> Call Us</a>
              <a href="https://wa.me/'.$whatsapp.'" class="btn btn-success"><i class="ri-whatsapp-line"></i> WhatsApp Us</a>
              <a href="'.$locate.'" class="btn btn-info"><i class="ri-map-pin-2-line"></i> Locate Us</a>
              </div>
              <div>
                <a href="deleteprofile.php?profile_id='.$profile_id.'" class="btn btn-sm btn-link text-danger">Remove</a>
                
                <a href="profile.php?profile_id='.$profile_id.'" class="btn btn-sm btn-link">View Profile</a>
              </div>
            </div>
          </div>
        </div>
        ';
        // echo $profile_id;
      }
    } else {
      echo '<div class="jumbotron text-center bg-light">
        <h1 class="display-4">No Favorites Yet</h1>
        <p class="lead">You haven\'t added any Service Provider to your favorites yet.</p>
        <hr class="my-4">
        <p>Click the "Save" button on a contact to add them to your favorites.</p>
        <a class="btn btn-primary btn-lg" href="Category.php" role="button">View Categories</a>
      </div>
      ';
    }

    // Close the database connection
    mysqli_close($conn);
    ?> 
        </div>
    </div>
    </div>
   </div>



    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
