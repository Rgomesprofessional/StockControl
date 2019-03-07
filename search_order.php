<?php


    require 'header.php';
    require 'connection.php';

    
   

    
    

    $selectQuery = "SELECT * FROM orders WHERE Order_ID =  ('".$_POST["Order_ID"]."') ";
    $result = $conn->query($selectQuery);


    
    echo "<ul>";
    
    
  
    
 
    foreach ($result as $fetchData)
    {
       echo "<li>" . $fetchData["Order_ID"] . 
                     $fetchData["Order_Product_Quantity"] . 
                     $fetchData["Order_Product_CostPerProduct"] . 
                     $fetchData["Order_Date"] . 
            "</li>";


    }

    

    echo "</ul>";
    //header("Location: stock_products.php");


    require './footer.php';
?>