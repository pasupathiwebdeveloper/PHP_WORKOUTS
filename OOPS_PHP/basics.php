<?php
// error_reporting(E_ALL);
// ini_set("display_errors",1);
// class Car {
//     public $brand = "Hyundai";

//     public function drive() {
//         return "i started and drive my car $this->brand ";
//     }
// }

// $myCar = new Car();

// echo $myCar->drive();

// class Person {
//     public $name;
  
//     public function setName($name) {
//      $this->name = $name;
//     }
//     public function greet() {
//         echo "welcome Mr. $this->name";
//     }
// }

// $person = new Person();
// $person->greet();
// $person->setName("Pasupathi");

//encapsulation - data and login into a secure way we need to access these methods 

// class Account {
//     private $balance = 0;

//     public function deposit($amount) {
//         $this->balance += $amount ; 
//     }
//     public function getBal() {
//         echo "balance $this->balance";
//     }
// }

// $acc = new Account();

// $acc->deposit(400);
// $acc->getBal();

// class User {
//     protected $name;
//     public function __Construct($name) {
//         $this->name = $name;
//     }
//     public function login() {
//         echo "logged in $this->name <br>";
//     }
// }

// class Admin extends User {
//     public function deleteUser($user) {
//         echo "$this->name admin deleted this user $user";
//     }
// }

// $admin = new Admin("Pasupathi");
// $admin->login();
// $admin->deleteUser("john");


// polymorphism

// interface Shape {
//     public function draw();
// }

// class Circle implements Shape {
//  public function draw() {
//      echo "circle draw";
//  }
// }

// class Rectangle implements Shape {
//     public function draw() {
//     echo "rectangle draw";
//     }
// }


// $shape = new Circle();

// $shape->draw();

// class Shape {
//     public function name() {
//         echo "Drawing class<br>";
//     }
//     public function draw() {
//         echo "Drawing";
//     }
// }

// class Circle extends Shape {
//     public function draw() 
//     {
//         echo "Circle Drawing";
//     }
// }

// $circle = new Circle();
// $circle->name();
// $circle->draw();


//abstraction

// abstract class Vehicle {
//     abstract public function move();
// }

// class Bike extends Vehicle {
//     public function move() {
//         echo "bike is moving";
//     }
// }


// class Car extends Vehicle {
//     public function move() {
//         echo "car is moving";
//     }
// }

// $car = new Car();

// $car->move();

class Demo {
    public function __construct() {
        echo "Contructor called <br>";
    }
    public function __destruct() {
        echo "destructor called <br>";
    }
}

$demo = new Demo();

