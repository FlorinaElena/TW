<?php
session_start();
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('fenrir', 'driverUsers', '5WHzP4DvVy', 'driverUsers');

if (isset($_POST['reset_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($email)) {
      array_push($errors, "Email is required");
  }
  if (empty($password)) {
      array_push($errors, "Password is required");
  }
  $user_check_query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user['email'] !== $email) {
      array_push($errors, "email does not exist");
  }
  if (count($errors) == 0) {
    $password = md5($password);
  	$query = "UPDATE users SET password = '$password' WHERE email='$email'";
    mysqli_query($db, $query);
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $email;
  	header('location: LogedIn.php');
}
else header('location: login_error.php');
}
  ?>
