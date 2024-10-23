<?php

/*$t = 14;

if ($t < 20) {
    echo "Have a good day!";
}



$a = 20;
if ($a > 10) {
    echo "Hello world";
}


$b = 500;
$a = 400;
$c = 800;

if ($b > $a && $a < $c) {
    echo "Condition is true";
}

$a = 5;
for ($i = 0; $i < $a; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo " * ";
    }
    echo " <br/ >";
}



for( $i = 0; $i <= 5 ; $i++){
    if($i === 1){
        echo "******" . "<br/>";
    }
    elseif($i === 2){
        echo "**". "<br/>";
    }
    elseif($i === 3){
        echo "****". "<br/>";
    }
    elseif($i === 4){
        echo "**". "<br/>";
    }
    elseif($i === 5){
        echo "*". "<br/>";
    }
}
echo "<hr />";*/


/*$a = 13;

if ($a > 10) {
  echo "Day"."<br>";
  if ($a < 20) {
    echo " Night". "<br>";}
    if ($a > 9) {
        echo " Day And Night". "<br>";}
        if ($a < 20) {
            echo " Night". "<br>";}
            if ($a > 8) {
                echo " Day". "<br>";}
    else {
    echo " but not above 20";
  }
}*/

/*$a = 10;
for ($x = 0; $x < $a; $x++) {
    
    for ($j = 1; $j < 6;$j++){
        if ($x == 10) break;
        echo "";
    }
    echo " * <br>";
  }
  
  $i = 10;

  while ($i >= 1) {
    echo $i . "<br>";
    $i--;
  }*/

  $i =1;
  while ($i <= 10){
    echo "2 x $i = " . (2 * $i) . "<br>";
    $i++;
  }


for ($i = 0; $i <= 5; $i++ ){
  if ($i === 1){
     echo "******" . "<br>";
  }
  else if ($i === 2){
    echo "*****" . "<br>";
  }
  else if ($i === 3){
    echo "****" . "<br>";
  }
  else if ($i === 4){
    echo "***" . "<br>";
  }
  else if ($i === 5){
    echo "*" . "<br>";
  }
} 
  $a = 10;
  $b = 20;

  echo "value of a = ".$a.'<br>';
echo "value of b = ".$b."<br>";

  $b = $b - $a;
  $a = $a + $b;

  echo "$a" . "<br>";
  echo "$b" .  "<br>"; 

 $a = 5;
 $b = 2;
 $c = 0;


 /*$a = ; 
 echo "value of a =" .$a. "<br>";*/
 $b = $a;
 
 echo "value of b =" .$b. "<br>";

 $a = $b-$a;
 echo "value of a =" .$a. "<br>";
 
 
 /*$c = $b - $a;
 echo "value of c=" .$c. "<br>"
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->timestamps();
        });
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
       $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image');
            $table->timestamps();
    
    
    
    
    
    
    
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};






















<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};


  protected $fillable = ['name', 'description', 'image'];


 $employee= Employee::where('id',$id)->first();
       if(isset($request->image)){
 
 
 
 
 
 
 
 
 
 
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD - Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" style="color: white;" href="/">Details</a>
    <form class="d-flex ms-auto" method="GET" action="/search">
      <input class="form-control me-2" type="search" name="query" placeholder="Search by name" aria-label="Search" value="{{ request()->query('query') }}">
      <button class="btn btn-outline-danger" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container mt-4">
  @if($message = Session::get('success'))
    <div class="alert alert-success">
      <strong>{{ $message }}</strong>
    </div>
  @endif

  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  @if($employees->isNotEmpty())
    <h3>Search Results for "{{ request()->query('query') }}":</h3>
    <div class="row">
      @foreach($employees as $employee)
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">{{ $employee->name }}</h5>
              <p class="card-text">{{ $employee->description }}</p>
              <a href="/employee/{{ $employee->id }}/edit" class="btn btn-primary">Edit</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @else
    <div class="alert alert-info">No results found for "{{ request()->query('query') }}"</div>
  @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-eMN0jjpW2S65yD65Qn5HVR9a4YZpD4jX+EddpZzU5M1J1Oe4U3z6H0E+z53EUT7E" crossorigin="anonymous"></script>
</body>
</html>

 
 
 
 
 
 
 
 
 
 
