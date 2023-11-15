<?php


include("conn.php");


if(isset($_POST["submit"])){
    
    $id=$_GET['editid'];
  $uname=$_POST["uname"];   
  $email=$_POST["email"];   
$pass=$_POST["pass"];  
    
    
    
    
    
    
    




$update_query=mysqli_query($con,"UPDATE `register` SET uname= '$uname', email = '$email', pass = '$pass' where id=$id");


if($update_query){
    
    
    echo header("location:regis_display.php");
    
}
    
    else{
        
     echo"something went wrong";
        
        
        
        
        
    }
    
    
}




?>



