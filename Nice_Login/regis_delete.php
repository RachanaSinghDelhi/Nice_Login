<?php 

include ("conn.php");

if(isset($_GET["deleteid"])){

$id=$_GET["deleteid"];

$delete = mysqli_query($con,"DELETE FROM `register` where id='$id'");

    echo header("location:regis_display.php");
    

}

else {
    echo header("location:regis_display.php");
    echo "something went wrong";
    
}

?>