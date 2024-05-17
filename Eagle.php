<?php

require_once 'Bird.php';

class Eagle extends Bird {
    private $flightSpeed;

    // Constructor
    public function __construct($name, $age, $wingSpan, $flightSpeed) {
        parent::__construct($name, $age, $wingSpan);
        $this->flightSpeed = $flightSpeed;
    }

    // Getters
    public function getFlightSpeed() {
        return $this->flightSpeed;
    }

    // Setters
    public function setFlightSpeed($flightSpeed) {
        $this->flightSpeed = $flightSpeed;
    }

    // Implement abstract methods
    public function makeSound() {
        return "Screech";
    }

    public function move() {
        return "Flies high";
    }

    public function hunt() {
        return "Hunts prey";
    }
}
