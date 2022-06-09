<?php
session_start();

if (isset($_SESSION['username'])) {
  header("location: home.php");
  exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (empty(trim($_POST['username'])) && empty(trim($_POST['password']))) {
    $errp = "Please enter username and password";
  } else if (empty(trim($_POST['username']))) {
    $errp = "Please enter username";
  } else if (empty(trim($_POST['password']))) {
    $errp = "Please enter password";
  } else {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
  }


  if (empty($err)) {
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;

    if (mysqli_stmt_execute($stmt)) {
      mysqli_stmt_store_result($stmt);
      if (mysqli_stmt_num_rows($stmt) == 1) {
        mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
        if (mysqli_stmt_fetch($stmt)) {
          if (password_verify($password, $hashed_password)) {

            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["id"] = $id;
            $_SESSION["loggedin"] = true;

            header("location: home.php");
          } else {
            $errmsg = "Please enter the correct password.";
          }
        }
      }
    }
  }
}


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="test.css">
  <link rel="stylesheet" href="kerala.css">

  <style>
    body {
      background-image: url('https://wallpaperaccess.com/full/93182.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      font-family: montserrat;
    }

    .form {
      text-align: center;
      margin-top: 50px;
      margin-left: 400px;
      margin-right: 400px;
      margin-top: 50px;
      background-color: rgb(61, 130, 189, 0.7);
      border-radius: 8px;
    }

    .inputbox {
      border-radius: 10px;
    }

    .button {
      background-color: white;
      color: gray;
      border-radius: 8px;
    }
  </style>

<body>

  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
    <a href="home.php" class="w3-bar-item w3-button"><i class="uil uil-estate"></i>Home</a>
    <a href="team.php" class="w3-bar-item w3-button"><i class="uil uil-users-alt"></i>Team</a>
    <a href="contact.php" class="w3-bar-item w3-button"><i class="uil uil-envelope-search"></i>Contact us</a>
    <a href="index.php" class="w3-bar-item w3-button"><i class="uil uil-user-plus"></i>Register</a>
    <a href="logout.php" class="w3-bar-item w3-button"><i class="uil uil-signout"></i>Logout</a>
  </div>

  <div id="main">

    <div class="w3-teal">
      <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>

    </div>

    <script>
      function w3_open() {
        document.getElementById("main").style.marginLeft = "25%";
        document.getElementById("mySidebar").style.width = "25%";
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("openNav").style.display = 'none';
      }

      function w3_close() {
        document.getElementById("main").style.marginLeft = "0%";
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("openNav").style.display = "inline-block";
      }
    </script>
    <div class="container mt-4">
      <h3>Please Login Here:</h3>
      <hr>

      <form action="" method="post">
        <div class="form">
          <label for="inputEmail4">Username</label>
          <br>
          <br>
          <input type="text" class="inputbox" name="username" id="inputEmail4" placeholder="Email">
          <br>
          <br>

          <label for="inputPassword4">Password</label>
          <br>
          <br>

          <input type="password" class="inputbox" name="password" id="inputPassword4" placeholder="Enter Password">
          <br>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <?php
      if (isset($err)) {
        echo $err;
      }

      echo "<br>";

      if (isset($errp)) {
        echo $errp;
      }

      echo "<br>";

      if (isset($errmsg)) {
        echo $errmsg;
      }
      ?>

    </div>
</body>

</html>