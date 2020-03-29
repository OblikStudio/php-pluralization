<?php

namespace Oblik\Pluralization;

class PersianLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v)
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
        ONE . ONE => OTHER,
        ONE . OTHER => OTHER,
        OTHER . OTHER => OTHER,
    ];
}
