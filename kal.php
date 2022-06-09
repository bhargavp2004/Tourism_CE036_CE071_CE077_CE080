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
                  <img src="k1.jpg">
              </div>

              <div class="slide">
                <img src="k2.jpg">
              </div>
              
              <div class="slide">
                <img src="k3.jpg">
              </div>
            
              <div class="slide">
                <img src="k4.jpg">
              </div>
          
              <div class="slide">
                <img src="k5.jpg">
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
            <h1>Kasol Sar Pass Trekking Expedition</h1>
            <div class="small">Experience the most glamorous trek of Himalayas!</div>
    </div>

       <div class="icon1">
       <i class="uil uil-schedule"></i>
       </div>
       <div class="ab1">Duration</div><br>
       <div class="s1">6 Days/5 Nights</div>
 
       <div class="icon2">
        <i class="uil uil-screw"></i>
       </div>
        <div class="ab2">Difficult</div><br>
        <div class="s2">Easy</div>

       <div class="icon3">
        <i class="uil uil-users-alt"></i>
       </div>
         <div class="ab3">Age Group</div><br>
         <div class="s3">16-35 years</div>

        <div class="icon4">
            <i class="uil uil-mountains-sun"></i>
        </div>
         <div class="ab4">Max Altitude</div><br>
         <div class="s4">13,000ft</div>

         <hr style="width:50%;color:gray;background-color:rgba(128, 128, 128, 0.427);margin-left: 210px;margin-top: 30px;">
         
         <div class="about">
            <h2>ABOUT</h2>
            <div class="abt">Kasol Sar Pass trek (13850 ft) tucked away in the folds of Pir Panjal Range, 
                hosts a trail along the changing scenes of the turbulent Parvati River, quaint hamlets, 
                gushing waterfalls, endless forests, crisp green meadows, pebbled rivulets and so much more 
                that it’s hard not to give the plot right away 
            </div>
         </div>

         <hr style="width:50%;color:gray;background-color:rgba(128, 128, 128, 0.427);margin-left: 210px;margin-top: 30px;">
         
         <div class="timeline">
           <h1> Schedule</h1>
          <div class="outer">
            <div class="card">
              <div class="info">
                <h3 class="title">Day 1</h3>
                <h2>Reporting at Kasol Campsite</h2>
                <img src="kd1.jpg">
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 2</h3>
                <h2>Trek to Grahan Village</h2>
                <img src="kd2.jpg">
              </div>
            </div>
            <div class="card">
                <div class="info">
                  <h3 class="title">Day 3</h3>
                  <h2>Trek from Grahan to Min Thach</h2>
                  <img src="kd3.jpg">
                </div>
              </div>
              <div class="card">
                <div class="info">
                  <h3 class="title">Day 4</h3>
                  <h2>Trek from Min Thach to Nagaru</h2>
                  <img src="kd4.jpg">
                </div>
              </div>
              <div class="card">
                <div class="info">
                  <h3 class="title">Day 5</h3>
                  <h2>Trek from Nagaru to Biskeri Thach</h2>
                  <img src="kd5.jpg">
                </div>
              </div>
              <div class="card">
                <div class="info">
                  <h3 class="title">Day 6</h3>
                  <h2>Trek from Biskeri Thach to Bursheni</h2>
                  <img src="kd6.jpg">
                </div>
              </div>
            
          </div>
        </div>
        <hr style="width:80%;color:gray;background-color:rgba(128, 128, 128, 0.427);margin-left: 210px;margin-top: 30px;">
   </body>

</html> 