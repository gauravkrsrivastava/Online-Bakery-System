<?php
include 'connect.php';

session_start();
//print_r($_POST);
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $sql = "SELECT * FROM users WHERE email='$email'";
  echo $sql;
  $result = mysqli_query($conn, $sql);
  if($result->num_rows > 0){
      $row = mysqli_fetch_assoc($result);
      echo $row['password'];
      if($row['password'] == $password){
        $_SESSION['username'] = $row['username'];
        echo "<script>alert('Logged in')</script>";
        header("Location: form.php");
      }else{
        echo "<script>alert('Email or password is wrong')</script>";
      }
      
  }else{