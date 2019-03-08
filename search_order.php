<?php


    require 'header.php';
    require 'connection.php';

    
   

    
    

    $selectQuery = "SELECT * FROM orders WHERE Order_ID =  ('".$_POST["Order_ID"]."') ";
    $result = $conn->query($selectQuery);


    ?>



<div class="container py-5 my-5">
    <h2 class="text-uppercase">Orders searched</h2>
  <!--<p>Combine .table-dark and .table-striped to create a dark, striped table:</p>-->            
  <table class="table table-dark table-striped">
    <thead class="text-center text-uppercase">
        <tr>
        <th>Order ID</th>
        <th>Quantity</th>
        <th>Cost per product</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <tr>
          
<?php


    
 
    foreach ($result as $fetchData)
    {
    
        
       echo "<tr>" . "<td>" . $fetchData["Order_ID"] . "</td>" . 
                    "<td>" . $fetchData["Order_Product_Quantity"] . "</td>" .
                    "<td>" . $fetchData["Order_Product_CostPerProduct"] . "</td>" .
                    "<td>" . $fetchData["Order_Date"] . "</td>" .
               
            "</tr>";


    }

    



?>


    </tbody>
  </table>
</div>

<?php
    //header("Location: stock_products.php");


    require './footer.php';
?>