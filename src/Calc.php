<?php 

declare (strict_types = 1);

class Calc {

    public function add(int|float $a, int|float $b): int {
        if (!is_int($a) || !is_int($b)) {
            throw new Exception('Not a whole num');
        }
        return $a + $b;
    }

    public function subtract(int|float $a, int|float $b): int {
        if (!is_int($a) || !is_int($b)) {
            throw new Exception('Not a whole num');
        }
        return $a - $b;
    }


}

