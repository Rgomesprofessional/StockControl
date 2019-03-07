<?php


    require 'connection.php';

    
   

    
    

    $deleteQuery = "DELETE FROM customers WHERE Customer_ID =  ('".$_POST["Customer_ID"]."') ";
    $conn->exec($deleteQuery);



    

    header("Location: list_customers.php")


?>