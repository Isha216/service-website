<!-- Connect to your MySQL database -->
<?php 
include ('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mobile-only Card Layout</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- FontAwesome Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- Stylish CSS -->
	<style>
        /* *{
            border: 1px solid black;
        } */
    </style>
    
    <style>
        body {
  font-family: 'Poppins', sans-serif;
}
h1, h2, h3, h4, h5, h6 {
  font-weight: bold;
}

		body {
			background-color: #f2f2f2;
		}

		.card-container {
			padding: 20px;
		}

		.card {
			background-color: #fff;
			border-radius: 15px;
			box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
			margin-bottom: 20px;
			text-align: center;
			padding: 20px;
			transition: transform 0.3s;
			height: 150px;
			width: 150px;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

		.card:hover {
			transform: translateY(-5px);
		}

		.card h5 {
			font-size: 18px;
			font-weight: 600;
			margin-top: 10px;
			margin-bottom: 0;
		}

		.card p {
			font-size: 14px;
			margin-bottom: 0;
		}

		.card-deck {
			display: flex;
			flex-wrap: wrap;
			margin-right: -10px;
			margin-left: -10px;
			justify-content: center;
		}

		.card-deck .card {
			margin: 10px;
			text-align: center;
			overflow: hidden;
			height: 150px;
			width: 150px;
			border-radius: 15px;
			box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
			transition: transform 0.3s;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

		.card-deck .card:hover {
			transform: translateY(-5px);
		}

		.card-deck .card .card-body {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100%;
			width: 100%;
		}

		.card-deck .card i {
			font-size: 3rem;
			margin-bottom: 0.5rem;
			color: #0066cc;
		}

		.card-deck .card h5 {
			margin-bottom: 0;
			font-size: 1.2rem;
			font-weight: bold;
			color: #333;
		}
		@media (min-width: 768px) {
		.card-deck {
			margin-right: -15px;
			margin-left: -15px;
		}
		
		.card-deck .card {
			flex: 1 0 30%;
			margin: 15px;
			height: 200px;
			width: 200px;
		}
		
		.card-deck .card i {
			font-size: 4rem;
			margin-bottom: 1rem;
		}
		
		.card-deck .card h5 {
			font-size: 1.5rem;
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
            <h2>All Categories</h2>
          </div>
 
			<div class="row">
				<div class="col-12 card-container">
					<div class="card-deck">
						<?php     
						// Query the categories table to get the data
						$query = "SELECT * FROM category";
						$result = mysqli_query($conn, $query);

						// Loop through the results and display them in cards
						while ($row = mysqli_fetch_assoc($result)) {
							echo '<div class="card">';
							echo '<a href="profile-cards.php?cat_id=' . $row['cat_id'] . '" class="card-body">';
							echo $row['cat_icon_url'] ;
							echo '<h5 class="card-title">' . $row['cat_name'] . '</h5>';
							echo '</a>';
							echo '</div>';
						}

						// Close the database connection
						mysqli_close($conn);
						?>
					</div>
				</div>
			</div>

		
	</div>
	</div>
	</div>
  </div>


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
	<!-- Bootstrap 4 JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
