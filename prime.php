<?php
function prime($number)
{
    
for($i=2;$i<$number;$i++){
    $value=$number%2==0;
    if($number%2==0)
    {
echo"$number is not prime";
}
    else
    {
        echo"$number is  prime";
}
}
}
prime(4);
?>