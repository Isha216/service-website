<?php 
// db connection file
include 'connection.php';

// retrieves form data from signup_form.php
$uname = $_POST['username'];
$pass = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];

// hash the password
$hash = password_hash($pass, PASSWORD_DEFAULT);

// check if the email is already used
$sql1 = "SELECT * FROM user_details WHERE user_email='$email'";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {
    // email already used, display error message
    header("location:signup_form.php?serr=1");
    exit;
}

// check if the username is already used
$sql2 = "SELECT * FROM user_details WHERE username='$uname'";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
    // username already used, display error message
    header("location:signup_form.php?serr=2");
    exit;
}

// insert user data into user_details table
$sql = "INSERT INTO user_details (username, password, name, user_email) VALUES ('$uname', '$hash', '$name', '$email')";

if (mysqli_query($conn, $sql)) {
    header("location:login_form.php");  // redirect to login page after successful signup
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>