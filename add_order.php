<?php


    require 'connection.php';

   
    

    $addQuery = "INSERT INTO orders VALUES ('".$_POST["Order_ID"]."',
                                              '".$_POST["Order_Product_Quantity"]."',
                                              '".$_POST["Order_Product_CostPerProduct"]."',
                                              '".$_POST["Order_Date"]."')";
    $conn->exec($addQuery);



    
    
    

    header("Location: list_orders.php")


?>