<?php

include ("conn.php");

$id=$_GET['editid'];

echo $id;

$select=mysqli_query($con,"select * from register where id='$id'");

//$editemps=$select->fetch_all(MYSQLI_ASSOC);

while($row=mysqli_fetch_array($select)){
    
    
    $id=$row['id'];
    $uname=$row['uname'];
    $email=$row['email'];
    $pass=$row['pass'];
    
}
?>


<html>
<head>
    <title>We Know</title>
    <body>
       
       
    <form action="regis_edit1.php?editid=<?php echo $id ?>" method="post">
        
        <p><label>uname:</label><input type="text" name="name" placeholder="name" value="<?php echo $uname ?>"></p>
       
     
        <p><label>Email:</label><input type="email" name="email" placeholder="email" value="<?php echo $email ?>"></p>
        
       <p> <label> pass</label><input type="text" name="pass" placeholder="password" value="<?php echo $pass ?>"></p>
        <p><input type="submit" name="submit" value="register"></p>
        </form>
    

    
    </body>
    </head>

</html>