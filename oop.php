<?php
echo "hello";

/*class calculation{
    public $a,$b,$c;
    function sum(){
        $this->c=$this->a+$this->b;
        return $this->c;
    }

    function sub(){
        $this->c=$this->a-$this->b;
        return $this->c;
    }
}


$c1 = new calculation();
$c1->a=10;
$c1->b=30;

$c2 = new calculation();
$c2->a=10;
$c2->b=30;


echo "sum value of C1 :".$c1->sum()."\n";
echo "sum value of C2 :".$c2->sub()."\n";


class person{
public $name;
public $age;

function __construct($name="no name",$age=0){
    $this->name=$name;
    $this->age=$age;
}
function show(){
    echo $this->name . " - " . $this->age;
}
}
$p1 = new person();
$p1->show();*/

class employee{
    public $name;
    public $age;
    public $salary;


    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$a;
    }

    function info(){
        echo "<h3 Employee Profile </h3>";
        echo "Employee Name : " . $this->name . "<br>";
        echo "Employee Age : " . $this->age . "<br>";
        echo "Employee Salary : " . $this->salary . "<br>";
    }
}

$e1 = new employee("Bisma",25,20000);
$e1->info();






















