<?php


    require 'connection.php';

   
    

    $addQuery = "INSERT INTO customers VALUES ('".$_POST["Customer_ID"]."',
                                              '".$_POST["Customer_Name"]."',
                                              '".$_POST["Customer_Email"]."',
                                              '".$_POST["Customer_Phone"]."',
                                              '".$_POST["Customer_Address"]."',
                                              '".$_POST["Customer_City"]."',
                                              '".$_POST["Customer_Country"]."')";
    $conn->exec($addQuery);



    

    header("Location: list_customers.php")


?>