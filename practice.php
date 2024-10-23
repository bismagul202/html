<?php


class employee{
    public $name;
    public $age;
    public $salary;


    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }


    function info(){
        echo "<h3> Employee Details</h3>";
        echo "Employee Name : " .$this->name . "<br>";
        echo "Employee Age : " .$this->age . "<br>";
        echo "Employee Salary : " .$this->salary . "<br>";    
    }
}

 class manager extends employee{
    public $ta= 1000;
    public $phone=500;
    public $totalSalary;

       function info(){


        $this->totalSalary = $this->salary + $this->ta + $this->phone;
        echo "<h3> Manager Details</h3>";
        echo "Employee Name : " .$this->name . "<br>";
        echo "Employee Age : " .$this->age . "<br>";
        echo "Employee Salary : " .$this->totalSalary . "<br>";
       }


 }
 class Hr extends manager{
    public $ta= 1500;
    public $phone=1000;
    public $totalSalary;

       function info(){


        $this->totalSalary = $this->salary + $this->ta + $this->phone;
        echo "<h3> HR Details</h3>";
        echo "Employee Name : " .$this->name . "<br>";
        echo "Employee Age : " .$this->age . "<br>";
        echo "Employee Salary : " .$this->totalSalary . "<br>";
       }


 }
 class CEO extends Hr{
    public $ta= 1500;
    public $phone=1000;
    public $totalSalary;

       function info(){
        $this->totalSalary = $this->salary + $this->ta + $this->phone;
        echo "<h3> CEO Details</h3>";
        echo "Employee Name : " .$this->name . "<br>";
        echo "Employee Age : " .$this->age . "<br>";
        echo "Employee Salary : " .$this->totalSalary . "<br>";
       }


 }

$e1 = new manager("vania",30,50000);
$e2 = new employee("Bisma",25,45000);
$e3 = new Hr("Neha",25,65000);
$e4 = new CEO("Ali",40,1000000000);

$e1->info();
$e2->info();
$e3->info();
$e4->info();



trait message1 {
    public function msg1() {
      echo "OOP is fun! "; 
    }
  }
  
  trait message2 {
    public function msg2() {
      echo "OOP reduces code duplication!"; 
    }
  }
  
  class Welcome {
    use message1;
  }
  
  class Welcome2 {
    use message1, message2;
  }
  
  $obj = new Welcome();
  $obj->msg1();
  echo "<br>";
  
  
  $obj2 = new Welcome2();
  $obj2->msg1();
  
  $obj2->msg2();