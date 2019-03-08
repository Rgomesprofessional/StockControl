<?php


    require 'header.php';
    require 'connection.php';

    
   

    
    

    $selectQuery = "SELECT * FROM administrators WHERE Administrator_ID =  ('".$_POST["Administrator_ID"]."') ";
    $result = $conn->query($selectQuery);


    
    
?>

    
    
    
<div class="container py-5 my-5">
    <h2 class="text-uppercase">Administrator searched</h2>
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
      
<?php
    //header("Location: stock_products.php");


    require './footer.php';
?>