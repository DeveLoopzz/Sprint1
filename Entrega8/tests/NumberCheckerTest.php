<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase
{       
    protected $even;
    protected $notEven;
    protected $positive;
    protected $notPositive;

    function setUp():void{
        $this->even = new NumberChecker(10);
        $this->notEven = new NumberChecker(21);
        $this->positive = new NumberChecker(10);
        $this->notPositive = new NumberChecker(-10);
    }

    public function testIsEven() {
        $this->assertIsBool($this->even->isEven());
        $this->assertTrue($this->even->isEven());
    }

    public function testIsNotEven() {
        $this->assertIsBool($this->notEven->isEven());
        $this->assertFalse($this->notEven->isEven());
    }

    public function testIsPositive(){
        $this->assertIsBool($this->positive->isPositive());
        $this->assertIsBool($this->notPositive->isPositive());
        $this->assertTrue($this->positive->isPositive());
        $this->assertFalse($this->notPositive->isPositive());
    }
}