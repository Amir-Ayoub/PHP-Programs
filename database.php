<?php
$name=$_POST['fname'];
$password=$_POST['pass'];
$qualification=$_POST['qual'];
$age=$_POST['age'];

$conn=mysqli_connect("localhost","root","","demoDB");
// $conn=mysqli_connect("localhost","root","","demoDB") ;
$insert="INSERT INTO iduser(name,password,qualfication,age)values
('$name','$password','$qualification','$age')";
if(mysqli_query($conn,$insert))
{
    echo"entered sucessfully";
}
else{
    echo"error".mysqli_error($conn);
}
 $insert="INSERT INTO iduser(name,password,qualfication,age)values
 ('amir','1234','12th','22')";
 if(mysqli_query($conn,$insert))
 {
     echo"entered sucessfully";
 }
 else{
     echo"error".mysqli_error($conn);
 }
 ?>