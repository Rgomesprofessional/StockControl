<?php


    require 'header.php';
    require 'connection.php';

    
   

    
    

    $selectQuery = "SELECT * FROM products WHERE Product_ID =  ('".$_POST["Product_ID"]."') ";
    $result = $conn->query($selectQuery);


    ?>



<div class="container py-5 my-5">
    <h2 class="text-uppercase">Products searched</h2>
  <!--<p>Combine .table-dark and .table-striped to create a dark, striped table:</p>-->            
  <table class="table table-dark table-striped">
    <thead class="text-center text-uppercase">
        <tr>
        <th>Product ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Size</th>
        <th>Weight</th>
        <th>Cost per product</th>
        <th>Total cost</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <tr>
          
<?php


 
    foreach ($result as $fetchData)
    {
  
        
       echo "<tr>" . "<td>" . $fetchData["Product_ID"] . "</td>" . 
                    "<td>" . $fetchData["Product_Name"] . "</td>" .
                    "<td>" . $fetchData["Product_Description"] . "</td>" .
                    "<td>" . $fetchData["Product_Quantity"] . "</td>" .
                    "<td>" . $fetchData["Product_Size"] . "</td>" .
                    "<td>" . $fetchData["Product_Weight"] . "</td>" .
                    "<td>" . $fetchData["Product_CostPerProduct"] . "</td>" .
                    "<td>" . $fetchData["Product_Quantity"] * $fetchData["Product_CostPerProduct"] . "</td>" . 
               
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