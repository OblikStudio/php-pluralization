<?php

namespace Oblik\Pluralization;

class DutchLanguage extends Language
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
        return OTHER;
    }

    const RANGE = [
        ONE . OTHER => OTHER,
        OTHER . ONE => ONE,
        OTHER . OTHER => OTHER
    ];
}
