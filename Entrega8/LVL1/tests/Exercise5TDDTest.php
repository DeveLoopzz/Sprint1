<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

final class Exercise5TDDTest extends TestCase {
    protected $nota;

    function setUp():void {
        $this->nota = new Division(30);
    }

    public function testSuspes() {
        $this->assertSame($this->nota->division(), "L'alumne ha suspés");
    }

    public function testTercera() {
        $this->nota->setNum(40);
        $this->assertSame($this->nota->division(), "L'alumne es de tercera divisó");
    }

    public function testSegona() {
        $this->nota->setNum(50);
        $this->assertSame($this->nota->division(), "L'alumne es de segona divisó");
    }

    public function testPrimera() {
        $this->nota->setNum(60);
        $this->assertSame($this->nota->division(), "L'alumne es de primera divisó");
    }
}