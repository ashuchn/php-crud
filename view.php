<?php

include "connection.php";
$query = "select * from records";
$result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Entries</title>
</head>
<body class="w3-center">
<div class=" w3-panel w3-green">
    <p><h3>Saved Inputs</h3></p>
</div>
    <div class="w3-container w3-grey ">
    <table class="w3-table-all w3-card-4">
        <tr>
        <td><b>Id</b></td>
        <td><b>Name</b></td>
        <td><b>Email</b></td>
        <td><b>Mobile number</b></td>
        <td><b>Edit</b></td>
        <td><b>Delete</b></td>
        </tr>

        <?php
        
        while($row=mysqli_fetch_assoc($result))
        {
            $id = $row['user_id'];
            $name = $row['user_name'];
            $email = $row['email'];
            $mobile = $row['mobile_number'];
        
        ?>
        <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $name ?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $mobile ?></td>
        <td><a href="edit.php?GetID=<?php echo $id ?>">Edit</a></td>
        <td><a href="delete.php?del=<?php echo $id ?>">Delete</a></td>

        </tr>
     <?php } ?>


    </table>
    </div>
    
    
</body>
</html>