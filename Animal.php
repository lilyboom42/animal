<?php

abstract class Animal {
    private $name;
    private $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Getters
    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    // Setters
    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    // Abstract methods
    abstract public function makeSound();
    abstract public function move();
}
