<?php

class Employee {

    public $name;
    public $salary;

    public function _construct($name, $salary) {
        $this->name =$name;
        $this->salary=$salary;
    }

    public function print() {
        $response = $this->name . " " . "has a salary of " . $this->salary . "$ and don't need to pay taxes.";
        if($this->salary > 6000) {
            $response = $this->name . " " . "has a salary of " . $this->salary . "$ and needs to pay taxes."; 
        }
        return $response; 
    }

}