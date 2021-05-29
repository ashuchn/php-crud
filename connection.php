<?php
//Telling whether connection is created or not
$con  = mysqli_connect("localhost","root","","registration");
//if not, then displays the error
if(!$con)
{
    die("Connection error");
}

?>