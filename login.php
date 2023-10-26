<?php
if(isset($_GET["UserName"]) && ($_GET["password"]))
{
    $UserName =$_GET["UserName"];
    $password =$_GET["password"];
}
if($userName=="amir" && $password=="password")
{'nb jx'nnbz
    
    echo"Login Sucessfull <br>";
    echo "welcome".$UserName;
}
else{
    echo"Login Failed! Try Again";
}
?>