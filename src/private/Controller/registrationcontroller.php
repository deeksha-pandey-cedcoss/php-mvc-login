<?php
// registration
include_once '../assets/variable.php';
include_once BASE_PATH . '/assets/db/config.php';
if (isset($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $pswd = $_POST['pswd'];
    
      // adding the data in database
      $attributes = array('name' => "$name", 'email' => "$email", 'pswd' => "$pswd");
      $result = User::create($attributes);
      if ($result) {
         header('location:../View/login.php');
      } else {
         header('location:../View/signup.php?msg=error');
      }
   
}
?>