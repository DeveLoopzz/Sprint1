<?php

class pokerDice {
    private $face;
    private static $totalThrows = 0;

    public function getTotalThrows() {
        return self::$totalThrows;
    }

    public function throw() {
        self::$totalThrows++;
        return $this->face = rand(1,6);
    }

    public function shapeName() {
        switch ($this->face){
            case 1:
                return "A";
                break;
            case 2:
                return "K";
                break;
            case 3:
                return "Q";
                break;
            case 4: 
                return "J";
                break;
            case 5:
                return "8";
                break;
            case 6:
                return "7";
                break;
            default:
        }
    }

}