<?php

    require 'connection.php';

    $administratorExist = false;


    $selectQuery = "SELECT * FROM administrators";
    $result = $conn->query($selectQuery);



    echo "<ul>";


    foreach ($result as $fetchData)
    {
       //echo "<li>" . $fetchData["Administrator_Email"] . "</li>";

       //echo "<li>" . $_POST["email"] . "</li>";


        if($_POST["email"] === $fetchData["Administrator_Email"])
        {
            $administratorExist = true;
            break;
        } 
    }


    if($administratorExist)
    {
        header("Location: stock_products.php");
    } else 
    {
        echo "You have to register";

    }

    echo "</ul>";





?>