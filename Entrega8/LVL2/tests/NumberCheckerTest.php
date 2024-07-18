<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;


final class NumberCheckerTest extends TestCase {


    #[\PHPUnit\Framework\Attributes\DataProvider('numberEvenPositive')]

    public function testIsEven(NumberChecker $num) {
        $this->assertIsBool($num->isEven());
        $this->assertTrue($num->isEven());
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('numberNotEvenNotPositive')]

    public function testIsNotEven(NumberChecker $num) {
        $this->assertIsBool($num->isEven());
        $this->assertFalse($num->isEven());
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('numberEvenPositive')]

    public function testIsPositive(NumberChecker $num){
        $this->assertTrue($num->isPositive());
        $this->assertIsBool($num->isPositive());
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('numberNotEvenNotPositive')]

    public function testIsNotPositive(NumberChecker $num){
        $this->assertFalse($num->isPositive());
        $this->assertIsBool($num->isPositive());
    }

    

    public static function numberEvenPositive():array {
        $number1 = new NumberChecker(10);
        $number2 = new NumberChecker(20);
        $number3 = new NumberChecker(30);

        return [
            [$number1],
            [$number2],
            [$number3],
        ];
    }

    public static function numberNotEvenNotPositive():array {
        $number1 = new NumberChecker(-11);
        $number2 = new NumberChecker(-21);
        $number3 = new NumberChecker(-31);

        return [
            [$number1],
            [$number2],
            [$number3],
        ];
    }
}