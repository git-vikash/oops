<?php

interface abc{
    const ABC=10;           //can define constant but cant override it

    public function map($coord);  //only public no private because need to inplement in next class.cant define method.
}

interface xyz extends abc{
    public function simple($address);
}

class googleMap implements abc{
    public function map($coord){
        return "Google map - ".$coord."<br>";
    }
}

class streetMap implements xyz{
    //const ABC=20;         //cant ovveride consatant
    public function simple($address){
        echo 'address from xyz interface '.$address."<br>";
    }
    public function map($coord){
        return"street map - ".$coord."<br>";
    }
}

$obj=new googleMap();
echo $obj->map(10);
$obj1=new streetMap();
echo $obj1->map(50);
$obj1->simple('baroda');