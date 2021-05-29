<?php

include "connection.php";

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['mobile'];

 $query = "insert into records(user_name,email,mobile_number) values('$name','$email','$number')";
 $result = mysqli_query($con,$query);

 if($result)
 {
     header("location:view.php");
 }
 else{
     echo "please check your query";
 }

?>