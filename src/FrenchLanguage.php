<?php

namespace Oblik\Pluralization;

class FrenchLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v)
    {
        if ($i == 0 || $i == 1) {
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
        OTHER . OTHER => OTHER
    ];
}
