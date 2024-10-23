<?php

/*trait hello{
    public function sayhello(){
        echo "welcome";
    }
}

trait bye{
    public function saybye(){
        echo "bye bye";
    }
}

class A{
    use hello,bye;

}

class B{
    use bye;
}

$test = new A;
$test2 = new B;

$test->sayhello();
$test->saybye(); 
 echo "<br>";


 $test2->saybye();
*/

trait hello{
   private function sayhello(){
    echo "hello trait./n";
   }
}


class base{
    use hello{
   hello::sayhello as public; 
    }
}

$obj1 = new base;
$obj1->sayhello();


















