<?php
$NAME=$_POST['fname'];
$EMAIL=$_POST['email'];
$MOBILE=$_POST['mobile'];
$RESIDENT=$_POST['resident'];

$conn=mysqli_connect("localhost","root","","demodb");

$sql="INSERT INTO iduser(name,password,qualfication,age)
VALUES('$NAME','$EMAIL','$MOBILE','$RESIDENT')";
if(mysqli_query($conn,$sql))
{
    echo "inserted successfully";
}
else{
    echo "error".mysqli_error($conn);
}

?>