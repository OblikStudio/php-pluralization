<?php

namespace Oblik\Pluralization;

class WelshLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v)
    {
        if ($n == 0) {
            return ZERO;
        }
        elseif ($n == 1) {
            return ONE;
        }
        elseif ($n == 2) {
            return TWO;
        }
        elseif ($n == 3) {
            return FEW;
        }
        elseif ($n == 6) {
            return MANY;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        if ($n == 0 || $n == 7 || $n == 8 || $n == 9) {
            return ZERO;
        }
        elseif ($n == 1) {
            return ONE;
        }
        elseif ($n == 2) {
            return TWO;
        }
        elseif ($n == 3 || $n == 4) {
            return FEW;
        }
        elseif ($n == 5 || $n == 6) {
            return MANY;
        }
        return OTHER;
    }

    const RANGE = [
        ONE . OTHER => OTHER,
        OTHER . ONE => ONE,
        OTHER . OTHER => OTHER,
    ];
}
