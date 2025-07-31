<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
// trait Log {
//     public function log($message) {
//         echo $message;
//     }
// }

// class User {
//     use Log;
//     public function create($message) {
//         echo $this->log($message);
//     }

// }

// $user = new User();

// $user->create("user created");

// interface Vehicle {
//     public function move($model);
// }

// Class Car implements Vehicle {
//     public function move($model) {
//     echo "My car $model is moving";
//     }
// }

// $car = new Car();

// $car->move("Hyundai I10");

// abstract class Logger {
//  abstract public function log(); 
// }

// class Email extends Logger {
// public function log() {
//     echo "email sent with log";
// }
// }

// class Whatsapp extends Logger {
//     public function log() {
//         echo "Whatsapp message sent with log";
//     }
// }



// class Sms extends Logger {

//     public function log() {
//         echo "sms sent with log";
//     }
// }

// $sms = new Sms();
// $sms->log();

// class Shape {
//      public $date;
//     public function __construct($date){
//       $this->date =$date;
//       echo "<h3>Drawing class: </h3>";
//     }
// }

// class Circle extends Shape {
//     public function draw() {
//         echo "<p>Circle class: </p>";
//         // echo $this->date;
//         echo "<iframe width=800 height=600 src='https://www.youtube.com/embed/rS3j07fodhU?controls=0&autoplay=1&mute=1'></iframe>";
//     }
// }

// class Rectangle extends Shape {
//     public function draw() {
//         echo "<p>Rectangle class: </p>";
//         echo "<iframe width=800 height=600 src='https://www.youtube.com/embed/3ayhL3880wQ?controls=0&autoplay=1&mute=1'></iframe>";
//     }
// }

// $today = date("d");

// if($today%2==0) {
//     $draw = new Rectangle($today);
    
// }
// else 
// {
//     $draw = new Circle($today); 
// }



// $draw->draw();


// class Animal {
//     public $name;
//     public function __construct($name) {
//       $this->name = $name;
//     }
//     // public function name($name) {
//     //     echo "Animal name is :". $name;
//     // }
// }

// class Cat extends Animal {
//     public function makeSound() {
//         echo "$this->name Make Sound like Meowww";
//     }
// }


// class Dog extends Animal {
//     public function makeSound() {
//         echo "$this->name Make Sound like Barks - Wow wow";
//     }
// }

// $animal = new Dog("dog");

// $animal->makeSound();

// class Account {
//     private $balance = 0;
//     public function deposit($amount){
//        $this->balance +=$amount; 
//     }
//     public function getBal() {
//         echo $this->balance;
//     }
// }

// $acc = new Account();

// $acc->deposit("1000");
// $acc->deposit("1000");
// $acc->deposit("1000");
// $acc->getBal();

// class Account {
//     private $conn;
//     private $acc_id;

//     public function __construct($con,$id) {
//       $this->conn = $con;
//       $this->acc_id = $id;
//     }

//     public function deposit(int $amount) {
//         if($amount<0) {
//             echo "invalid deposit";
//             return;
//         }
//         $acc = $this->acc_id;
//         $up = "UPDATE account SET balance = balance+$amount WHERE acc_id='$acc'";
//     mysqli_query($this->conn,$up);
//     }

//     public function getBal() {
//         $sel_id = $this->acc_id;
//         $sel = "SELECT * FROM account WHERE acc_id ='$sel_id'";
//         $run = mysqli_query($this->conn,$sel);
//         $val = mysqli_fetch_assoc($run);
//         echo "Balance is : ".$val['balance'];
//     }
// }
// $con = mysqli_connect("localhost","root","","oops_concepts");
// $id =1;
// $acc_m = new Account($con,$id);

// $acc_m->getBal();



