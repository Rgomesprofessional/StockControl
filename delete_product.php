<?php


    require 'connection.php';

    
   

    
    

    $deleteQuery = "DELETE FROM products WHERE Product_ID =  ('".$_POST["Product_ID"]."') ";
    $conn->exec($deleteQuery);



    

    header("Location: stock_products.php")


?>