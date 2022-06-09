<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedarnath</title>
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
                  <img src="ke1.jpg">
              </div>

              <div class="slide">
                <img src="ke2.jpg">
              </div>
              
              <div class="slide">
                <img src="ke3.jpg">
              </div>
            
              <div class="slide">
                <img src="ke4.jpg">
              </div>
          
              <div class="slide">
                <img src="ke5.jpg">
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
            <h1>Kedarnath & Tungnath Trek</h1>
            <div class="small">Walking Towards God's Own Land</div>
    </div>

       <div class="icon1">
       <i class="uil uil-schedule"></i>
       </div>
       <div class="ab1">Duration</div><br>
       <div class="s1">9 Days/8 Nights</div>
 
       <div class="icon2">
        <i class="uil uil-screw"></i>
       </div>
        <div class="ab2">Difficult</div><br>
        <div class="s2">Easy to Moderate</div>

       <div class="icon3">
        <i class="uil uil-users-alt"></i>
       </div>
         <div class="ab3">Age Group</div><br>
         <div class="s3">15-35 years</div>

        <div class="icon4">
            <i class="uil uil-mountains-sun"></i>
        </div>
         <div class="ab4">Max Altitude</div><br>
         <div class="s4">12,073ft</div>

         <hr style="width:50%;color:gray;background-color:rgba(128, 128, 128, 0.427);margin-left: 210px;margin-top: 30px;">
         
         <div class="about">
            <h2>ABOUT</h2>
            <div class="abt">Presenting you the most awaited trek to the ancient temple of 'Kedarnath'.
                 The thirst of devotees to visit this place, is what we thrive to fulfil. In India, 
                 one considers it a great achievement when Char Dham Yatra is done and Kedarnath Temple plays 
                 a very crucial role in this Yatra. Captured between the Mountains, the temple gives a surreal 
                 view with the Kedarnath and other peaks setting the background for the temple. The journey towards 
                 Kedarnath is as beautiful as the temple, with green landscapes on your way. It is a pilgrimage 
                 place that resembles 'the lord of the field'. The temple resides in the Rudraprayag district of
                  Uttarakhand state. It is dedicated to Lord Shiva and thus the devotees of 'Lord Shiva' are driven 
                  here. The temple is believed to be more than 1,200 years old, which was built by Adi Shankaracharya.
                   In winter the temple gets drown under snow and thus the temple is closed in winter.
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
                <h2>Arrival at Haridwar & Night Stay</h2>
                <img src="ked2.jpg">
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 3</h3>
                <h2>Departing from Haridwar/Rishikesh to Sitapur</h2>
                <img src="ked3.jpg">
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 4</h3>
                <h2>Trek to Kedarnath</h2>
                <img src="ked4.jpg">
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 5</h3>
                <h2>Temple Visit & Returning to Chopta</h2>
                <img src="ked5.jpg">
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 6</h3>
                <h2>Trek to Tungnath & Return</h2>
                <img src="ked6.jpg">
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 7</h3>
                <h2>Journey back to Haridwar</h2>
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 8</h3>
                <h2>Rishikesh Sightseeing & Return Journey</h2>
                <img src="ked8.jpg">
              </div>
            </div>
            <div class="card">
              <div class="info">
                <h3 class="title">Day 9</h3>
                <h2>Arrival at Ahmedabad</h2>
              </div>
            </div>
            
          </div>
        </div>
        <hr style="width:80%;color:gray;background-color:rgba(128, 128, 128, 0.427);margin-left: 210px;margin-top: 30px;">
   </body>

</html> 