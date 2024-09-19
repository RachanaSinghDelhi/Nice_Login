<?php

include ("conn.php");


        
        $display = mysqli_query($con,"SELECT * FROM `register` ");
        
        
        
        
        
        echo"<table>
        <tr>
        <th> id </th> 
        <th> uname </th>
        <th> email </th>
        <th> pass </th>
        <th> edit </th>
        <th> delete </th>
        </tr>";
        
        
        
        
        
        while($row=mysqli_fetch_array($display)){
            
            $id = $row['id'];
            $uname = $row['uname'];
            $email = $row['email'];
            $pass = $row['pass'];
            
            echo "<tr>
            
            <td>$id</td>
            <td>$uname</td>
            <td>$email</td>
            <td>$pass</td>
            <td><a href='regis_edit.php?editid=$id'> <button >Edit</button></a></td>
            <td><a href='regis_delete.php?deleteid=$id'> <button >Delete</button></a></td>
            </tr>" ;
            
            }
        
        echo"</table>";   
        
    ?>
    
