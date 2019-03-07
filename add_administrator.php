<?php


    require 'connection.php';

   
    

    $addQuery = "INSERT INTO administrators VALUES ('".$_POST["Administrator_ID"]."',
                                              '".$_POST["Administrator_Name"]."',
                                              '".$_POST["Administrator_Email"]."',
                                              '".$_POST["Administrator_Password"]."',
                                              '".$_POST["Administrator_Phone"]."',
                                              '".$_POST["Administrator_Address"]."',
                                              '".$_POST["Administrator_City"]."',
                                              '".$_POST["Administrator_Country"]."')";
    $conn->exec($addQuery);



    
    
    

    header("Location: manage_administrators.php")


?>