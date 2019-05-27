<?php

const X=10;
echo X."<br>";



$a=5;
if($a==5){
//const Z=20;     //cause error because const is for compile time error
}
//echo Z."<br>";


define('Y', 20);
echo Y."<br>";


$b=15;
if($b==15){
    define('M', 35);
}
echo M."<br>";



