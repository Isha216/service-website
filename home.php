<?php
// db connection file
include 'connection.php';
// session check
require_once('check_login.php');
// // fetching user data from db
$user_res = $conn->query("SELECT count(user_id) FROM user_details");
$user_res = $user_res->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="new1.css">
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
  <link rel="stylesheet" href="style2.css">
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
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                      <!-- <header class="header container col-md-12 col-sm-12">
                          <div class="col-md-4 logo">     
                            <img src="serviceFinder2.png" alt="Your Website Logo">
                          </div>
                          
                          <div class="search col-md-8 col-sm-12">
                              <input type="text" class="search-input" placeholder="Search...">
                              <button class="search-icon">Search</button>
                          </div>
                      </header> -->
                  <section class="hero">
                      <div class="hero-content">
                          <h1>Welcome to Your Website!</h1>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum orci vitae vestibulum
                          </p>
                          
                          <button class="hero-btn">Get Started</button>
                      </div>
                  </section>        
              </div>
            </div>
     
        
        <div class="mid-nav container-fluid col-12">
          <ul>
            <div class="search col-md-8 col-sm-12">
            <input type="text" class="search-input" placeholder="Search...">
            <button class="search-icon">Search</button>
            </div>  
          </ul>
          <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="service_providers_list.css">Service</a></li>
            <li><a href="category.html">Categories</a></li>
            <li><a href="aboutUs.php" id="about_us_button">About Us</a></li>
            <li><a href="#" id="help_button">Help</a></li>
          </ul>
        </div>
        
  <!-- ---- main section --- -->
<section id="recommended-category" class="recommended-category">
          <div class="section-title">
            <h2> Search by Category </h2>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-12">
          <a href="service_providers_list.html">
            <div class="category-card health" data-aos="zoom-in" data-aos-delay="100">
              <i class="ri-heart-3-fill"></i>
              <h3>Health</h3>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-sm-12">
          <a href="service_providers_list.html">
            <div class="category-card gardening" data-aos="zoom-in" data-aos-delay="200">
              <i class="ri-plant-fill"></i>
              <h3>Gardening</h3>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="service_providers_list.html">
            <div class="category-card babycare" data-aos="zoom-in" data-aos-delay="300">
              <i class="ri-empathize-fill"></i>
              <h3>Babycare</h3>
            </div>
          </a>
        </div>
<div class="col-md-6 col-sm-12">
  <a href="service_providers_list.html">
    <div class="category-card carservice" data-aos="zoom-in" data-aos-delay="400">
      <i class="ri-car-fill"></i>
      <h3>Car Service</h3>
    </div>
  </a>
</div>

      <div class="col-md-12 text-right">
        <a href="category.php" class="view-more-button" data-aos="zoom-in" data-aos-delay="500">View More</a>
      </div>
    </div>
  </div>
</section>

<section id="services" class="services">
  <div class="container">
    <div class="section-title">
      <h2> Top Services</h2>
    </div>
    <div class="row">
      <div class=" col-md-4 col-sm-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="profile-image"style="background-image: url('https://picsum.photos/200/300');"></div>
          <div class="service-text">
              <h4><a href="">bussiness name</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>          
        </div>
        </div>
      </div>
      <div class="row">
      <div class=" col-md-4 col-sm-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="profile-image"style="background-image: url('https://picsum.photos/200/300');"></div>
          <div class="service-text">
              <h4><a href="">bussiness name</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>          
        </div>
      </div>
      </div>
      <div class="row">
      <div class=" col-md-4 col-sm-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="profile-image"style="background-image: url('https://picsum.photos/200/300');"></div>
          <div class="service-text">
              <h4><a href="">bussiness name</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>          
        </div>
      </div>
      </div>
      <!-- Add similar code for other service providers -->   
      <div class="col-md-12 text-right">
        <a href="Services.html" class="view-more-button" data-aos="zoom-in" data-aos-delay="500">View All</a>
      </div>
  </div>
</section>

    <!-- ---end of the main section--- -->
    <!-- --- About us section--- -->
  <section id="about" class="about">
     <?php include ('aboutUs.php');?>
    </section>
    <!-- --- end of the About us section --- -->

    <section id="help" class="help">
  <?php include ('help.php');?>
      
</section>

    <!-- --- End of the Help sectiion --- -->
<!-- <div class="col-lg-12 col-sm-12  mt-5 mt-lg-0 d-flex align-items-stretch">
    <form action="forms/contact.php" method="post" role="form" class="php-email-form text-center" style="padding: 30px; border-radius: 5px; width: 100%; display: flex; justify-content: center; align-items: center;">
        <div style="max-width: 500px; width: 100%;">
            <div class="form-group">
                <label for="name" style="font-size: 18px;">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="email" style="font-size: 18px;">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="subject" style="font-size: 18px;">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
            </div>
            <div class="form-group">
                <label for="message" style="font-size: 18px;">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <label for="feedback" style="font-size: 18px;">Was this website helpful?</label>
                <select class="form-control" name="feedback" id="feedback" required>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="comments" style="font-size: 18px;">Comments</label>
                <textarea class="form-control" name="comments" rows="5"></textarea>
            </div>
            <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <button type="submit" style="background-color: rgb(240, 129, 38); color: black; border: none; padding: 10px 20px; border-radius: 3px; cursor: pointer; font-size: 18px;">Send Message</button>
        </div>
    </form> -->
</div>
</div>

 <footer id="footer">
   <?php include ('inc/footer.php');?>
</footer>

</div>
</div>
</div>
</div>
<script>
  // Get the button element
  var aboutUsButton = document.querySelector('#about_us_button');
  var helpButton = document.querySelector('#help_button');
  // Add a click event listener to the button
  aboutUsButton.addEventListener('click', function() {
    var aboutUsSection = document.querySelector('#about');
    aboutUsSection.scrollIntoView({ behavior: 'smooth' });
  });
  helpButton.addEventListener('click', function() {   
  var helpSection = document.querySelector('#help');
   helpSection.scrollIntoView({ behavior: 'smooth' });
});

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