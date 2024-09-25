<?php

namespace MonsterHunter;

require 'rank.php';

class weakness {
    private rank $fire;
    private rank $water;
    private rank $thunder;
    private rank $ice;
    private rank $dragon;

    function __construct(rank $fire, rank $water, rank $thunder, rank $ice, rank $dragon) {
        $this->fire = $fire;
        $this->water = $water;
        $this->thunder = $thunder;
        $this->ice = $ice;
        $this->dragon = $dragon;
    }

    public function showFire(){
        return $this->fire;
    }

    public function showWater(){
        return $this->water;
    }

    public function showThunder(){
        return $this->thunder;
    }

    public function showice(){
        return $this->ice;
    }

    public function showDragon(){
        return $this->dragon;
    }

    public function showAllWeakness() {
        //return $this->fire . "<br>" . $this->water . "<br>" . $this->thunder . "<br>" . $this->ice . "<br>" . $this->dragon;
        return var_dump($this->fire, $this->water, $this->thunder, $this->ice, $this->dragon);
    }
}