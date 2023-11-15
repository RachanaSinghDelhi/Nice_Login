<?php
session_start();
if(!empty($_SESSION['id'])){
    
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Title </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link href="project.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <style type="text/css">




    </style>
</head>

<body>

    <div class="container login_wrapper">
        <div class="wrapper d-flex justify-content-center">

            <div class="row shadow-lg p-5 mb-5 bg-white rounded" >


                <div class="col-md-6 order-2 order-md-1">
                    
                   <button><a href="index.php"> home </a></button>     

                 <form action="regis_back.php" method="POST">

                        <p class="heading"> Registration Form </p>



                        <div class="form-group row">
                            <label for="inputuser" class="col-md-2 col-form-label"><i class="fa fa-user"></i></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="inputuser" placeholder="USER" name="uname" >
                            </div>
                        </div>
                     
                      <div class="form-group row">
                            <label for="inputEmail" class="col-md-2 col-form-label"><i class="fa fa-envelope"></i></label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" id="inputEmail" placeholder="EMAIL" name="email">
                            </div>
                        </div>
                     
                     
                      <div class="form-group row">
                            <label for="inputpassword" class="col-md-2 col-form-label"><i class="fa fa-lock"></i></label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="inputpassword" placeholder="PASSWORD" name="pass">
                            </div>
                        </div>
                        
                     
                     <div class="form-group row">
                            <label for="inputpassword" class="col-md-2 col-form-label"><i class="fa fa-key"></i></label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="inputconfirmpassword" placeholder="CONFIRM PASSWORD" name="pass1">
                            </div>
                        </div>
                        
                    <p>   <input type="submit"  name="submit" value="REGISTER">        
                     
            
  
                  </p>
                        
  
                       
                    </form>

                  <a href="login.php">    <button>   LOGIN</button></a>
                </div>
                
                <div class="col-md-6 order-1  order-md-2 mt-5">
                
                <img src="images/image.jpg">
                
                
                
                
                </div>
                

            </div>




        </div>


    </div>













    <script src="jquery.min.js"></script>

    <script src="bootstrap/js/bootstrap.min.js"></script>




</body>

</html>
