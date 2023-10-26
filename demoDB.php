<?php
$conn=mysqli_connect("localhost","root","","demoDB") ;
if(!$conn)
{
    echo"could not connect to database";

}
else
{
      echo"connected sucessfully";
}
$sql= 'CREATE DATABASE mydb';
if(mysqli_query($conn,$sql))
{
      echo"created sucessfully";
}
else
{
       echo "error while creating DB";
}
?>
