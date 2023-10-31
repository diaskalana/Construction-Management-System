<?php
session_start();

// initializing variables
$user_name = "";
$first_name = "";
$last_name = "";
$title = "";
$company = "";
$cNumber = "";
$dc_number = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cms');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $user_name = mysqli_real_escape_string($db, $_POST['userName']);
  $first_name = mysqli_real_escape_string($db, $_POST['firstName']);
  $last_name = mysqli_real_escape_string($db, $_POST['lastName']);
  $title = mysqli_real_escape_string($db, $_POST['workTitle']);
  $company = mysqli_real_escape_string($db, $_POST['companyName']);
  $cNumber = mysqli_real_escape_string($db, $_POST['cutomerNum']);
  $dc_Number = mysqli_real_escape_string($db, $_POST['contact']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($first_name)) { array_push($errors, "First name is required"); }
  if (empty($last_name)) { array_push($errors, "Last name is required"); }
  if (empty($title)) { array_push($errors, "Work tital is required"); }
  if (empty($company)) { array_push($errors, "Company name is required"); }
  if (empty($cNumber)) { array_push($errors, "Customer number is required"); }
  if (empty($dc_Number)) { array_push($errors, "Contact number is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE userName='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['userName'] === $username) {
      array_push($errors, "UserName already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (userName, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['userName'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location:  profile.html');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['userName']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE userName='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['userName'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: profile.html');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
?>


<!-- 
    Student name: Thathsara S.M.K. 
    Student ID: IT21219566 
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->
