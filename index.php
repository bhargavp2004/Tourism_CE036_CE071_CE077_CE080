<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  // Check if username is empty
  if (empty(trim($_POST["username"]))) {
    $username_err = "Username cannot be blank";
  } else {
    $sql = "SELECT id FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "s", $param_username);

      // Set the value of param username
      $param_username = trim($_POST['username']);

      // Try to execute this statement
      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) == 1) {
          $username_err = "This username is already taken";
        } else {
          $username = trim($_POST['username']);
        }
      } else {
        echo "Something went wrong";
      }
    }
  }

  // mysqli_stmt_close($stmt);

  if (empty(trim($_POST['password']))) {
    $password_err = "Password cannot be blank";
  } elseif (strlen(trim($_POST['password'])) < 5) {
    $password_err = "Password cannot be less than 5 characters";
  } else {
    $password = trim($_POST['password']);
  }

  // Check for confirm password field
  if (trim($_POST['password']) !=  trim($_POST['confirm_password'])) {
    $password_err = "Passwords should match";
  }


  // If there were no errors, go ahead and insert into the database
  if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

      // Set these parameters
      $param_username = $username;
      $param_password = password_hash($password, PASSWORD_DEFAULT);

      // Try to execute the query
      if (mysqli_stmt_execute($stmt)) {
        header("location: login.php");
      } else {
        echo "Something went wrong... cannot redirect!";
      }
    }
    mysqli_stmt_close($stmt);
  }
  mysqli_close($conn);
}

?>
<!doctype html>
<html lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="test.css">
  <link rel="stylesheet" href="kerala.css">
<head>
  <style>
    body{
    background-image : url('https://wallpaperaccess.com/full/93182.jpg');
    background-repeat : no-repeat;
    background-size : cover;
    font-family : montserrat;
  }
.form{
  text-align : center;
  margin-top : 50px;
  margin-left : 400px;
  margin-right: 400px;
  margin-top : 50px;
  background-color : rgb(61, 130, 189, 0.7);
  border-radius : 8px;
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
  <a href="home.php" class="w3-bar-item w3-button"><i class = "uil uil-estate"></i>Home</a>
    <a href="team.php" class="w3-bar-item w3-button"><i class="uil uil-users-alt"></i>Team</a>
    <a href="contact.php" class="w3-bar-item w3-button"><i class="uil uil-envelope-search"></i>Contact us</a>
    <a href="login.php" class="w3-bar-item w3-button"><i class="uil uil-signin"></i>Login</a>
    <a href="logout.php" class="w3-bar-item w3-button"><i class="uil uil-signout"></i>Logout</a>
  </div>

  <div id="main">

    <div class="teal">
      <button id="openNav" class="w3-button teal w3-xlarge" onclick="w3_open()">&#9776;</button>
      <div>
      </div>
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

    <div>
      <h3>Please Register Here:</h3>
      <hr>
      <center>
        <form action="" method="post">

          <div class="form">
            <label for="inputEmail4">Username</label>
            <br>
            <br>
            <input type="text" class="inputbox" name="username" id="inputEmail4" placeholder="Email">
            <br>
            <br>
            <?php
            if (isset($username_err)) {
              echo $username_err;
              echo "<br>";
            }
            // echo "<br>";
            ?>

            <label for="inputPassword4">Password</label>
            <br>
            <br>

            <input type="password" class="inputbox" name="password" id="inputPassword4" placeholder="Enter Password">
            <br>
            <br>

            <label for="inputPassword4">Confirm Password</label>
            <br>
            <br>

            <input type="password" class="inputbox" name="confirm_password" id="inputPassword" placeholder="Re-enter the Password">
            <br>
            <br>


            <?php
            echo "<br>";
            if (isset($password_err)) {
              echo $password_err;
            }
            echo "<br>";
            ?>

            <button type="submit" class="button">Sign in</button>
        </form>
      </center>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>