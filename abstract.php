<?php    //why we make method abstract....??
abstract class Person{
    abstract function salary();
    function getDetails(){
        echo 'Enter your details.<br>';
    }
}



class Teacher extends Person{
    function salary(){
        echo 'Expected salary.<br>';
    }
}

 class Student extends Person{
     function salary() {
         echo ' no salary its fee.';
     }
}

$obj=new Teacher();
$obj->getDetails();
$obj->salary();

$obj1 = new Student();
$obj1->getDetails();
$obj1->salary();
?>
