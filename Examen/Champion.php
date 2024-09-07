<?php

require 'dificultad.php';
require 'rol.php';

Class Champion {
    private $name;
    private Rol $rol;
    private Dificultad $dificultad;
    private $pasiva;
    private $skill1;
    private $skill2;
    private $skill3;
    private $ultimate;

    public function __construct(string $name, Rol $rol, Dificultad $dificultad, string $pasiva, string $skill1, string $skill2, string $skill3, string $ultimate) {
        $this->name = $name;
        $this->rol = $rol;
        $this->dificultad = $dificultad;
        $this->pasiva = $pasiva;
        $this->skill1 = $skill1;
        $this->skill2 = $skill2;
        $this->skill3 = $skill3;
        $this->ultimate = $ultimate;
    }

    //GETTER
    public function getNombre() {
        return $this->name;
    }
    public function getRole() {
        return $this->rol;
    }
    public function getDificultad() {
        return $this->dificultad;
    }
    public function getPasiva() {
        return $this->pasiva;
    }
    public function getSkill1() {
        return $this->skill1;
    }
    public function getSkill2() {
        return $this->skill2;
    }
    public function getSkill3() {
        return $this->skill3;
    }
    public function getUltimate() {
        return $this->ultimate;
    }   

    //SETTER 
    public function setName($x) {
        $this->name = $x;
    }
    public function setRol($x) {
        $this->rol = $x;
    }
    public function setDificultad($x) {
        $this->dificultad = $x;
    }
    public function setPasiva($x) {
        $this->pasiva  = $x;
    }
    public function setSkill1($x) {
        $this->skill1  = $x;
    }
    public function setSkill2($x) {
        $this->skill2  = $x;
    }
    public function setSkill3($x) {
        $this->skill3  = $x;
    }
    public function setUltimate($x) {
        $this->ultimate  = $x;
    }

}
