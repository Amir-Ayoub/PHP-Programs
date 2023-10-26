<?php
$conn=mysqli_connect("localhost","root","","demodb");
$var=" DELETE FROM iduser where id=3";
$result= mysqli_query ($conn,$var);
if(!$result)
{
    echo "not deleted";
}
else
{
echo"deleted sucessfully";
}
?>