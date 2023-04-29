<!-- Connect to your MySQL database -->
<?php 
include ('connection.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile | Service Finder</title>

    <!-- google font cdn -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- bootstrap 4 cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- stylesheet -->
    <link rel="stylesheet" href="profile.css">
    <style>
        /* Media query for desktop view */
@media(min-width: 768px) {
/* Button alignment and spacing */
p{
    font-size: 18px!important;
}
.profile-row{
    margin-left: 10px;
}
.image-container {
    max-width: 600px;
    max-height: 500px;
    margin: 50px;
}
.feedback-button,
.report-button, . {

margin-right: 20px;
margin-top: 0px;
padding: 10px 20px;
border-radius: 3px;
cursor: pointer;
}
.profile-contact{
display:flex;
justify-content:  left;
}
.profile-contact li{
    margin-right: 20px;
}
 /* Social icon size for desktop */
.social-icon-media {
 
  width: 100px;
  height: 100px;   
}

.social-icon svg {
  width: 100%;
  height: 100%;
  font-size: 30px!important;
}

/* Skill badge size and spacing for desktop */
.skill-badge {
  margin: 10px;
  padding: 8px 14px;
  font-size: 16px;
}
}
    </style>
    <!-- icons cdn -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
     <script src="feedback_form.js"></script>
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
    <!-- <div class="profile-container">
        <div class="row"> -->
             
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
      <h2>Service Provider Profile</h2>
    </div>

   <?php
    // Get the profile ID from the previous page
    $profile_id = $_GET['profile_id'];
    
    // Query the database for the profile data
    $sql = "SELECT * FROM per_profiledata WHERE profile_id = $profile_id";
    $result = $conn->query($sql);
    
    // Check if the query returned any results
    if ($result->num_rows > 0) {
        // Loop through the query result and display the profile data
        while ($row = $result->fetch_assoc()) {
?>

    <div class="profile-row">
    <div class="col-md-12">
        <div class="image-container">
            <img class="zoom-image" src="<?php echo $row['img_address']; ?>" alt="Your Image">
        </div>
    </div>

    <div class="col-md-12">
        <h1 class="profile-name"><?php echo $row['business_name']; ?></h1>

        <h2 class="profile-header">Contact Information:</h2>
        <ul class="profile-contact col-md-7">
            <li><a href="tel:<?php echo $row['call_number']; ?>" class="btn btn-primary"><i class="ri-phone-line"></i> Call Us</a></li>
            <li><a href="https://wa.me/<?php echo $row['whatsapp_number']; ?>" class="btn btn-success"><i class="ri-whatsapp-line"></i> WhatsApp Us</a></li>
            <li><a href="<?php echo $row['google_address']; ?>" class="btn btn-info"><i class="ri-map-pin-2-line"></i> Locate Us</a></li>
        </ul>

        <h3 class="profile-subheader">Years in Business: <?php echo $row['years_in_business']; ?></h3>
        <h3 class="profile-subheader">GSTIN Number: <?php echo $row['gst_number']; ?></h3>
        <h2 class="profile-header">Profile Skills:</h2>
        <div class="profile-skills">
            <span class="badge badge-primary">Plumber</span>
            <span class="badge badge-primary">Electrician</span>
            <span class="badge badge-primary">Carpenter</span>
        </div>
        <h2 class="profile-header">Quick Information</h2>
        <p class="profile-description"><?php echo $row['description']; ?></p>

        <h2 class="profile-header">Social Media Links:</h2>
        <ul class="profile-social-media">
            <li><a href="<?php echo $row['social_media_link1']; ?>"><i class="ri-facebook-fill"></i></a></li>
            <li><a href="<?php echo $row['social_media_link2']; ?>"><i class="ri-twitter-fill"></i></a></li>
            <li><a href="<?php echo $row['social_media_link3']; ?>"><i class="ri-instagram-fill"></i></a></li>
            <li><a href="<?php echo $row['social_media_link4']; ?>"><i class="ri-linkedin-fill"></i></a></li>
        </ul>
    </div>
    </div>
    <?php
        }
    } else {
        // If no results were found, display an error message
        echo "Sorry, no profile data found.";
    }
?>
        <div class="feedback-report-container ">
        <?php include ('feedbackForm.php');?>
        </div>


    </div>
    </div>
    </div>
</div>



    <!-- bootstrap 4 cdn -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- for feedback form -->
    
     <script> 
       document.getElementById("feedbackBtn").addEventListener("click", function() {
        document.getElementById("feedbackModal").style.display = "block";
    });

    document.getElementsByClassName("close")[0].addEventListener("click", function() {
        document.getElementById("feedbackModal").style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target == document.getElementById("feedbackModal")) {
            document.getElementById("feedbackModal").style.display = "none";
        }
    });
</script>
      
<script>
    // JavaScript code for handling report button click event
    document.getElementById("reportBtn").addEventListener("click", function() {
        // Show toast message asking for confirmation
        if (confirm("Are you sure you want to report this service provider?")) {
            // Report the service provider
            // You can add your logic to report the service provider here
            // For example, you can make an API call to report the service provider
            // Once the report is submitted, you can show a success toast message
            alert("Service provider has been reported successfully!");
        } else {
            // User canceled the report, show a toast message
            alert("Report canceled.");
        }
    });
</script>
</body>

</html>