<?php

require_once 'Bird.php';

final class Penguin extends Bird {
    private $swimSpeed;

    // Constructor
    public function __construct($name, $age, $wingSpan, $swimSpeed) {
        parent::__construct($name, $age, $wingSpan);
        $this->swimSpeed = $swimSpeed;
    }

    // Getters
    public function getSwimSpeed() {
        return $this->swimSpeed;
    }

    // Setters
    public function setSwimSpeed($swimSpeed) {
        $this->swimSpeed = $swimSpeed;
    }

    // Implement abstract methods
    public function makeSound() {
        return "Squawk";
    }

    public function move() {
        return "Swims swiftly";
    }

    public function swim() {
        return "Swims underwater";
    }
}
