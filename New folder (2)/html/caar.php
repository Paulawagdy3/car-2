<?php

include 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../css/caar2.css" rel="stylesheet">
    </head>
    <body>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cardatabase";
$port = "3307";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM prand where id=".$_GET['id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div class='logo1'>
            <div class='img-logo'>
                <img src = ". $row["prand_image"]. " alt = " . $row["prand_name"]. "> 
            </div>
            <div class='text-img'>
                <a href='#' >" . $row["prand_name"]. "</a>
            </div>
        </div>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>  
        <div class="text">
            <div class="container1">
                <div class="ul">
                    <div class="nav-info">
                        <input class="we" placeholder="ENTER ADDRESS" type="text">
                        <input class="we" placeholder="SELECT TRANSMISSION" type="text">
                        <input class="we" placeholder="SELECT MODEL YEAR" type="text">
                        <button class="we">SEARCH</button>
                    </div>
                </div>
            </div>
        </div>

        <!--start rating-->
        <div class="container1">
            <div class="rating-car1">
                <div class="rating-car">
                    <div class="car1">
                        <img src="../photo/2018-Nissan-370Z-Nismo.jpg">
                        <a class="combany">
                            nisaan
                        </a>
                        <br>
                        <a class="name">
                            nissan 370z
                        </a>
                        <br>
                        <div class="info">
                            <a class="gear">manual</a>
                            <a class="chear">2</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rating-car1">
                <div class="rating-car">
                    <div class="car1">
                        <img src="../photo/2018-Nissan-370Z-Nismo.jpg">
                        <a class="combany">
                            nisaan
                        </a>
                        <br>
                        <a class="name">
                            nissan 370z
                        </a>
                        <br>
                        <div class="info">
                            <a class="gear">manual</a>
                            <a class="chear">2</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!--end rating-->    
    </body>
</html>
