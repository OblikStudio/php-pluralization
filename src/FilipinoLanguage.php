<?php

namespace Oblik\Pluralization;

class FilipinoLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v, int $w, int $f)
    {
        if (
            ($v == 0 && in_array($i, [1, 2, 3]))
            || ($v == 0 && !in_array($i % 10, [4, 6, 9]))
            || ($v != 0 && !in_array($f % 10, [4, 6, 9]))
        ) {
            return ONE;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        if ($n == 1) {
            return ONE;
        }
        return OTHER;
    }

    const RANGE = [
        ONE . ONE => ONE,
        ONE . OTHER => OTHER,
        OTHER . ONE => ONE,
        OTHER . OTHER => OTHER
    ];
}
