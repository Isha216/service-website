<?php
session_start();
// db connection file
include 'connection.php';
require_once('if_logged_in.php');

// retrieves form data from login_form.html
$uname = $_POST['username'];
$pass = $_POST['password'];

// checking validity of username and password (from db)
$row = mysqli_query($conn, "SELECT user_id, password FROM user_details WHERE username = '$uname'");

if ($row->num_rows > 0) {
    $row = $row->fetch_assoc();

    if (password_verify($pass, $row["password"])) {
        // regenerate session id
        session_regenerate_id();
        $_SESSION['login'] = true;
        $_SESSION['id'] = $row["user_id"];
        $_SESSION['login_time'] = time();

        // redirect the user to members area/dashboard page
        header("location:home.php");
    } else {
        header("location:login_form.php?lerr=2");  // 2: invalid password
    }
} else {
    header("location:signup_form.php?uname=$uname");  // redirect to sign up form if user does not exist
}


/* 
// checking validity of username and password (hardcoded)
if( $uname == "admin" && $pass == "admin" )
{
    // regenerate session id
    session_regenerate_id();
    $_SESSION['login'] = true;
    $_SESSION['id'] = 1;
    $_SESSION['login_time'] = time();

    // redirect the user to members area/dashboard page
    header("location:index.php");
} */
?>