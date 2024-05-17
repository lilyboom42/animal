<?php

require_once 'Animal.php';

abstract class Mammal extends Animal {
    private $furColor;

    // Constructor
    public function __construct($name, $age, $furColor) {
        parent::__construct($name, $age);
        $this->furColor = $furColor;
    }

    // Getters
    public function getFurColor() {
        return $this->furColor;
    }

    // Setters
    public function setFurColor($furColor) {
        $this->furColor = $furColor;
    }
}
