<?php
    
    require 'shape.php';
    require 'circle.php';
    require 'triangle.php';
    require 'rectangle.php';
    
    $circle1 = new Circle(5);

    echo $circle1->calcArea();