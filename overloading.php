<?php
class Test{
    function start(){
        echo 'started with parent class.<br>';
    }
    
    function callParentclass(){
        self::start();
    }
    
}

class Testy extends Test{
    function start(){
        echo 'started with child class.<br>';
    }
    
    function callParentclass() {
        parent::callParentclass();
    }
}

$obj = new Testy();
$obj->start();
$obj->callParentclass();   //for calling parent class function
?>

<?php  /*
// overloading not possible in php because it dont have datatype so u cant differenciate
// we can do it using magic method __call.
class Score{
    var $math,$science,$eng;
    function mark($s1,$s2){
      $this->math=$s1;
      $this->science=$s2;
      echo 'score is '.($math+$science);
  }
    
    function mark($s1,$s2,$s3){
        $this->math=$s1;
        $this->science=$s2;
        $this->eng=$s3;
        echo 'score is '.($s1+$s2+$s3);
    }
}
$ob =new Score();
$ob->mark(10, 20,10);   */
?>