<?php

namespace MonsterHunter;

// require 'monster.php';

class huntersNotes {
    private array $enciclopedia = [];


    public function getEnciclopedia() {
        return $this->enciclopedia;
    }

    function searchType(tipoM $tipo) {
        $arraySameType = [];
        foreach($this->enciclopedia as $monster){
            if($monster->getTipo() === $tipo){
                array_push($arraySameType, $monster->getName());
            }
        }
        return $arraySameType;
    }
    
    function longestName() {
        $s ="";
        foreach($this->enciclopedia as $monster){
           if(strlen($monster->getName()) > strlen($s)){
            $s = $monster->getName();
           }
        }
        return $s;
    }
//DADO UN UNICO MONSTRUO REGISTRA EN LA ENCICLOPEDIA, NO ES NECESARIO PERO ME PARECIO UTIL
    public function register(Monstruo $monster) {
        array_push($this->enciclopedia, $monster);
    }

//DADO UN ARRAY DE MONSTRUOS LOS AÑADE A LA ENCICLOPEDIA,
//PODRIA LIMPIAR EL ARRAY HACIENDO $arrayMonsters = $huntersnotes->registerMany($arrayMonsters); Devolviendo en la funcion un array vacio
    public function registerMany($arrayMonsters){
        foreach($arrayMonsters as $monster) {
            array_push($this->enciclopedia, $monster);
        }
    }

//Buscador de monstruos, devuelve el indice en el que esta localizado el monstruo dentro de la enciclopedia
    public function findMonster(string $name) {
        foreach($this->enciclopedia as $index => $monster) {
            if($monster->getName() === $name) {
                return $index;
            }
        }
    }
//Buscador de debilidades, usa la funcion de findmonster, ! FALTA PRINTEAR CORRECTAMENTE LAS WEAKNESS, __TOSTRING()? 
    public function showWeakness(string $name){
        $index = $this->findMonster($name);
       return $this->enciclopedia[$index]->getWeakness()->showAllWeakness();
    }

}