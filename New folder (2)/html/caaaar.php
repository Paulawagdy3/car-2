<?php

include 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../css/caaaar.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="popular-makers">
            <div class="container">
                <div class="text2">
                    <p>Popular Makers</p>
                    <a>Choose</a>
                </div>

                <div class="makers">        
                    <?php 

                        $host = "localhost:3307";
                        $dbusername = "root";
                        $dbpassword = "root";
                        $dbname = "cardatabase";
                        $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                        $prand_name = filter_input(INPUT_POST, 'prand_name');
                        $prand_image = filter_input(INPUT_POST, 'prand_image');

                        $sql = "SELECT * from prand";
                        $result = $conn-> query($sql);
                        
                        if ($result-> num_rows > 0) 
                        {
                            while ($row = $result-> fetch_assoc()) {
                            echo"<div>
                            <img src = ". $row["prand_image"]. " alt = " . $row["prand_name"]. "> 
                                <a href='caar.php?id=" .$row["id"]." '>" . $row["prand_name"]. "</a>
                            </div>";
                                        
                        }
                        }
                        else
                        {
                            echo"0 result";
                        }
                        $conn-> close();
                        
                    ?>
                </div>    
            </div>   
        </div>     
    </body>
</html>

<?php

    include 'footer.php';
    ?>



