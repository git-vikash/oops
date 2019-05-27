<?php

$arr=['one','two','three','four'];

echo '<pre>simple array';
print_r($arr);                      //simple arry print
echo '</pre>';

$str= implode('-', $arr);           //arry to string conversion using implode,1st parameter is seperator,2nd is arry

echo "imploded result : ".$str;

$ary1= explode('-', $str);          //string to array conversion using explode,1st parameter is seperator,2nd is string

echo '<pre>Exploded result : ';
print_r($ary1);
echo '</pre>';