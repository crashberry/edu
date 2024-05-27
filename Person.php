<?php

class Person {
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother=null, $father=null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }

  function sayHi($name) {
    return "Hi $name, I'm " . $this->name;
  }

  function setHp($hp) {
    if ($this->hp + $hp > 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }

  function getHp() {
    return $this->hp;
  }
  function getName() {
    return $this->name;
  }
  function getMother() {
    return $this->mother;
  }
  function getFather() {
    return $this->father;
  }
  function getInfo() {
    return "My name is " . $this->getName() . "<br> My father is " . $this->getFather()->getName() . "<br> My mother is " . $this->getMother()->getName() . "<br> My grandfather (my mother's father) is " . $this->getMother()->getFather()->getName() . "<br> My grandmother (my mother's mother) is " . $this->getMother()->getMother()->getName() . "<br> My grandfather (my father's father) is " . $this->getFather()->getFather()->getName() . "<br> My grandmother (my father's mother) is " . $this->getFather()->getMother()->getName();
  }
}

$maxim = new Person("Maxim", "Ivanov", 83);
$daria = new Person("Daria", "Ivanova", 81);

$igor = new Person("Igor", "Petrov", 78);
$anna = new Person("Anna", "Petrova", 78);

$alex = new Person("Alex", "Ivanov", 42, $daria, $maxim);
$olga = new Person("Olga", "Ivanova", 41, $anna, $igor);

$valera = new Person("Valera", "Ivanov", 12, $olga, $alex);

echo $valera->getInfo();

// echo $valera->getMother()->getFather()->getName(); // Имя дедушки


// echo $alex->sayHi($igor->name);
// Здоровье не может быть более 100 единиц

// $medKit = 50;
// $alex->setHp(-30); // Упал
// echo $alex->getHp() . "<br>";
// $alex->setHp($medKit); // Нашёл аптечку
// echo $alex->getHp() . "<br>";

// $alex->name = "Alex";
// echo $alex->name;
// echo $igor->name;
