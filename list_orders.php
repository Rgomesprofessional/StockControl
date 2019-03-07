<?php

    require 'connection.php';
    require './header.php';


    $selectQuery = "SELECT * FROM orders";
    $result = $conn->query($selectQuery);



    echo "<ul>";


    foreach ($result as $fetchData)
    {
       echo "<li>" . $fetchData["Order_ID"] . 
                     $fetchData["Order_Product_Quantity"] . 
                     $fetchData["Order_Product_CostPerProduct"] . 
                     $fetchData["Order_Date"] . 
            "</li>";


    }


 

    echo "</ul>";
        
    
    
    
    

?>

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