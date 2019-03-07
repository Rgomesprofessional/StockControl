<?php


    require 'header.php';
    require 'connection.php';

    
   

    
    

    $selectQuery = "SELECT * FROM customers WHERE Customer_ID =  ('".$_POST["Customer_ID"]."') ";
    $result = $conn->query($selectQuery);


    
    echo "<ul>";
    
    
 
    foreach ($result as $fetchData)
    {
       echo "<li>" . $fetchData["Customer_ID"] . 
                     $fetchData["Customer_Name"] . 
                     $fetchData["Customer_Email"] . 
                     $fetchData["Customer_Phone"] . 
                     $fetchData["Customer_Address"] . 
                     $fetchData["Customer_City"] . 
                     $fetchData["Customer_Country"] . 
            "</li>";


    }

    

    echo "</ul>";
    //header("Location: stock_products.php");


    require './footer.php';
?>