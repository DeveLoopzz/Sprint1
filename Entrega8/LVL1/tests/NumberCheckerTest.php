<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase
{       
    protected $num;

    function setUp():void{
        $this->num = new NumberChecker(10);
    }

    public function testIsEven() {
        $this->assertIsBool($this->num->isEven());
        $this->assertTrue($this->num->isEven());
    }

    public function testIsNotEven() {
        $this->num->setNumber(11);
        $this->assertIsBool($this->num->isEven());
        $this->assertFalse($this->num->isEven());
    }

    public function testIsPositive(){
        $this->num->setNumber(11);
        $this->assertTrue($this->num->isPositive());
        $this->assertIsBool($this->num->isPositive());
        
    }

    public function testIsNegative() {
        $this->num->setNumber(-11);
        $this->assertFalse($this->num->isPositive());
        $this->assertIsBool($this->num->isPositive());
    }
}