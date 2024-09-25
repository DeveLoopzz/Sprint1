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

    public function register(Monstruo $monster) {
        array_push($this->enciclopedia, $monster);
    }

    public function registerMany($arrayMonsters){
        foreach($arrayMonsters as $monster) {
            array_push($this->enciclopedia, $monster);
        }
    }

    public function findMonster(string $name) {
        foreach($this->enciclopedia as $index => $monster) {
            if($monster->getName() === $name) {
                return $index;
            }
        }
    }

    public function showWeakness(string $name){
        $index = $this->findMonster($name);
       return $this->enciclopedia[$index]->getWeakness()->showAllWeakness();
    }

}