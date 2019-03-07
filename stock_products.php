<?php

    require 'connection.php';
    require './header.php';


    //$selectQuery = "SELECT *, SUM(Product_Quantity * Product_CostPerProduct) As Total FROM products";
    
    $selectQuery = "SELECT * FROM products";
    $result = $conn->query($selectQuery);



    echo "<ul>";

    /*
    
    foreach ($result as $fetchData)
    {
       echo "<li>" . $fetchData["Product_ID"] . 
                     $fetchData["Product_Name"] . 
                     $fetchData["Product_Description"] . 
                     $fetchData["Product_Quantity"] . 
                     $fetchData["Product_Size"] . 
                     $fetchData["Product_Weight"] . 
                     $fetchData["Product_CostPerProduct"] . 
                     $fetchData["Total"]  . 
               
            "</li>";


    }
    
    
 */
    
    

    foreach ($result as $fetchData)
    {
       echo "<li>" . $fetchData["Product_ID"] . 
                     $fetchData["Product_Name"] . 
                     $fetchData["Product_Description"] . 
                     $fetchData["Product_Quantity"] . 
                     $fetchData["Product_Size"] . 
                     $fetchData["Product_Weight"] . 
                     $fetchData["Product_CostPerProduct"] . 
                     $fetchData["Product_Quantity"] * $fetchData["Product_CostPerProduct"] . 
               
            "</li>";


    }


    echo "</ul>";
        
    
    
    
    

?>

<form class="form-inline" method="post" action="add_product.php">
    <div class="form-group">
        <label for="Product_ID">Product ID</label>
        <input type="text" class="form-control" id="Product_ID" name="Product_ID">
    </div>
    <div class="form-group">
        <label for="Product_Name">Name</label>
        <input type="text" class="form-control" id="Product_Name" name="Product_Name">
    </div>
    <div class="form-group">
        <label for="Product_Description">Description</label>
        <input type="text" class="form-control" id="Product_Description" name="Product_Description">
    </div>
    <div class="form-group">
        <label for="Product_Quantity">Quantity</label>
        <input type="text" class="form-control" id="Product_Quantity" name="Product_Quantity">
    </div>
    <div class="form-group">
        <label for="Product_Size">Size</label>
        <input type="text" class="form-control" id="Product_Size" name="Product_Size">
    </div>
    <div class="form-group">
        <label for="Product_Weight">Weight</label>
        <input type="text" class="form-control" id="Product_Weight" name="Product_Weight">
    </div>
    <div class="form-group">
        <label for="Product_CostPerProduct">Cost per Product</label>
        <input type="text" class="form-control" id="Product_CostPerProduct" name="Product_CostPerProduct">
    </div>
    
    <button type="submit" class="btn btn-primary">Add Product</button>
</form>


<form class="form-inline" method="post" action="search_product.php">
    <div class="form-group">
        <label for="Product_ID">Product ID</label>
        <input type="text" class="form-control" id="Product_ID" name="Product_ID">
    </div>
    <div class="form-group">
        <label for="Product_Name">Name</label>
        <input type="text" class="form-control" id="Product_Name" name="Product_Name">
    </div>
    <div class="form-group">
        <label for="Product_Description">Description</label>
        <input type="text" class="form-control" id="Product_Description" name="Product_Description">
    </div>
    <div class="form-group">
        <label for="Product_Quantity">Quantity</label>
        <input type="text" class="form-control" id="Product_Quantity" name="Product_Quantity">
    </div>
    <div class="form-group">
        <label for="Product_Size">Size</label>
        <input type="text" class="form-control" id="Product_Size" name="Product_Size">
    </div>
    <div class="form-group">
        <label for="Product_Weight">Weight</label>
        <input type="text" class="form-control" id="Product_Weight" name="Product_Weight">
    </div>
    <div class="form-group">
        <label for="Product_CostPerProduct">Cost per Product</label>
        <input type="text" class="form-control" id="Product_CostPerProduct" name="Product_CostPerProduct">
    </div>
    
    <button type="submit" class="btn btn-primary">Search Product</button>
</form>


<form class="form-inline" method="post" action="delete_product.php">
    <div class="form-group">
        <label for="Product_ID">Product ID</label>
        <input type="text" class="form-control" id="Product_ID" name="Product_ID">
    </div>
    
    <button type="submit" class="btn btn-primary">Delete Product</button>
</form>

 <a href="list_customers.php" class="btn btn-primary" role="button">List of Customers</a>
 
 
 <a href="manage_administrators.php" class="btn btn-primary" role="button">Add Administrator</a>
 
 
 <a href="list_orders.php" class="btn btn-primary" role="button">Orders</a>
 
<?php


    require './footer.php';

?>