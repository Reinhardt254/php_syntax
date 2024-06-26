<?php
#Inheritance- When a class derives from another class
#An inherited class is defined by using the extends keyword

// class Fruit {
//    public $name;
//    public $color;
//    public function __construct($name, $color) {
//      $this->name = $name;
//      $this->color = $color;
//    }
//    public function intro() {
//      echo "The fruit is {$this->name} and the color is {$this->color}.";
//    }
//  }
 
//  // Strawberry is inherited from Fruit
//  class Strawberry extends Fruit {
//    public function message() {
//      echo "Am I a fruit or a berry? ";
//    }
//  }
//  $strawberry = new Strawberry("Strawberry", "red");
//  $strawberry->message();
//  $strawberry->intro();

#==============Overriding Inherited Methods=====================
class Fruit {
   public $name;
   public $color;
   public function __construct($name, $color) {
     $this->name = $name;
     $this->color = $color;
   }
   public function intro() {
     echo "The fruit is {$this->name} and the color is {$this->color}.";
   }
 }
 
 class Strawberry extends Fruit {
   public $weight;
   public function __construct($name, $color, $weight) {
     $this->name = $name;
     $this->color = $color;
     $this->weight = $weight;
   }
   public function intro() {
     echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
   }
 }
 
 $strawberry = new Strawberry("Strawberry", "red", 50);
 $strawberry->intro();

 //php inheritance.php
