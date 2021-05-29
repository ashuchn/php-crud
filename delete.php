<?php

include("connection.php");

if(isset($_GET['del']))
{
    $id = $_GET['del'];
    $query = "delete from records where user_id = '".$id."'";
    $result = mysqli_query($con,$query);

    if($result)
    {
        header("location:view.php");
    }
    else
    {
        echo 'please check your query';
    }

}



?>