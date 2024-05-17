<?php

require_once 'Mammal.php';

final class Dog extends Mammal {
    private $breed;

    // Constructor
    public function __construct($name, $age, $furColor, $breed) {
        parent::__construct($name, $age, $furColor);
        $this->breed = $breed;
    }

    // Getters
    public function getBreed() {
        return $this->breed;
    }

    // Setters
    public function setBreed($breed) {
        $this->breed = $breed;
    }

    // Implement abstract methods
    public function makeSound() {
        return "Bark";
    }

    public function move() {
        return "Runs quickly";
    }
}
