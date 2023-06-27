<?php
session_start();
require_once "server.php";

if(isset($_POST["login"])) {
  unset($error);
  $error = "";
  $email = $conn->real_escape_string(stripslashes(strip_tags($_POST["email"])));
  $password = $conn->real_escape_string(stripslashes(strip_tags($_POST["password"])));
  // $hashedPass = password_hash($password, PASSWORD_DEFAULT);
  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  if($result->num_rows == 0)
    $error = "There is no account created with this email, try signing up.";
  else if($result->num_rows == 1 && password_verify($password, $row['pass'])) {
    $_SESSION['email'] = $email;
    header('Location: index.php');
  }
  if($error != "")
    echo $error;
}
?>

<html>
<head>
  <link rel="stylesheet" href="css_login.css">
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
    <form id="login" method="POST">
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
        <input type="submit" name="login" id="log" value="LogIn Here">
        <br><br>
        <br><br>
        Don't have an account?<a href="#" onclick="redirectToPage()">Create one</a>
    <script>
  function redirectToPage() {
    window.location.href = "page3.php"; 
  }
</script>
    </form>
</div>
</body>
</html>