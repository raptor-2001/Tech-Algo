<?php

session_start();
include_once('dbcon.php');

// Getting the registration
if(isset($_POST['register'])){
  $name = $_POST['name'];
  $phone_number = "+91".$_POST['phone-number'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = $_POST['role'];

  $userProperties = [
    'email' => $email,
    'emailVerified' => false,
    'phoneNumber' => $phone_number,
    'password' => $password,
    'displayName' => $name,
    'role' => $role,
  ];

  $createdUser = $auth->createUser($userProperties);
  if($createdUser){
    $_SESSION['status'] = 'User created succesfully';
    header("Location: ./pages/login.php");
  }else{
    $_SESSION['status'] = 'User not created succesfully';
    header("Location: ./pages/register.php");
  }
}


