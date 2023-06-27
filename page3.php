<?php
session_start();
include "server.php";
require_once "server.php";

if(isset($_POST["signup"])) {
  unset($error);
  $error = "";
  $email = $conn->real_escape_string(stripslashes(strip_tags($_POST["email"])));
  $password = $conn->real_escape_string(stripslashes(strip_tags($_POST["password"])));
  
  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = $conn->query($sql);
  if($result->num_rows > 0)
    $error = "An account was already created with this email";
  else {
    
    $sql = "SELECT userId FROM users ORDER BY userId DESC LIMIT 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if($result->num_rows == 0)
      $lastId = 0;
    else
      $lastId = $row['userId']+1;

    $hpass = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (userId, email, pass) 
    values ('$lastId', '$email', '$hpass')";
    $result = $conn->query($sql);

    $_SESSION["email"] = $email;
    header('Location: index.php');
  }
  if($error != "")
    echo $error;
}
?>

<html>
<head>
  <link rel="stylesheet" href="css_page3.css">
  <link rel="stylesheet" href="css_bar1.css">
  <title>Cinema</title>

</head>
<body>
    <div class="bar1">
    <img src="cinematica.png  " alt="Cinema Logo">
  </div>
  <div class="bar2">
    <ul>
      <li><a href="https://github.com/Raulentiul">My Github</a></li>
      <li><a href="https://goo.gl/maps/sd9s8PaiPLPfYAJR7">Cinema Location</a></li>
      </ul>
    
  </div>
    <div class="login">
    <form id="register" method="POST">
        <label><b>Enter Email
        </b>
        </label>
        <input type="text" name="email" id="Uname" placeholder="Email">
        <br><br>
        <label><b>Enter Password
        </b>
        </label>
        <input type="Password" name="password" id="Pass" placeholder="Password">
        <br><br>
        <input type="submit" name="signup" id="log" value="SignUp Here">
        <br><br>
        <br><br>
    </form>
</div>
</body>
</html>