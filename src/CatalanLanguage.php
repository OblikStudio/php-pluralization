<?php

namespace Oblik\Pluralization;

class CatalanLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v)
    {
        if ($i == 1 && $v == 0) {
            return ONE;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        if ($n == 1 || $n == 3)
        {
            return ONE;
        }
        elseif ($n == 2)
        {
            return TWO;
        }
        elseif ($n == 4)
        {
            return FEW;
        }
        return OTHER;
    }

    const RANGE = [
        ONE . OTHER => OTHER,
        OTHER . ONE => OTHER,
        OTHER . OTHER => OTHER
    ];
}
