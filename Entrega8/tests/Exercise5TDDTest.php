<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

final class Exercise5TDDTest extends TestCase {
    protected $suspes;
    protected $tercera;
    protected $segona;
    protected $primera; 

    function setUp():void {
        $this->suspes = new Division(30);
        $this->tercera = new Division(40);
        $this->segona = new Division(50);
        $this->primera = new Division(60);
    }

    public function testDivision() {
        $this->assertSame($this->suspes->division(), "L'alumne ha suspés");
        $this->assertSame($this->tercera->division(), "L'alumne es de tercera divisó");
        $this->assertSame($this->segona->division(), "L'alumne es de segona divisó");
        $this->assertSame($this->primera->division(), "L'alumne es de primera divisó");
    }
}