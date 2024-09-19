<?php

session_start();

$id=$_SESSION['id'];
    $name=$_SESSION['name'];

if(empty($_SESSION['id'])){
  
  header("location:register.php");
   
    }
   
    
    ?>




<html>
<head>
    
    <title> form </title>
    
    </head>

<body>
    
    
    <h1><?php echo $name; ?> WELCOME TO LOGIN FORM </h1>
    
    <a href="logout.php"><button>Logout</button></a>
    <a href="register.php"><button>Register</button></a>
    <a href="login.php"><button>Login</button></a>
   
    
    </body>




</html>