<?php
namespace MonsterHunter;

require 'localizacion.php';
require 'tipo.php';
require 'weakness.php';

Class Monstruo {
    private string $nombre;
    private locationM $localizacion;
    private tipoM $tipo;
    private weakness $weakness;

    function __construct(string $nombre, locationM $localizacion, tipoM $tipo, rank $fire, rank $water, rank $thunder, rank $ice, rank $dragon) {
        $this->nombre = $nombre;
        $this->localizacion = $localizacion;
        $this->tipo = $tipo;
        $this->weakness = new weakness($fire, $water, $thunder, $ice, $dragon);
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getName() {
        return $this->nombre;
    }

    public function getWeakness() {
        return $this->weakness;
    }
}
