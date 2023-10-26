<?php
$conn=mysqli_connect("localhost","root","","demodb");
$sql="SELECT * FROM iduser";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
echo $row['name']."<br>";
echo $row['password']."<br>";
echo $row['qualfication']."<br>";
echo $row['age']."<br>";
?>