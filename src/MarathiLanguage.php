<?php

namespace Oblik\Pluralization;

class MarathiLanguage extends Language
{
    static function cardinal(float $n, int $i)
    {
        if ($i == 0 || $n == 1) {
            return ONE;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        if ($n == 1) {
            return ONE;
        }
        elseif ($n == 2 || $n == 3) {
            return TWO;
        }
        elseif ($n == 4) {
            return FEW;
        }
        return OTHER;
    }

    const RANGE = [
        ONE . ONE => ONE,
        ONE . OTHER => OTHER,
        OTHER . OTHER => OTHER
    ];
}
