<?php

class abc{
    static $count=0;
    var $counter=0;

    function __construct() {
        $this->counter++;
        self::$count++;
    }
}

$obj = new abc();
$obj1=new abc();
$obj2= new abc();

echo $obj->counter."<br>";   //these all start counting from 0 for all object sepratly
echo $obj1->counter."<br>";
echo $obj2->counter."<br><br>";

echo 'from static <br>';      // it is ggod for counting number of objects made.
echo abc::$count;           // it count from 0 and store the last value counted then increment it as new object created.


?>

