<?php
echo"<h1>assending order<h1/>";
for($i=0;$i<=10;$i++)
{
    echo"$i";
}
echo"<h2>decending order<h2/>";
for($i=10;$i>=0;$i--)
{
    echo"$i";
}
echo"<h3>reverse string<h3/>";
$str=strrev("AAYAN");
echo"$str";
echo"<h4>for length<h4/>";
$a=strlen("AAYAN bhat");
echo"$a";
echo"<h6>word count<h6/>";
$a=str_word_count("AAYAN AHMAD BHAT");
echo"$a";
echo"<h7>word spacr<h7/>";
?>