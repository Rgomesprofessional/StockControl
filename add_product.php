<?php


    require 'connection.php';

    
   

    
    

    $addQuery = "INSERT INTO products VALUES ('".$_POST["Product_ID"]."',
                                              '".$_POST["Product_Name"]."',
                                              '".$_POST["Product_Description"]."',
                                              '".$_POST["Product_Quantity"]."',
                                              '".$_POST["Product_Size"]."',
                                              '".$_POST["Product_Weight"]."',
                                              '".$_POST["Product_CostPerProduct"]."')";
    $conn->exec($addQuery);



    

    header("Location: stock_products.php")


?>