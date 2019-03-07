<?php


    require 'connection.php';

    
   

    
    

    $deleteQuery = "DELETE FROM orders WHERE Order_ID =  ('".$_POST["Order_ID"]."') ";
    $conn->exec($deleteQuery);



    

    header("Location: list_orders.php")


?>