<?php

    require 'connection.php';
    require './header.php';


    $selectQuery = "SELECT * FROM orders";
    $result = $conn->query($selectQuery);


 
?>

    
    
    
<div class="container py-5 my-5">
    <h2 class="text-uppercase">List of orders</h2>
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
       

<form class="form-inline" method="post" action="add_order.php">
    <div class="form-group">
        <label for="Order_ID">Order ID</label>
        <input type="text" class="form-control" id="Order_ID" name="Order_ID">
    </div>
    <div class="form-group">
        <label for="Order_Product_Quantity">Quantity</label>
        <input type="text" class="form-control" id="Order_Product_Quantity" name="Order_Product_Quantity">
    </div>
    <div class="form-group">
        <label for="Order_Product_CostPerProduct">Cost per Product</label>
        <input type="text" class="form-control" id="Order_Product_CostPerProduct" name="Order_Product_CostPerProduct">
    </div>
    <div class="form-group">
        <label for="Order_Date">Date</label>
        <input type="text" class="form-control" id="Order_Date" name="Order_Date">
    </div>
    
    <button type="submit" class="btn btn-primary">Add Order</button>
</form>


<form class="form-inline" method="post" action="search_order.php">
    <div class="form-group">
        <label for="Order_ID">Order ID</label>
        <input type="text" class="form-control" id="Order_ID" name="Order_ID">
    </div>
    <div class="form-group">
        <label for="Order_Product_Quantity">Quantity</label>
        <input type="text" class="form-control" id="Order_Product_Quantity" name="Order_Product_Quantity">
    </div>
    <div class="form-group">
        <label for="Order_Product_CostPerProduct">Cost per Product</label>
        <input type="text" class="form-control" id="Order_Product_CostPerProduct" name="Order_Product_CostPerProduct">
    </div>
    <div class="form-group">
        <label for="Order_Date">Date</label>
        <input type="text" class="form-control" id="Order_Date" name="Order_Date">
    </div>
    
    <button type="submit" class="btn btn-primary">Search Order</button>
</form>


<form class="form-inline" method="post" action="delete_order.php">
    <div class="form-group">
        <label for="Order_ID">Order ID</label>
        <input type="text" class="form-control" id="Order_ID" name="Order_ID">
    </div>
    
    <button type="submit" class="btn btn-primary">Delete Order</button>
</form>

<a href="stock_products.php" class="btn btn-primary" role="button">Stock</a>
<?php


    require './footer.php';

?>