<?php
class Car{
   public $color;
   public $model;
   public function __construct($color, $model){
      $this->color = $color;
      $this->model = $model;
   }
   public function messsage(){
      return "My Car is a " . $this->color . " " . $this->model . "!";
   }
}

$myCar = new Car("red", "volvo");
var_dump($myCar);

//php objects.php
