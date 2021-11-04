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
                        // (B) PROCESS SEARCH WHEN FORM SUBMITTED
                        if (isset($_POST['search'])) 
                        {
                            // (B1) SEARCH FOR USERS
                            require "2-search.php";
                            
                            // (B2) DISPLAY RESULTS
                            if (count($results) > 0) 
                            {
                            foreach ($results as $r) 
                            {
                                printf("<div><img src='%s'> 
                                <a >%s</a></div>",$r['prand_image'], $r['prand_name']);
                            }
                            } 
                            else 
                            { 
                            echo "No results found"; 
                            }
                        }
                    ?>  
                </div>
            </div>   
        </div>     
    </body>
</html>

<?php

    include 'footer.php';
    ?>



