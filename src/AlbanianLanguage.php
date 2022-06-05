<?php

namespace Oblik\Pluralization;

class AlbanianLanguage extends Language
{
    static function cardinal(float $n)
    {
        if ($n == 1) {
            return ONE;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        if ($n == 1)
        {
            return ONE;
        }
        elseif ($n % 10 == 4 && $n % 100 != 14)
        {
            return MANY;
        }
        return OTHER;
    }

    const RANGE = [
        ONE . OTHER => OTHER,
        OTHER . ONE => ONE,
        OTHER . OTHER => OTHER
    ];
}
