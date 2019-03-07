
        <?php

            require 'connection.php';
            require './header.php';
        ?>


        <div class="container py-5"></div>  

        <div class="container py-5 my-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 mx-auto">                            
                            <div class="card rounded-0">
                                
                                <div class="card-header">
                                    <h2 class="text-info">Sign In</h2>
                                
                                </div>
                                
                                <div class="card-body">
                                    
                                    <form class="form" method="post" action="login_administrator.php">
                                        
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      

<!--





    <div class="container-fluid">  
            
        
        <div class="row py-5">
            <div class="col-md-12 my-auto">
                <div class="w-25 mx-auto">
                
                
                
                
            <div class="col shadow align-self-start ">
                
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
                
                
                
                
                
                
                
                
                
                </div>
            </div>
        </div>
        
    </div>


        <div class="col-sm-12 my-auto">
            <div class="card card-block w-25 mx-auto">I am Groot.</div>
        </div>
            
           <!--
           
           
    <div class="row justify-content-between bg-secondary mt-5 h-100">  
           
           
           
            <div class="col">
                    <button type="submit" class="btn btn-primary">Sign In</button>
            
            
            </div>
            <div class="col mx-auto shadow align-self-start ">
                
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
            
            
            <div class="col">
                    <button type="submit" class="btn btn-primary">Sign In</button></div>
            
           
           
        </div>
           -->

        <?php
        
            require './footer.php';
        ?>
