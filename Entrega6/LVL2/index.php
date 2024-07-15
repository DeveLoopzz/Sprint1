<?php
    
    require 'shape.php';
    require 'rectangle.php';
    require 'triangle.php';
    
    $triangle1 = new Triangle(2,5);
    $rectangle1 = new Rectangle(4,8);

    echo $rectangle1->calcArea();
    echo "<br>" . $triangle1->calcArea();