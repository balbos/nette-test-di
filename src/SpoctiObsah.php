<?php declare(strict_types=1);

namespace Balbos\TestDi;

class SpoctiObsah {
    public function spoctiCtverec(int $a) {
        return $a * $a;
    }
    public function spoctiObdelnik(int $a, int $b) {
        return $a * $b;
    }
}