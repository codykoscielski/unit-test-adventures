<?php
use PHPUnit\Framework\TestCase;

final class CalcTest extends TestCase {

    private Calc $calc;

    public function testAdding(): void {
        $sum = $this->calc->add(1.4, 3.4);
        $this->assertSame(4, $sum);
    }

    public function testSubtracting(): void {
        $sub = $this->calc->subtract(5, 1);
        $this->assertSame(4, $sub);
    }

    protected function setUp(): void {
        $this->calc = new Calc();
    }
}

    
