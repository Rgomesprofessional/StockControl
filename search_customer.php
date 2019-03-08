<?php


    require 'header.php';
    require 'connection.php';

    
   

    
    

    $selectQuery = "SELECT * FROM customers WHERE Customer_ID =  ('".$_POST["Customer_ID"]."') ";
    $result = $conn->query($selectQuery);


 ?>



<div class="container py-5 my-5">
    <h2 class="text-uppercase">Customers searched</h2>
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

<?php
    //header("Location: stock_products.php");


    require './footer.php';
?>