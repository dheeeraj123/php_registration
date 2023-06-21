<?php
function myfunction($num1,$num2){
    $sum=$num1+$num2;
    $mul =$num1*$num2;
    echo $sum ."<br>";
    echo $mul ."<br>";
}
$result=myfunction(5,6);
echo $result;

?>