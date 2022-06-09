<html>
  <head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="test.css">
  <link rel="stylesheet" href="kerala.css">
    <style>
      body{
        background-image : url('https://cdn.britannica.com/74/114874-050-6E04C88C/North-Face-Mount-Everest-Tibet-Autonomous-Region.jpg');
        font-family : montserrat;
        background-repeat: no-repeat;
        background-size : cover;
      }
      .form{
  text-align : center;
  margin-top : 150px;
  margin-left : 400px;
  margin-right: 400px;
  margin-top : 50px;
  background-color : rgb(61, 130, 189);
  border-radius : 10px;
  border-color : blue;
  color : white;
      }
      </style>
  </head>
  <body>
    <div class = "form">
      <h2>
  <?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'project');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];
$numberofpeople = $_POST['numberofpeople'];
$sql = "INSERT INTO bookinginfo (name, age, numberofpeople)
VALUES ('$name', '$age', '$numberofpeople')";

if ($conn->query($sql) === TRUE) {
  session_start();
  $noerr = "yes";
echo $name . " " . " " . "your". " " . "Tickets are booked successfully <br>
  Have a nice journey";
  echo "<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</h2>
</div>
  </body>
</html>


<html>
  <head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="test.css">
  <link rel="stylesheet" href="kerala.css">
    <style>
      .tickets{
        color : white;
        background-color : rgb(61, 130, 189);
        border-radius : 10px;
        margin-left : 100px;
        margin-right : 100px;
        font-family : montserrat;

      }
      </style>
      <body>
        <center>
        <h2 class = "tickets">
        <?php
        echo "<br>";
        
        if(!(empty($noerr)))
        {

          echo "Tourismo";

          echo "<br>";
          echo "<br>";
        
          echo "Name :" . " " . $name . " " . "<br>"; 
          echo "Age :" . " " . $age . " " . "<br>"; 
          echo "Number of People : " . " " . $numberofpeople . " " . "<br>";
        }
        ?>
        </h2>        
      </center>
      </body>
  </head>
</html>