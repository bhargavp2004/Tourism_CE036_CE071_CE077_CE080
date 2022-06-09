<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polo Forest</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel = "stylesheet" href = "navbar.css">
    <link rel = "stylesheet" href = "bak.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    </head>
<style>
  body{
    font-family : Montserrat;
  }
</style>
   <body>

   <navbar2>
    
    <a href = "home.php"><i class = "uil uil-estate"></i>Home</a>

</navbar2>
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
                  <img src="b1.jpg">
              </div>

              <div class="slide">
                <img src="b2.jpeg">
              </div>
              
              <div class="slide">
                <img src="b3.jpg">
              </div>
            
              <div class="slide">
                <img src="b4.jpg">
              </div>
          
              <div class="slide">
                <img src="b5.jpeg">
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
    <div class="book">
      <div class="ts1">
        Rs 1400/person
      </div>
      <div class="ts">
        Includes
      </div>
      <div class="bo1">
        <i class="uil uil-bus"></i>
        Travelling
      </div>
      <div class="bo2">
        <i class="uil uil-utensils-alt"></i>
        Food
      </div>
      <div class="bo3">
        <i class="uil uil-desert"></i>
        Activites
      </div>
      <div class="bo4">
        <i class="uil uil-sign-alt"></i>
        Guide
      </div>
      <div class="button">
        <a href="booking.php"><div class="now"><p>Book Now</p></div></a>
      </div>
    </div>
       <div class="happy">     
            <h1>Bakor Nature Camp</h1>
            <div class="small">Best place for Meditation and Photographers</div>
    </div>

       <div class="icon1">
       <i class="uil uil-schedule"></i>
       </div>
       <div class="ab1">Duration</div><br>
       <div class="s1">2 Days/1 Nights</div>
 
       <div class="icon2">
        <i class="uil uil-screw"></i>
       </div>
        <div class="ab2">Difficult</div><br>
        <div class="s2">Easy</div>

       <div class="icon3">
        <i class="uil uil-users-alt"></i>
       </div>
         <div class="ab3">Age Group</div><br>
         <div class="s3">8-40 years</div>

        <div class="icon4">
            <i class="uil uil-mountains-sun"></i>
        </div>
         <div class="ab4">Max Altitude</div><br>
         <div class="s4">550ft</div>

         <hr style="width:50%;color:gray;background-color:rgba(128, 128, 128, 0.427);margin-left: 210px;margin-top: 30px;">
         
         <div class="about">
            <h2>ABOUT</h2>
            <div class="abt">Bakor is a beautiful village situated in Mahisagar District of Gujarat. The campsite is located 
                close to Rajasthan Border. In monsoon, Bakor is full of green grass, shrubs, bushes and green tall trees.
            </div>
         </div>

         <hr style="width:50%;color:gray;background-color:rgba(128, 128, 128, 0.427);margin-left: 210px;margin-top: 30px;">
         
         <div class="timeline">
           <h1> Schedule</h1>
          <div class="outer">
            <div class="card">
              <div class="info">
                <h3 class="title">Day 1</h3>
                <h2>Sightseeing & Stay at Bakor</h2>
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 2</h3>
                <h2>Kadana Dam Visit & Returning</h2>
                <img src="bd2.jpg">
              </div>
            </div>
            
            
          </div>
        </div>
        <hr style="width:80%;color:gray;background-color:rgba(128, 128, 128, 0.427);margin-left: 210px;margin-top: 30px;">
   </body>

</html> 