<?php

$alumnos = ["Sergio" => [10,10,10,10,10],
            "Xavi" => [8,9,6,7,8], 
            "Albert" => [10,7,8,9,10]
];
echo mitjaAlumne($alumnos["Albert"]) . "<br>";

echo mitjaAlumnes($alumnos);

function mitjaAlumne($alumnos): float {
    $notaMedia = 0;
    foreach($alumnos as $notas){
        $notaMedia += $notas;
    }
    return $notaMedia / 5;
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
