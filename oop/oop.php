<?php
#A class is a template for objects, and an object is an instance of class.

// class Fruit{
//   //Properties -variables are called properties
//   public $name;
//   public $colour;

//   //Methods -Functions are known as methods
//   function set_name($name){
//    $this->name = $name;
//   }

//   function get_name(){
//    return $this->name;
//   }

//   function set_colour($colour){
//      $this->colour = $colour;
//   }

//   function get_colour(){
//    return $this->colour;
//   }
// }

// $apple = new Fruit();
// $banana = new Fruit();

// $apple->set_name('Apple');
// $apple->set_colour("Red");
// $banana->set_name('Banana');
// $banana->set_colour("yellow");

// echo $apple->get_name();
// echo "<br>";
// echo $apple->get_colour();
// echo "<br>";
// echo $banana->get_name();
// echo "<br>";
// echo $banana->get_colour();
// echo "<br>";

#==============Destructures and Constructures===================
// class Fruit {
//   public $name;
//   public $color;

//   function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   function __destruct() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// $apple = new Fruit("Apple", "red");

#=========================Access Modifiers========================
//public - property or method can be accessed from anywhere
//protected - property or method can be accessed within the class
//private - property or method can ONLY be accessed within the class

// class Fruit {
//    public $name;
//    protected $color;
//    private $weight;
//  }
 
//  $mango = new Fruit();
//  $mango->name = 'Mango'; // OK
//  $mango->color = 'Yellow'; // ERROR
//  $mango->weight = '300'; // ERROR

class Fruit {
 public $name;
 public $color;
 public $weight;

 function set_name($n) {  // a public function (default)
   $this->name = $n;
 }
 protected function set_color($n) { // a protected function
   $this->color = $n;
 }
 private function set_weight($n) { // a private function
   $this->weight = $n;
 }
}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR

//php oop.php
