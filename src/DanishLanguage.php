<?php

namespace Oblik\Pluralization;

class DanishLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v, int $w, int $f, int $t)
    {
        if ($n == 1 || ($t != 0 && ($i == 0 || $i == 1))) {
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
        OTHER . ONE => ONE,
        OTHER . OTHER => OTHER,
    ];
}
