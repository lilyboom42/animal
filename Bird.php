<?php

require_once 'Animal.php';

abstract class Bird extends Animal {
    private $wingSpan;

    // Constructor
    public function __construct($name, $age, $wingSpan) {
        parent::__construct($name, $age);
        $this->wingSpan = $wingSpan;
    }

    // Getters
    public function getWingSpan() {
        return $this->wingSpan;
    }

    // Setters
    public function setWingSpan($wingSpan) {
        $this->wingSpan = $wingSpan;
    }
}
