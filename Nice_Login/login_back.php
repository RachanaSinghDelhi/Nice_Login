<?php


include("conn.php");
session_start();
if(!empty($_SESSION['id'])){
    
    header("location:index.php");
}


if(isset ($_POST["login"])){
    
    
    
    
$name = $_POST["uname"];
    
$pass = $_POST["pass"];    


$sql =( "select* from register where uname ='$name'  and pass='$pass'");
    
    $result =mysqli_query($con,$sql);

    if(mysqli_num_rows($result)>0){
        
        
    
    
    $row = mysqli_fetch_assoc($result);
    
    if($row['uname'] === $name && $row['pass']===$pass){

     // echo"logged in!";
        
    $_SESSION['name'] = $row['uname'];
        
   $_SESSION['id'] = $row['id'];
        
 header("location:index.php");
       
   
    }



}
    
    
    else {
        
        
        header ("location:register.php");
        
        
    }
    
    
    
    
    
    
    

    
    
    
    
    
}


?>