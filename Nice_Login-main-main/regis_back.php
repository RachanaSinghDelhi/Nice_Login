<?php

include('conn.php');

if(isset($_POST["submit"])){
 
$uname = $_POST["uname"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$pass1 = $_POST["pass1"]; 
    
 
    
    if($pass==$pass1){
    
    $insert = "INSERT INTO `register`(`id`, `uname`, `email`, `pass`) VALUES ('Null','$uname','$email','$pass')";
    
    
   $insert_query = mysqli_query($con , $insert);
    
    
    
   if($insert_query){
    
        
       echo"sucessfully inserted";
      
  }
      
   else{
          
          
          
        echo "mysqli_error($con)";
      }


    
    
    }
    
    
    else {
        
        echo "password don't match";
        
    }
}
?>