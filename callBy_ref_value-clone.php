<?php

class Abc{
    public $name="tiwari<br>";
    public function getTest(){
        echo $this->name;
    }
}

$obj=new Abc();
$obj1=$obj;         //pass or call by reference  & will be added by default if u dont use it $obj1=&$obj;

$obj->name="vikash<br>";   //$obj1->name="vikash<br>"; may be also
echo"<pre>";
print_r($obj1);
print_r($obj);


class AB{
    public $name="value<br>";
    public function getTest(){
        echo $this->name;
    }
}

$ob=new AB();
$ob1= clone $ob;         //pass or call by value

$ob->name="callByvalue<br>";
echo"<pre>";
print_r($ob1);
print_r($ob);