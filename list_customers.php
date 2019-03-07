<?php

    require 'connection.php';
    require './header.php';


    $selectQuery = "SELECT * FROM customers";
    $result = $conn->query($selectQuery);



    echo "<ul>";


    foreach ($result as $fetchData)
    {
       echo "<li>" . $fetchData["Customer_ID"] . 
                     $fetchData["Customer_Name"] . 
                     $fetchData["Customer_Email"] . 
                     $fetchData["Customer_Phone"] . 
                     $fetchData["Customer_Address"] . 
                     $fetchData["Customer_City"] . 
                     $fetchData["Customer_Country"] . 
            "</li>";


    }


 

    echo "</ul>";
        
    
    
    
    

?>

<form class="form-inline" method="post" action="add_customer.php">
    <div class="form-group">
        <label for="Customer_ID">Customer ID</label>
        <input type="text" class="form-control" id="Customer_ID" name="Customer_ID">
    </div>
    <div class="form-group">
        <label for="Customer_Name">Customer Name</label>
        <input type="text" class="form-control" id="Customer_Name" name="Customer_Name">
    </div>
    <div class="form-group">
        <label for="Customer_Email">Customer Email</label>
        <input type="text" class="form-control" id="Customer_Email" name="Customer_Email">
    </div>
    <div class="form-group">
        <label for="Customer_Phone">Customer Phone</label>
        <input type="text" class="form-control" id="Customer_Phone" name="Customer_Phone">
    </div>
    <div class="form-group">
        <label for="Customer_Address">Customer Address</label>
        <input type="text" class="form-control" id="Customer_Address" name="Customer_Address">
    </div>
    <div class="form-group">
        <label for="Customer_City">Customer City</label>
        <input type="text" class="form-control" id="Customer_City" name="Customer_City">
    </div>
    <div class="form-group">
        <label for="Customer_Country">Customer Country</label>
        <input type="text" class="form-control" id="Customer_Country" name="Customer_Country">
    </div>
    
    <button type="submit" class="btn btn-primary">Add Customer</button>
</form>


<form class="form-inline" method="post" action="search_customer.php">
    <div class="form-group">
        <label for="Customer_ID">Customer ID</label>
        <input type="text" class="form-control" id="Customer_ID" name="Customer_ID">
    </div>
    <div class="form-group">
        <label for="Customer_Name">Customer Name</label>
        <input type="text" class="form-control" id="Customer_Name" name="Customer_Name">
    </div>
    <div class="form-group">
        <label for="Customer_Email">Customer Email</label>
        <input type="text" class="form-control" id="Customer_Email" name="Customer_Email">
    </div>
    <div class="form-group">
        <label for="Customer_Phone">Customer Phone</label>
        <input type="text" class="form-control" id="Customer_Phone" name="Customer_Phone">
    </div>
    <div class="form-group">
        <label for="Customer_Address">Customer Address</label>
        <input type="text" class="form-control" id="Customer_Address" name="Customer_Address">
    </div>
    <div class="form-group">
        <label for="Customer_City">Customer City</label>
        <input type="text" class="form-control" id="Customer_City" name="Customer_City">
    </div>
    <div class="form-group">
        <label for="Customer_Country">Customer Country</label>
        <input type="text" class="form-control" id="Customer_Country" name="Customer_Country">
    </div>
    
    <button type="submit" class="btn btn-primary">Search Customer</button>
</form>


<form class="form-inline" method="post" action="delete_customer.php">
    <div class="form-group">
        <label for="Customer_ID">Customer ID</label>
        <input type="text" class="form-control" id="Customer_ID" name="Customer_ID">
    </div>
    
    <button type="submit" class="btn btn-primary">Delete Customer</button>
</form>

<a href="stock_products.php" class="btn btn-primary" role="button">Stock</a>
 
<?php


    require './footer.php';

?>