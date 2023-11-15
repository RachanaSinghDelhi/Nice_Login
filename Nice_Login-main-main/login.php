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


                <div class="col-md-12">
                    
                      

                 <form action="login_back.php" method="POST">

                        <p class="heading"> Login Form </p>



                        <div class="form-group row">
                            <label for="inputuser" class="col-md-2 col-form-label"><i class="fa fa-user"></i></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="inputuser" placeholder="USER / EMAIL" name="uname">
                            </div>
                        </div>
                     
                      
                     
                      <div class="form-group row">
                            <label for="inputpassword" class="col-md-2 col-form-label"><i class="fa fa-lock"></i></label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="inputpassword" placeholder="PASSWORD" name="pass">
                            </div>
                        </div>
     
                        
                     <input type="submit"  name="login" value="Login">        
                     
         
                    </form>

                

                </div>
                
                
            </div>




        </div>


    </div>













    <script src="jquery.min.js"></script>

    <script src="bootstrap/js/bootstrap.min.js"></script>




</body>

</html>
