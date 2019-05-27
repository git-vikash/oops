<!----------------------------constructor------------------------------->

<?php

class Exam{
    public function __construct() {
        echo 'This is constructor.<br>';
    }
}

$obj = new Exam();     //no need to call constructor function just make object

?>


<?php     //this is older way to make a constructor will not work in new php5 and above,new is having more priorty than older if to access both

class Exami{
    public function Exami() {
        echo 'This is also constructor.<br>';
    }
}

$obj2 = new Exami();     //no need to call constructor function just make object

?>
<!---------------------------------function----------------------------->

<?php

class Test{
    
    var $name;
    function get($sname){
        $this->name=$sname;
    }
    function disp(){
        echo 'My name is '.$this->name;
    }
}
$obj1=new Test();         //object making
$obj1->get("vikash");       //calling function
$obj1->disp();
?>