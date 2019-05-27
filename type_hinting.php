<?php
/*
function arr(Array $arr){       //type hinting that argument will be of type array only.
    
}

arr("a");       // cause error as data type is not array
*/
//--------------------------------------------------------------------
class abc{
    public function a(){
        echo 'a from abc';
    }
}

class xyz{
    public function b(abc $obj){    //only take arguments of abc class type i.e. calling abc
        echo 'b from xyz<br>';
        $obj->a();
    }
}
$obj=new abc();       //this need to be made so that abc object type data can be given to xyz 
$ob=new xyz;
$ob->b($obj);       //passing object of abc to xyz as argument. that means only abc type object can be taken
                // this is also a way to use only one method from a class in other class without extending whole class as a burden.


//---------------------------------------------php 7& up only--------------------

declare (ticks=1);            //for making stricter data taken from object,only a defined data type can be used

function pqr(int $a, string $b){
     echo $a." ".$b."<br>";
}
function vk(int ...$args){
    echo '<pre>';
    print_r($args)."<br>";
}

pqr(1, 'vikash');
vk(5,8,9,10,3);