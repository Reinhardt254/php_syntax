<?php
#====================for loop===================
// for($x = 0; $x <= 10; $x++){
//    echo "The number is: $x <br>";
// }

// for ($x = 0; $x <= 10; $x++) {
//    if ($x == 3) break;
//    echo "The number is: $x <br>";
//  }

// for ($x = 0; $x <= 10; $x++) {
//    if ($x == 3) continue;
//    echo "The number is: $x <br>";
//  }

// for ($x = 0; $x <= 100; $x+=10) {
//    echo "The number is: $x <br>";
//  }

#=================while loop===================

// $i = 1;

// while ($i <= 6){
//    echo $i;
//    $i++;
// }

// while ($i < 6) {
//   if ($i == 3) break;
//   echo $i;
//   $i++;
// }

// $i = 0;

// while ($i < 6) {
//   $i++;
//   if ($i == 3) continue;
//   echo $i;
// }

// $i = 1;

// while ($i < 6):
//   echo $i;
//   $i++;
// endwhile;

#==============Do while loop=================

// $i = 0;

// do {
//    echo $i;
//    $i++;
// } while ($i < 5);

// do {
//    $i++;
//    if ($i == 3) break/continue;
//    echo $i;
//  } while ($i < 6);

#=============foreach loop==============
// $animals = array("cow", "sheep", "goats", "horses");

// foreach($animals as $x){
//    echo "$x <br>";
// }

// $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach ($members as $x => $y) {
//   echo "$x : $y <br>";
// }

#foreach Loop on Objects

class Car {
   public $color;
   public $model;
   public function __construct($color, $model) {
     $this->color = $color;
     $this->model = $model;
   }
 }
 
 $myCar = new Car("red", "Volvo");
 
 foreach ($myCar as $x => $y) {
   echo "$x: $y <br>";
 }

#php loops.php
