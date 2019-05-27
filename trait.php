<?php

trait Tret{
public function tretA(){
    echo "it's tretA<br>";
}
public function disp()
{
    echo 'this is 1st disp method.';
}
public static function stat_fun(){     //static method 
echo "it's static method<br>";
}
public abstract function abstrct();    //abstract method declaration
}

trait Tret1{
public function tret1A(){
    echo "it's tret1A<br>";
}

function abstrct(){                     //abstract method definition
    echo 'this is abstract method<br>';
}
}

trait Tret2{
public function tret2A(){
    echo "it's tret2A<br>";
}
}

trait Tret3{
    use Tret1,Tret2;                    //using trait here
public function tret3A(){
    echo "it's tret3A<br>";
}
public function disp()
{
    echo 'this is 2nd disp method.<br>';
}
}

class Klas{                             //class
    use Tret,Tret3{                     //for using trait here
        Tret3::disp insteadof Tret; }     //for choosing which disp method of two,both trait should be added here
    public function klasA(){
        echo "it's klasA<br>";
    }
}

echo Klas::stat_fun();                  //static method call 
$obj=new Klas();
$obj->klasA();
$obj->tretA();         //can use 2 trait for multiple inheritance
$obj->tret1A();
$obj->tret2A();
$obj->tret3A();
$obj->abstrct();       //abstract method call
$obj->disp();

