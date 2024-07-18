<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class TDDTest extends TestCase {

    #[\PHPUnit\Framework\Attributes\DataProvider('suspes')]
    public function testSuspes(Division $nota) {
        $this->assertSame($nota->division(), "L'alumne ha suspés");
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('tercera')]
    public function testTercera(Division $nota) {
        $this->assertSame($nota->division(), "L'alumne es de tercera divisó");
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('segona')]
    public function testSegona(Division $nota) {
        $this->assertSame($nota->division(), "L'alumne es de segona divisó");
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('primera')]
    public function testPrimera(Division $nota) {
        $this->assertSame($nota->division(), "L'alumne es de primera divisó");
    }


    public static function suspes():array {
        $division1 = new Division(10);
        $division2 = new Division(20);
        $division3 = new Division(32);
        return [
            [$division1],
            [$division2],
            [$division3],
        ];
    }
    public static function tercera():array {
        $division1 = new Division(33);
        $division2 = new Division(40);
        $division3 = new Division(44);
        return [
            [$division1],
            [$division2],
            [$division3],
        ];
    }
    public static function segona():array {
        $division1 = new Division(45);
        $division2 = new Division(50);
        $division3 = new Division(59);
        return [
            [$division1],
            [$division2],
            [$division3],
        ];
    }
    public static function primera():array {
        $division1 = new Division(60);
        $division2 = new Division(70);
        $division3 = new Division(90);
        return [
            [$division1],
            [$division2],
            [$division3],
        ];
    }
}