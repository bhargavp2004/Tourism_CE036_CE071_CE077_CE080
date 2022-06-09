<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEAM</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="kerala.css">
<style>
    body{
        font-family : montserrat;
        background-image : url('https://s26162.pcdn.co/wp-content/uploads/2020/12/1HRcVRb4AmLrt5E0gANvWcA.jpeg');
        background-size : cover;
        background-repeat : no-repeat;
    }

    .forbox{
        background-color : rgb(25, 58, 131, 0.4);
        background-size : cover;
        background-repeat : no-repeat;
        margin-left : 100px;
        margin-right : 100px;
        margin-top : 100px;
        height : 500px;
    }

    forimage{
        float : left;
        width : 25%;
    }

    img {
    border-radius: 50%;
    border-color: black;
}
    .fortext{
        width : 25%;
        font-style : bold;
        color : white;
    }
</style>
<body>
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
        <a href="home.php" class="w3-bar-item w3-button"><i class = "uil uil-estate"></i>Home</a>
        <a href="team.php" class="w3-bar-item w3-button"><i class="uil uil-users-alt"></i>Team</a>
        <a href="#" class="w3-bar-item w3-button"><i class="uil uil-user-circle"></i>About</a>
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
    <div class = "forbox">
        <div class = "fortext">
    <h1>Developers of Tourismo</h1>
        </div>
<br>
<br>
<br>
    <forimage>
        <img src="rahul2.jpeg" alt="Avatar" style="width:205px">
        <div class = "fortext">
        <p>Rahul Nagvadia</p>
    </div>
    </forimage>
    <forimage>
        <img src="bhargav.png" alt="Avatar" style="width:205px">
        <div class = "fortext">
            <p>Bhargav Patel</p>
        </div>
    </forimage>
    <forimage>
        <img src="akshar.jpg" alt="Avatar" style="width:205px">
        <div class = "fortext">
            <p>Akshar Parekh</p>
        </div>
    </forimage>
    <forimage>
        <img src="harsh.jpg" alt="Avatar" style="width:205px">
        <div class = "fortext">
            <p>Harsh Godkar</p>
        </div>
    </forimage>
</div>
</center>
</body>
</html>