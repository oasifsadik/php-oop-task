<?php
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return "Some generic animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "bhou bhou";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow Meow";
    }
}

class Rat extends Animal {
    public function makeSound() {
        return "chirps chirps";
    }
}

// Usage
$animals = [
    new Dog("Spike "),
    new Cat("Tom"),
    new Rat("Jerry")
];

foreach ($animals as $animal) {
    echo $animal->name . ": " . $animal->makeSound() . "<br>";
}

?>