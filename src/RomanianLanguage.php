<?php

namespace Oblik\Pluralization;

class RomanianLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v)
    {
        if ($i == 1 && $v == 0) {
            return ONE;
        }
        elseif ($v != 0 || $n == 0 || ($n != 1 && self::inRange($n % 100, [1, 19])))
        {
            return FEW;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        if ($n == 1)
        {
            return ONE;
        }
        return OTHER;
    }

    const RANGE = [
        ONE . FEW => FEW,
        ONE . OTHER => OTHER,
        FEW . ONE => FEW,
        FEW . FEW => FEW,
        FEW . OTHER => OTHER,
        OTHER . FEW => FEW,
        OTHER . OTHER => OTHER
    ];
}
