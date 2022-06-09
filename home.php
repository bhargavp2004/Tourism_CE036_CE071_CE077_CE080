<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
  
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="typed.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="k.css">
    <link rel="stylesheet" href="home.css">

</head>

<style>
    body {
        background-image : url('https://webunwto.s3.eu-west-1.amazonaws.com/2022-01/making-tourism-stronger-and-ready-for-the-future_0.jpg?VersionId=TVw01pVgj36eqWdGc4MwtC25QZwk4hcB');
        background-repeat : no-repeat;
        background-attachment : fixed;
        font-family : montserrat;
    }

</style>

<body>

    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
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
<br>
<br>
<br>
    <div class="slider">

        <div class="slides">

            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <input type="radio" name="radio-btn" id="radio5">

            <div class="slide first">
                <img src="home1.jpg">
            </div>

            <div class="slide">
                <img src="home2.jfif">
            </div>

            <div class="slide">
                <img src="home3.jpg">
            </div>

            <div class="slide">
                <img src="home4.jpg">
            </div>

            <div class="slide">
                <img src="home5.jpg">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
                <div class="auto-btn5"></div>
            </div>
        </div>

        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
            <label for="radio5" class="manual-btn"></label>
        </div>

    </div>

    <script type="text/javascript">
        var counter = 1;
        setInterval(function () {
            document.getElementById('radio' + counter).checked = true;
            counter++;

            if (counter > 5) {
                counter = 1;
            }
        }, 5000);
    </script>

    <div class="exp">Experience</div>
    <span id="typec"></span>
    <script>
        let animate = new Typed('#typec', {
            strings: ["Adventure", "Nature", "Thrill", "Peace", "Excitement"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true,
        })
    </script>

    <div class="i1">
        <div class="icon1">
            <i class="uil uil-smile"></i>
        </div>
        <div class="ab1">1,50,000</div><br>
        <div class="s1">Participants</div>
    </div>

    <div class="i2">
        <div class="icon2">
            <i class="uil uil-laughing"></i>
        </div>
        <div class="ab2">1000+</div><br>
        <div class="s2">Volunteers</div>
    </div>

    <div class="i3">
        <div class="icon3">
            <i class="uil uil-trees"></i>
        </div>
        <div class="ab3">9</div><br>
        <div class="s3">Treks</div>
    </div>

    <div class="i4">
        <div class="icon4">
            <i class="uil uil-10-plus"></i>
        </div>
        <div class="ab4">14</div><br>
        <div class="s4">Years</div>
    </div>

    <hr style="width:50%;color:gray;background-color:rgba(128, 128, 128, 0.427);margin-left: 360px;margin-top: 90px;">

        <div class="mon">Monsoon Treks:</div>

        <div class="trek1">

            <div class="ked">
                <a href="ked.php"><img src="kedmon.jpg"></a>
            </div>
            <div class="polo">
                <a href="pol.php"><img src="polmon.jpg"></a>
            </div>
            <div class="kd">Kedarnath & Tungnath</div>
            <div class="pl">Polo Forest </div><br>

            <div class="val">
                <a href="vall.php"><img src="valmon.jpg"></a>
            </div>
            <div class="vl">Valley of Flowers</div>
            
        </div>
        <hr style="width:50%;color:gray;background-color:rgba(128, 128, 128, 0.427);margin-left: 360px;margin-top: 60px;">
        <div class="win">Winter Treks:</div>
        
        <div class="trek2">

            <div class="ham">
                <a href="hamp.php"><img src="hamwin.jpg"></a>
            </div>
            <div class="kal">
                <a href="kal.php"><img src="kaswin.jpg"></a>
            </div>
            <div class="ha">Hampta Pass</div>
            <div class="ka">Kasol Sar Pass</div><br>

            <div class="bak">
                <a href="bak.php"><img src="bakwin.jpg"></a>
            </div>
            <div class="ba">Bakor</div>
            
        </div>

        <hr style="width:50%;color:gray;background-color:rgba(128, 128, 128, 0.427);margin-left: 360px;margin-top: 60px;">

        <div class="su">Summer Treks:</div>
         
        <div class="trek3">

            <div class="frn">
                <a href="frnds.php"><img src="frnsum.jpg"></a>
            </div>
            <div class="hi">
                <a href="himalaya.php"><img src="amrsum.jfif"></a>
            </div>
            <div class="fn">Mt Friendship Expedition</div>
            <div class="hm">Himalayas & Visit Amritsar!</div><br>

            <div class="sau">
                <a href="sapu.php"><img src="sapsum.jpg"></a>
            </div>
            <div class="sa">saputara</div>
            
        </div>

        <hr style="width:50%;color:gray;background-color:rgba(128, 128, 128, 0.427);margin-left: 360px;margin-top: 60px;"><br><br>
    
</body>

</html>