<?php
 session_start();

 if (isset($_GET['logout'])) {
  unset($_SESSION['user']);
  unset($_SESSION['username']);
  unset($_SESSION['surname']);
  
  session_unset();
  session_destroy();
  header("Location: login_register.php");
  exit;
 }