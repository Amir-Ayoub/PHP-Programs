<?php
$num=456789;
$renum=0;
while($num>1)
{
    $rem=$num%10;
    $renum=($renum*10)+$rem;
    $num=($num/10);

}
echo"reverse number of 456789 is:$renum";
?>  