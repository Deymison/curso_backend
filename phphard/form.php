<?php

function calcula($num1, $num2){
    $soma=$num1+$num2;
    return $soma;
}
$num1=$_GET["num1"];
$num2=$_GET["num2"];


echo calcula($num1, $num2);