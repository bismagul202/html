<?php

class MyException extends Exception{

}
function division($n){

    try{
        if($n <= 0){
           throw new Exception("<br>Enter Valid Number");
       }
              $d = 2+$n;
              echo "<br>".$d;
       }catch(Exception $e){
         echo $e->getFile();
       }finally{
         echo "<br> Finally";
       }; 
}

division(2);
division(0);
division(4);


