<!DOCTYPE html>
<html>
<head>
  
	<title>Favourites</title>
	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    
    <!-- Custom CSS -->
	<link rel="stylesheet" href="favourites.css">
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
    <!-- <div class="header">
        <div class="back-arrow" onclick="goBack()"> <i class="ri-arrow-left-line"></i></div>
        <div class="title"><i class="ri-bookmark-line"></i> Favourites </div>
        <div class="three-line-icon">&#9776;</div>
    </div> -->
    <!-- Content of the page -->
    
	<!-- Profiles -->
	<div class="container-fluid mt-3">
        <div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="card mb-4">
					<div class="row no-gutters">
						<div class="col-md-3 col-sm-12 ">
							<img src="serviceFinder.png" class="logo mt-3 ml-2" alt="...">
						</div>
						<div class="col-md-9 col-sm-12">
							<div class="card-body">
								<h5 class="card-title mb-0">John Doe</h5>
								 
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus euismod lectus, ac luctus ex gravida at.</p>
								<div class="row">
									<div class="col-md-4">
										<a href="#" class="btn btn-primary" id="callBtn">Call</a>
									</div>
									<div class="col-md-4">
										<a href="#" class="btn btn-secondary removeBtn">remove</a>
									</div>
									<div class="col-md-4">
										<a href="profile.html" class="btn btn-primary" id="viewProfileBtn">View Profile</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    </div> 
  </div>  
  <div>      
<script>

    // get a reference to the remove button
var removeBtn = document.getElementById("removeBtn");
// add an event listener to the remove button
removeBtn.addEventListener("click", function() {
    // get a reference to the parent element (the card)
    var card = removeBtn.parentNode.parentNode.parentNode;
    // remove the card from the DOM
    card.remove();
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
