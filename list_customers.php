<?php

    require 'connection.php';
    require './header.php';


    $selectQuery = "SELECT * FROM customers";
    $result = $conn->query($selectQuery);


    
?>

    
    
    
<div class="container py-5 my-5">
    <h2 class="text-uppercase">List of customers</h2>
  <!--<p>Combine .table-dark and .table-striped to create a dark, striped table:</p>-->            
  <table class="table table-dark table-striped">
    <thead class="text-center text-uppercase">
        <tr>
        <th>Customer ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>City</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <tr>
    

<?php    
    


    foreach ($result as $fetchData)
    {
        
        
        
        
        
       echo "<tr>" . "<td>" . $fetchData["Customer_ID"] . "</td>" . 
                    "<td>" . $fetchData["Customer_Name"] . "</td>" .
                    "<td>" . $fetchData["Customer_Email"] . "</td>" .
                    "<td>" . $fetchData["Customer_Phone"] . "</td>" .
                    "<td>" . $fetchData["Customer_Address"] . "</td>" .
                    "<td>" . $fetchData["Customer_Address"] . "</td>" .
                    "<td>" . $fetchData["Customer_City"] . "</td>" .
                    "<td>" . $fetchData["Customer_Country"] . "</td>" . 
               
            "</tr>";
        
    }
        
    
?>
          
  
    </tbody>
  </table>
</div>        
          
          


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