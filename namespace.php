<?php
//namespace NS1;                              //if there exist only one class, not need to use braces of namespace
namespace NS1{
    class Start{
        function __construct(){                 //taking constructor so that no need to call it by object
        echo'<br>Hi,This is namespace 1<br>';
        }
    }
    
}

namespace {                                             //this is global namespace,use if want to make class outside of current namespace
    class Start{
        function __construct(){
        echo'<br>Hi,This is global namespace 2<br>';
        }
    }
}

namespace v\vkt{                                    //sub-namespace
    class Start{
        function __construct(){
        echo'<br>Hi,This is sub-namespace <br>';
        }
    }
}
namespace NS3{
    class Start{
        function __construct(){
        echo'<br>Hi,This is namespace 3<br>';
        }
    }
    
    $obj =new \NS1\Start();   //using full path for NS1 class
    
    use NS1\Start as fNS;     //alias giving name to absolute or full path as first for simplicity
    $obj1 = new fNS();
    $obj2 = new \Start();      //for global namespace
    $obj3 = new \v\vkt\Start();     //sub-namespace
    $obj4 = new Start();        //this is inside namespace 3 so no need to specify absolute path.
}


