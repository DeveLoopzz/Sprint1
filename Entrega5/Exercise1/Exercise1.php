<?php

class Employee {
    public $name;
    public $salary;


    //CONSTRUCTOR
    public function _construct($name, $salary) {
        $this->name = $name;
        $this->salary= $salary;
    }

    //GETTER
    public function getName(){
        return $this->name;
    }

    public function getSalary(){
        return $this->salary;
    }

    //SETTER
    public function setName($name) {
        $this->name = $name;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }


    //METHODS

    public function newEmployee($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function print() {
        $response = "Name:" . $this->name . "<br>" . "Salary:" . $this->salary . "<br>" . "Taxes: NO";
        if($this->salary > 6000) {
            $response = "Name:" . $this->name . "<br>" . "Salary:" . $this->salary . "<br>" . "Taxes: YES"; 
        }
        return $response; 
    }


}