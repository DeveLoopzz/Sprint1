<?php

$alumnos = ["Sergio" => [10,10,10,10,10],
            "Xavi" => [8,9,6,7,8], 
            "Albert" => [10,7,8,9,10]
];

echo mitjaAlumne($alumnos["Sergio"]) . "<br>";

echo mitjaAlumnes($alumnos);

function mitjaAlumne($alumnos): float {
    $notaMedia = array_sum($alumnos)  / 5;
    return $notaMedia;
}

function mitjaAlumnes($alumnos): float {
    $notaMedia = 0;
    foreach($alumnos as $alumno){
        foreach($alumno as $nota){
            $notaMedia += $nota;
        }
    }
    return $notaMedia / 5;
}
