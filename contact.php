<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="test.css">
  <link rel="stylesheet" href="kerala.css">

  <style>
       body{
    background-image : url('https://wallpaperaccess.com/full/2150657.jpg');
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
  height : 450px;
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

  </style>
</head>

<body>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
        <a href="home.php" class="w3-bar-item w3-button"><i class = "uil uil-estate"></i>Home</a>
        <a href="team.php" class="w3-bar-item w3-button"><i class="uil uil-users-alt"></i>Team</a>
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



  <center>

    <form action="mailto:bhargavp2004@gmail.com" method="post" enctype = "text/plain">

        <div class="form">
          <label for="inputEmail4">Email</label>
          <br>
          <br>
          <input type="text" class="inputbox" name="username" id="inputEmail4" placeholder="Enter your email">
          <br>
          <br>

          <label for="mobilenumber">Mobile Number</label>
          <br>
          <br>

          <input type="text" class="inputbox" name="mobilenumber" id="mobilenumber" placeholder="Enter your mobile number">
          <br>
          <br>

          <label for="complains">Queries/Complain/Message</label>
          <br>
          <br>

          <input type="textarea" class="inputbox" name="complains" id="complains" placeholder="Enter complains/queries/messages">
          <br>
          <br>

          <button type="submit" class="button">send</button>
      </form>
    </center>
  </div>

</body>

</html>