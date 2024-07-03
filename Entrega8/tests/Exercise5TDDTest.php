<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

final class Exercise5TDDTest extends TestCase {

    public function testDivision() {
        $i = new Division(30);
        $y = new Division(40);
        $x = new Division(50);
        $z = new Division(60);

        $this->assertSame($i->division(), "L'alumne ha suspés");
        $this->assertSame($y->division(), "L'alumne es de tercera divisó");
        $this->assertSame($x->division(), "L'alumne es de segona divisó");
        $this->assertSame($z->division(), "L'alumne es de primera divisó");
    }
}