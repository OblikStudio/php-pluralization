<?php

namespace Oblik\Pluralization;

class KazakhLanguage extends Language
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
        $mod10 = $n % 10;

        if ($mod10 == 6 || $mod10 == 9 || ($mod10 == 0 && $n != 0))
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
