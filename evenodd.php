<!DOCTYPE html>
<html lang="en">
    <style>
input[type=text]
{
    padding:12px;
    margin: 8px;
    box-sizing: border-box;
    color: aqua;
    border-radius: 30px;
}
input[type=submit]
{
    padding:12px;
    margin: 8px;
    box-sizing: border-box;
    color: purple;
    border-radius: 30px;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        put number: <input type="text"  name="number" placeholder="enter any no."><br>
        <input type="submit" value="submit"><br>
</body>
<?php
$num=$_POST["number"];
if($num%2==0){
    echo"number is even";
}
else{
    echo"number is odd";
}
?>
</html>