<?php

class abc{
    public function a(){
        echo "A:";
        return $this;       //return object of this class so that no null value is pass and in chainig next method can get call 
        
    }
    public function b(){
        echo 'B:';
        return $this;
    }
    public function c(){
        echo 'C:';
    }
    public function d(){
        echo 'D:';
    }
}

$obj=new abc();
$obj->a()->b()->c();        //method chaining