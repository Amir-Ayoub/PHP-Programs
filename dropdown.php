<html>
<body>
<form method="post" action="dropdown.php">
<select name="language">
    <option>urdu<option/>
        <option>english<option/>
            <option>kashmiri<option/>
            <input type="submit" value="submit"><br>
        
</select>
</body>
<?php
$a=$_POST["language"];
switch($a)
{
    case"urdu":
    echo"hello in urdu";
    break;
case"english":
    echo"hello in english";
    break;
case"kashmiri":
    echo"hello in kashmiri";
    
    break;
default:
echo"wonder num it is";}
?>

</html>