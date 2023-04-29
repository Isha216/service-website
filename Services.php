<!-- Connect to your MySQL database -->
<?php 
include ('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        /* Search bar */
body {
    font-family: 'Poppins', sans-serif;
    background-color: #f8f9fa;
}

h1, h2, h3, h4, h5, h6 {
    font-weight: bold;
}

/* Header bar container */
.header {
    background-color: #007BFF;
    color: #fff;
    height: 60px;
    display: flex;
    align-items: center;
    padding: 0 16px;
}

/* Back arrow icon */
.back-arrow {
    font-size: 20px;
    margin-right: 10px;
	cursor: pointer;
}
/* Heading title */
.title {
    flex-grow: 1;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
}

/* Three-line icon */
.three-line-icon {
    font-size: 24px;
    margin-left: 10px;
}
    .container {
        position: relative;
    }
   .search-bar {
    display: flex;
    align-items: center;
}

.search-input {
    flex: 1;
    background-color: #f8f9fa;
    border: 1px solid black;
    border-radius: 5px;
    height: 50px!important;
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    margin-right: 10px;
}

.search-input:focus {
    outline: none;
    box-shadow: none;
}

.search-btn {
    height: 50px;
    width: 55px;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

.search-btn:hover {
    background-color: #0056b3;
}

 
.card {
    background-color: #fff;
    border-radius: 10px;
    border: 1px solid #ddd;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    min-height: 200px;
    margin-bottom: 10px;
    max-height: 200px; /* set the desired fixed height for the card */
}

.card:hover {
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
}

.card-img-top {
    max-height: 150px;
    max-width: 150px;
    object-fit: cover;
}

.service-card-body {
    padding: 10px;
}

.card .row.no-gutters {
    margin-left: -15px; /* remove the left margin of the row with no gutters */
    margin-right: -15px; /* remove the right margin of the row with no gutters */
}

.card .col-md-3,
.card .col-md-9 {
    padding-left: 15px; /* add padding to the columns to compensate for the removed margins */
    padding-right: 15px; /* add padding to the columns to compensate for the removed margins */
}

.logo {
    width: 100%; /* Set width to 100% to fill the container */
    height: 150px; /* Set desired height for the logo image */
    margin-right: 10px;
    object-fit: cover;
}

h5.card-title {
    font-size: 26px!important; /* Increased font size for mobile view */
    font-weight: bold;
    color: #333;
    margin: 0;
    margin-bottom: 0.2rem;
}

.card-text {
    min-height: 75px;
    overflow: hidden;
}

p.card-text {
    font-size: 16px!important; /* Increased font size for mobile view */
    color: #666;
    margin: 0;
    margin-bottom: 0.5rem;
    line-height: 1.5;
}
.badge{
    margin-top: 8px;
    margin-bottom: 8px;
    color: white !important;
    font-weight: bold;
}

.btn {
    font-size: 18px;
       
    display: flex;
    justify-content: center;
    align-items: center;
}

.btn-primary {
    margin: 5px 10px;
    padding: 10px 15px; 
    background-color: #002B5F;
    border-color: #002B5F;
    color: #fff;
}

.btn-primary:hover {
    background-color: #00234B;
    border-color: #00234B;
}

/* Media Queries */
@media (max-width: 768px) {
    .search-bar {
        flex-direction: column;
        align-items: stretch;
    }
  
    .search-input {
        margin-bottom: 10px;
        max-width: 100%;
    }
  
    .search-btn {
        margin-left: 0;
        width: 100%;
    }
}

@media (min-width: 769px) {
    .search-input {
        width: auto;
    }
  
    .search-btn {
        margin-left: 10px;
        width: auto;
    }
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
  
	<title>All Service</title>
	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    
    <!-- Custom CSS -->
	<link rel="stylesheet" href="Services.css">
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

</head>
<body>
<!--  
    <div class="header">
        <div class="back-arrow" onclick="goBack()"> <i class="ri-arrow-left-line"></i></div>
        <div class="title">Services</div>
        <div class="three-line-icon">&#9776;</div>
    </div>
    Content of the page -->
    
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
      <h2>All Services</h2>
    </div>
    <div class="row">
      <div class="col-md-12">
         <form method="POST">
          <div class="form-group search-bar">       
          <input type="text" class="form-control search-input" id="searchInput" name="search_query" placeholder="Search by service category or business title" onkeyup="filterCards()">
          <button class="btn search-btn" name="search"><i class="ri-search-line"></i></button>
        </form>
      </div>
      </div>
    </div>      
      
    <!-- Profiles -->
    <div class="container-fluid mt-3" id="card-container">
      <?php  
      // Check if search button is clicked and filter results
      $search_query = '';
      if (isset($_POST['search'])) {
        $search_query = mysqli_real_escape_string($conn, $_POST['search_query']);
      }

      // Query to retrieve data from the database tables
      $sql = "SELECT per_profiledata.*, category.cat_name FROM per_profiledata INNER JOIN category ON per_profiledata.profile_id = category.cat_id";

      if (!empty($search_query)) {
        $sql .= " WHERE per_profiledata.business_name LIKE '%{$search_query}%' OR category.cat_name LIKE '%{$search_query}%'";
      }

      $sql .= " ORDER BY per_profiledata.business_name ASC";
      
      $result = mysqli_query($conn, $sql);

      // Loop through the query result and generate HTML code for each profile
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
      
        <div class="row">
          <div class="col-md-12">
            <div class="card mb-4">
              <div class="row no-gutters">
                <div class="col-md-3 col-sm-12">
                  <img src="<?php echo $row['img_address']; ?>" class="logo mt-3 ml-2" alt="...">
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="card-body">
                    <h5 class="card-title mb-0"><?php echo $row['business_name']; ?></h5>
                    <span class="badge badge-primary"><?php echo $row['cat_name']; ?></span>
                    <p class="card-text"><?php echo $row['description']; ?></p>
                  </div>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                  <a href="profile.php?profile_id=<?php echo $row['profile_id']; ?>" class="btn btn-primary mx-auto">View Profile</a>
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
    </div>
 <script>
  function filterCards() {
  // Get the search query from the input field
  let searchQuery = document.getElementById("searchInput").value.toLowerCase();
  
  // Get all the card elements
  let cards = document.querySelectorAll("#card-container .card");

  // Loop through each card and check if it matches the search query
  cards.forEach(function(card) {
    let cardTitle = card.querySelector(".card-title").textContent.toLowerCase();
    let cardCategory = card.querySelector(".badge").textContent.toLowerCase();
    
    if (cardTitle.includes(searchQuery) || cardCategory.includes(searchQuery)) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });
}

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
