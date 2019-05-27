<?php

for($i=1;$i<=3;$i++){
    echo '<br><br>First<br><br>';
    
    for($j=1;$j<=3;$j++){
        if($j==2){
            echo '<br>Second<br>';
            break ;                    //by default break level is 1
        }else{
            echo 'No';
        }
    }
    
      

}
