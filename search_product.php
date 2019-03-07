<?php


    require 'header.php';
    require 'connection.php';

    
   

    
    

    $selectQuery = "SELECT * FROM products WHERE Product_ID =  ('".$_POST["Product_ID"]."') ";
    $result = $conn->query($selectQuery);


    
    echo "<ul>";
    
    
 
    foreach ($result as $fetchData)
    {
       echo "<li>" . $fetchData["Product_ID"] . 
                     $fetchData["Product_Name"] . 
                     $fetchData["Product_Description"] . 
                     $fetchData["Product_Quantity"] . 
                     $fetchData["Product_Size"] . 
                     $fetchData["Product_Weight"] . 
                     $fetchData["Product_CostPerProduct"] . 
            "</li>";


    }

    

    echo "</ul>";
    //header("Location: stock_products.php");


    require './footer.php';
?>