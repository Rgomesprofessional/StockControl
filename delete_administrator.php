<?php


    require 'connection.php';

    
   

    
    

    $deleteQuery = "DELETE FROM administrators WHERE Administrator_ID =  ('".$_POST["Administrator_ID"]."') ";
    $conn->exec($deleteQuery);



    

    header("Location: manage_administrators.php")


?>