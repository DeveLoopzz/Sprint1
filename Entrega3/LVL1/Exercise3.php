<?php

    $int1 = 2;
    $int2 = 6;

    $double1 = 2.5;
    $double2 = 7.5;
    
    //VARIABLE WITHOUT MODS
    echo $int1 . $int2 . $double1 . $double2;

    //BASE OPERATIONS INT
    echo ($int1 + $int2);
    echo ($int1 - $int2);
    echo ($int1 * $int2);
    echo ($int1 % $int2);

    //BASE OPERATIONS DOUBLE
    echo ($double1 + $double2);
    echo ($double1 - $double2);
    echo ($double1 * $double2);
    echo ($double1 % $double2);

    //DOUBLE OF EVERY VAR
    echo $int1 * 2;
    echo $int2 * 2;
    echo $double1 * 2;
    echo $double2 * 8;

    //TOTAL 
    echo $int1 + $int2 + $double1 + $double2;

    //PRODUCT 
    echo $int1 * $int2 * $double1 * $double2;

    //CALCULATOR TEST
    echo calculator($int1, $int2, "");

    //FUNCTION CALCULATOR
    
    function calculator(float $num1, float $num2,string $operator ) : String {
        if ($operator == '+') {
            $result = $num1 + $num2;
        }
        else if ($operator == '-') {
            $result = $num1 - $num2;
        }
        else if ($operator == '*') {
            $result = $num1 * $num2;
        }
        else if ($operator == '/') {
            //DIV CANT BE 0
            if($num2 != 0) {
                $result = $num1 / $num2;
            }
            else {
                $result = 0;
            }   
        }
        else {
            $result = "Invalid operator";
        }

        return $result;
    }

    //CORRECCION CAMBIO EL RETURN A UN STRING Y  CAMBIO EL  VALOR DE RESULT A INVALID OPERATOR
    // SI ESTE NO ESTA ENTRE LOS QUE QUIERO. :)


