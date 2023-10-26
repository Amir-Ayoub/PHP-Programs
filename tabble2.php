<!-- <?php
$nnn=5;
$mmm=15;
for($i=1;$i<=$mmm;$i++)
{
    $mul=$nnn*$i;
    echo"$nnn*$i=$mul"."<br>";

?> -->
<?php
$d=DATE("D");
switch ($d) {
    
    default:
        echo"today is monday";
        break;
        default:
        echo"i don't know which day it is"
}
?>