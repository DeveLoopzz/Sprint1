<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase
{
    public function testIsEven() {
        $i = new NumberChecker(10);
        $y = new NumberChecker(21);
        $this->assertIsBool($i->isEven());
        $this->assertIsBool($y->isEven());
        $this->assertTrue($i->isEven());
        $this->assertFalse($y->isEven());
    }

    public function testIsPositive(){
        $i = new NumberChecker(10);
        $y = new NumberChecker(-10);
        $this->assertIsBool($i->isPositive());
        $this->assertIsBool($y->isPositive());
        $this->assertTrue($i->isPositive());
        $this->assertFalse($y->isPositive());
    }
}