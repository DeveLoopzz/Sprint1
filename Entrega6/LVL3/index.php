<?php
    
    require 'shape.php';
    require 'circle.php';
    
    $circle1 = new Circle(5);

    echo $circle1->calcArea();