<?php
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class CalcTest extends TestCase {

    private Calc $calc;

    #[DataProvider('addingProvider')]
    public function testAdding(int $a, int $b, int $expected): void {
        $sum = $this->calc->add($a, $b);
        $this->assertSame($expected, $sum);
    }

    public function testSubtracting(): void {
        $sub = $this->calc->subtract(5, 1);
        $this->assertSame(4, $sub);
    }

    public function testNotWholeNumAdding(): void {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Not a whole num');

        $this->calc->add(1.4, 4);
    }

    public static function addingProvider(): array {
        return [
            '1 plus 2' => [1, 2, 3],
            '6 plus 4' => [4, 6, 10],
            '4 plus 4' => [4, 4, 2]
        ];
    }

    protected function setUp(): void {
        $this->calc = new Calc();
    }
}

    
