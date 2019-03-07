
<?php

    require 'connection.php';
    require './header.php';
?>
    <div class="row">  
            
            <div class="col"></div>
            
            <div class="col">
                
                <h1 class="text-primary">Stock Control</h1>

                <h2 class="text-info">Sign In</h2>
                
                <form method="post" action="login_administrator.php">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="password">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember me </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </form>   
                            
            </div>   
            
            
            <div class="col"></div>
            
        </div>
        
<?php
        
    require './footer.php';
?>
