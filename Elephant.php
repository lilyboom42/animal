<?php

require_once 'Mammal.php';

class Elephant extends Mammal {
    private $tuskLength;

    // Constructor
    public function __construct($name, $age, $furColor, $tuskLength) {
        parent::__construct($name, $age, $furColor);
        $this->tuskLength = $tuskLength;
    }

    // Getters
    public function getTuskLength() {
        return $this->tuskLength;
    }

    // Setters
    public function setTuskLength($tuskLength) {
        $this->tuskLength = $tuskLength;
    }

    // Implement abstract methods
    public function makeSound() {
        return "Trumpet";
    }

    public function move() {
        return "Walks slowly";
    }
}
