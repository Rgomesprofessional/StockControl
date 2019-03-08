<?php

    require 'connection.php';
    require './header.php';


    $selectQuery = "SELECT * FROM administrators";
    $result = $conn->query($selectQuery);


    
?>

    
    
    
<div class="container py-5 my-5">
    <h2 class="text-uppercase">List of administrators</h2>
  <!--<p>Combine .table-dark and .table-striped to create a dark, striped table:</p>-->            
  <table class="table table-dark table-striped">
    <thead class="text-center text-uppercase">
        <tr>
        <th>Administrator ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
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
        
        
        
        
        
       echo "<tr>" . "<td>" . $fetchData["Administrator_ID"] . "</td>" . 
                    "<td>" . $fetchData["Administrator_Name"] . "</td>" .
                    "<td>" . $fetchData["Administrator_Email"] . "</td>" .
                    "<td>" . $fetchData["Administrator_Password"] . "</td>" .
                    "<td>" . $fetchData["Administrator_Phone"] . "</td>" .
                    "<td>" . $fetchData["Administrator_Address"] . "</td>" .
                    "<td>" . $fetchData["Administrator_City"] . "</td>" .
                    "<td>" . $fetchData["Administrator_Country"] . "</td>" . 
               
            "</tr>";
        
        
 
    }


  
?>
          
  
    </tbody>
  </table>
</div>        
          

<form class="form-inline" method="post" action="add_administrator.php">
    <div class="form-group">
        <label for="Administrator_ID">Administrator ID</label>
        <input type="text" class="form-control" id="Administrator_ID" name="Administrator_ID">
    </div>
    <div class="form-group">
        <label for="Administrator_Name">Administrator Name</label>
        <input type="text" class="form-control" id="Administrator_Name" name="Administrator_Name">
    </div>
    <div class="form-group">
        <label for="Administrator_Email">Administrator Email</label>
        <input type="text" class="form-control" id="Administrator_Email" name="Administrator_Email">
    </div>
    <div class="form-group">
        <label for="Administrator_Password">Administrator Password</label>
        <input type="text" class="form-control" id="Administrator_Password" name="Administrator_Password">
    </div>
    <div class="form-group">
        <label for="Administrator_Phone">Administrator Phone</label>
        <input type="text" class="form-control" id="Administrator_Phone" name="Administrator_Phone">
    </div>
    <div class="form-group">
        <label for="Administrator_Address">Administrator Address</label>
        <input type="text" class="form-control" id="Administrator_Address" name="Administrator_Address">
    </div>
    <div class="form-group">
        <label for="Administrator_City">Administrator City</label>
        <input type="text" class="form-control" id="Administrator_City" name="Administrator_City">
    </div>
    <div class="form-group">
        <label for="Administrator_Country">Administrator Country</label>
        <input type="text" class="form-control" id="Administrator_Country" name="Administrator_Country">
    </div>
    
    <button type="submit" class="btn btn-primary">Add Administrator</button>
</form>


<form class="form-inline" method="post" action="search_administrator.php">
    <div class="form-group">
        <label for="Administrator_ID">Administrator ID</label>
        <input type="text" class="form-control" id="Administrator_ID" name="Administrator_ID">
    </div>
    <div class="form-group">
        <label for="Administrator_Name">Administrator Name</label>
        <input type="text" class="form-control" id="Administrator_Name" name="Administrator_Name">
    </div>
    <div class="form-group">
        <label for="Administrator_Email">Administrator Email</label>
        <input type="text" class="form-control" id="Administrator_Email" name="Administrator_Email">
    </div>
    <div class="form-group">
        <label for="Administrator_Password">Administrator Password</label>
        <input type="text" class="form-control" id="Administrator_Password" name="Administrator_Password">
    </div>
    <div class="form-group">
        <label for="Administrator_Phone">Administrator Phone</label>
        <input type="text" class="form-control" id="Administrator_Phone" name="Administrator_Phone">
    </div>
    <div class="form-group">
        <label for="Administrator_Address">Administrator Address</label>
        <input type="text" class="form-control" id="Administrator_Address" name="Administrator_Address">
    </div>
    <div class="form-group">
        <label for="Administrator_City">Administrator City</label>
        <input type="text" class="form-control" id="Administrator_City" name="Administrator_City">
    </div>
    <div class="form-group">
        <label for="Administrator_Country">Administrator Country</label>
        <input type="text" class="form-control" id="Administrator_Country" name="Administrator_Country">
    </div>
    
    <button type="submit" class="btn btn-primary">Search Administrator</button>
</form>


<form class="form-inline" method="post" action="delete_administrator.php">
    <div class="form-group">
        <label for="Administrator_ID">Administrator ID</label>
        <input type="text" class="form-control" id="Administrator_ID" name="Administrator_ID">
    </div>
    
    <button type="submit" class="btn btn-primary">Delete Administrator</button>
</form>


 
 
 <a href="stock_products.php" class="btn btn-primary" role="button">Stock</a>
 
<?php


    require './footer.php';

?>