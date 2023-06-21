<?php
//strlen
$word="Futura Labs";
$myword=$word;
echo strlen($myword)."<br>";

//strpos
$a =strpos("Futura Labs","Labs");
echo $a."<br>";

//strreplace
 $rep = str_replace("world","everyone","hello world");
echo $rep ."<br>";

//strlower
$lower="FUNCTION";
$small=$lower;
echo strtolower($small)."<br>";

//substr
$dh=substr("hello world",6,5);
echo $dh;
?>

