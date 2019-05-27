<?php

$ary1=[1,2,3,4];
$ary2=[5,6,7,8,9];

echo"<pre>";
print_r(array_merge($ary1,$ary2));
echo "</pre>";

$ary3=['one','two','three','four'];
echo '<pre>';
print_r(array_combine($ary3, $ary1));
echo '</pre>';

$ary4=['one'=>1,2,3,4];
$ary5=['one'=>5,6,7,8];
echo '<pre>';
print_r(array_merge($ary4, $ary5));     //if two ary have same key then later one will be printed
echo '</pre>';