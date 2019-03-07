<?php


    require 'header.php';
    require 'connection.php';

    
   

    
    

    $selectQuery = "SELECT * FROM administrators WHERE Administrator_ID =  ('".$_POST["Administrator_ID"]."') ";
    $result = $conn->query($selectQuery);


    
    echo "<ul>";
    
   
 
    foreach ($result as $fetchData)
    {
       echo "<li>" . $fetchData["Administrator_ID"] . 
                     $fetchData["Administrator_Name"] . 
                     $fetchData["Administrator_Email"] . 
                     $fetchData["Administrator_Password"] . 
                     $fetchData["Administrator_Phone"] . 
                     $fetchData["Administrator_Address"] . 
                     $fetchData["Administrator_City"] . 
                     $fetchData["Administrator_Country"] . 
            "</li>";


    }

    

    echo "</ul>";
    //header("Location: stock_products.php");


    require './footer.php';
?>