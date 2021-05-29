<?php //updates the entry in database ?>


<?php 

include("connection.php");

if(isset($_POST['update']))
{
    $id = $_GET['ID'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $query = "update records set user_name = '".$name."', email = '".$email."', mobile_number = '".$mobile."' where user_id = '".$id."' ";
    $result=mysqli_query($con,$query);

    if($result)
    {
        header("location:view.php");
    }
    else{
        echo "check your query";
    }

}
else
{
    header("location:view.php");
}

?>