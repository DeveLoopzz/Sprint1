<?php

    require 'Exercise1.php';

    $employee1 = new Employee;
    $employee1 ->newEmployee("Sergio", 6000);

    echo $employee1->print();

    echo "<br>" . $employee1->getName();
    echo "<br>" . $employee1->getSalary();
    