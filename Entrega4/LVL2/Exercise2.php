<?php

$alumnos = ["Sergio" => [10,10,10,10,10],
            "Xavi" => [8,9,6,7,8], 
            "Albert" => [10,7,8,9,10]
];

echo mitjaAlumne($alumnos["Sergio"]) . "<br>";

echo mitjaAlumnes($alumnos);

function mitjaAlumne($alumno): float {
    $notaMedia = array_sum($alumno)  / count($alumno);
    return $notaMedia;
}

function mitjaAlumnes($alumnos): float {
    $notaMedia = 0;
    foreach($alumnos  as $alumno){
        $notaMedia += mitjaAlumne($alumno);
    }
    return $notaMedia / count($alumnos);
}
