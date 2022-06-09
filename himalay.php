<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himalaya</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="kerala.css">
    <link rel="stylesheet" href="him.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
      <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
      <a href="team.php" class="w3-bar-item w3-button"><i class="uil uil-users-alt"></i>Team</a>
      <a href="contact.php" class="w3-bar-item w3-button"><i class="uil uil-envelope-search"></i>Contact us</a>
      <a href="login.php" class="w3-bar-item w3-button"><i class="uil uil-signin"></i>Login</a>
      <a href="logout.php" class="w3-bar-item w3-button"><i class="uil uil-signout"></i>Logout</a>
    </div>
    <head>
      <style>
        body{
          font-family : montserrat;
        }
      </style>
    </head>
  
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
    

   <body>

       <div class="slider">
        
           <div class="slides">

            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <input type="radio" name="radio-btn" id="radio5">

              <div class="slide first">
                  <img src="him1.jpg">
              </div>

              <div class="slide">
                <img src="him2.jpg">
              </div>
              
              <div class="slide">
                <img src="him3.jpg">
              </div>
            
              <div class="slide">
                <img src="him4.jpg">
              </div>
          
              <div class="slide">
                <img src="him5.jpg">
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
           var counter=1;
           setInterval(function(){
               document.getElementById('radio' + counter).checked=true;
               counter++;

               if(counter>5){
                   counter=1;
               }
           }, 5000);
       </script>
       <div class="happy">     
            <h1>Explore Himalayas & Visit Amritsar!</h1>
            <div class="small">Exploring The Untouched Beauty Of Himalayas</div>
    </div>

       <div class="icon1">
       <i class="uil uil-schedule"></i>
       </div>
       <div class="ab1">Duration</div><br>
       <div class="s1">12 Days/11 Nights</div>
 
       <div class="icon2">
        <i class="uil uil-screw"></i>
       </div>
        <div class="ab2">Difficult</div><br>
        <div class="s2">Easy to Moderate</div>

       <div class="icon3">
        <i class="uil uil-users-alt"></i>
       </div>
         <div class="ab3">Age Group</div><br>
         <div class="s3">12-35 years</div>

        <div class="icon4">
            <i class="uil uil-mountains-sun"></i>
        </div>
         <div class="ab4">Max Altitude</div><br>
         <div class="s4">14000ft</div>

         <hr style="width:50%;color:gray;background-color:rgba(128, 128, 128, 0.427);margin-left: 210px;margin-top: 30px;">
         
         <div class="about">
            <h2>ABOUT</h2>
            <div class="abt">Invincible – the Youth governed NGO, here presents the best in class “Explore Himachal” programme, 
                which covers Dalhousie, Manali & Amritsar in a very short amount of time. Being more specific, this is not a \
                leisure tour, but an adventure camping cum exploration programme, in which participation of youth is expected and
                 they undergo a unique learning experience with natural and heritage touch. Manali, Dalhousie are the most famous
                  places for trekking in Himachal Pradesh. They constitute of the most scenic beauties, highest peaks of the
                   Himalayan range, ancient histories and exciting adventures. This programme covers both the beautiful destinations 
                   in 12 days including Amritsar. Amritsar is a city in Punjab where many of the histories of the non-independent India
                    lie. This programme consists of both treks and drives to cover major destinations. Get ready for the most
                     exciting exploration.
            </div>
         </div>

         <hr style="width:50%;color:gray;background-color:rgba(128, 128, 128, 0.427);margin-left: 210px;margin-top: 30px;">
         
         <div class="timeline">
           <h1> Schedule</h1>
          <div class="outer">
            <div class="card">
              <div class="info">
                <h3 class="title">Day 1</h3>
                <h2>Departure from Ahmedabad </h2>
                
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 2</h3>
                <h2>Arrival at Pathankot & Depart for Dalhousie</h2>
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 3</h3>
                <h2>Day for Dalhousie Sightseeing</h2>
                <img src="dal.jpg">
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 4</h3>
                <h2>Visit Daikund Peak & Khajjiar</h2>
                <img src="dai.jpg">
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 5</h3>
                <h2>Arrival at Manali Campsite</h2>
                <img src="man.jpg">
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 6</h3>
                <h2>Trekking towards Advanced Base Camp</h2>
                <img src="trek.jpg">
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 7</h3>
                <h2>Trek to Bhrigu Lake, Visit & Back</h2>
                <img src="bhir.jpg">
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 8</h3>
                <h2>Return Trek to Gulaba & River Rafting</h2>
                <img src="river.jpg">
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 9</h3>
                <h2>Day for Manali Sightseeing & Paragliding</h2>
                <img src="para.jpg">
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 10</h3>
                <h2>Day for Sightseeing at Amritsar</h2>
                <img src="amri.jpg">
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 11</h3>
                <h2>Return Journey towards Ahmedabad</h2>
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 12</h3>
                <h2>Arrival at Ahmedabad</h2>
              </div>
            </div>
          </div>
        </div>
        <hr style="width:80%;color:gray;background-color:rgba(128, 128, 128, 0.427);margin-left: 210px;margin-top: 30px;">
   </body>

</html> 