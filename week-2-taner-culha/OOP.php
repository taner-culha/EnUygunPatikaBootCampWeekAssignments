<?php
class Vehicle {
  public $plate;
  public $brand;
  public $model;
  public $wheels;
  public $wing;
  public function __construct($plate, $brand, $model, $wheels, $wing) {
    $this->plate = $plate;
    $this->brand = $brand;
    $this->model = $model;
    $this->wheels = $wheels;
    $this->wing = $wing;
  }
  protected function intro() {
    echo "Plate No: {$this->plate} <br> Brand: {$this->brand} <br> Model: {$this->model} <br> Wheels: {$this->wheels} <br>"; 
  }
  protected function introPlane() {
    echo "Brand: {$this->brand} <br> Model: {$this->model} <br> Wing: {$this->wing} <br>"; 
  }
}
class Car extends Vehicle {
  public function message() {
    echo "The attributes of the car vehicle are as follows:<br>";
    $this -> intro();
  }
}
 class Motorcycle extends Vehicle {
  public function message() {
    echo "The attributes of the motorcycle vehicle are as follows:<br>";
    $this -> intro();
  }
}
class Plane extends Vehicle {
  public function message2() {
    echo "The attributes of the plane vehicle are as follows:<br>";
    $this -> introPlane();
  }
}
$car = new Car("34 TC 34", "Mercedes", "AMG G63", "4", "");
$car->message();
$motorcycle = new Motorcycle("34 TC 34", "Honda", "Forza 75", "2", "");
$motorcycle->message();
$plane = new Plane("", "Airbus", "A380","","80m");
$plane->message2();
?>