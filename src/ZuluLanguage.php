<?php

namespace Oblik\Pluralization;

class ZuluLanguage extends Language
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
        return OTHER;
    }

    const RANGE = [
        ONE . ONE => ONE,
        ONE . OTHER => OTHER,
        OTHER . OTHER => OTHER
    ];
}
