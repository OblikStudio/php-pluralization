<?php

namespace Oblik\Pluralization;

class CzechLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v)
    {
        if ($i == 1 && $v == 0) {
            return ONE;
        }
        if (($i == 2 || $i == 3 || $i == 4) && $v == 0) {
            return FEW;
        }
        if ($v != 0) {
            return MANY;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        return OTHER;
    }

    const RANGE = [
        ONE . FEW => FEW,
        ONE . MANY => MANY,
        ONE . OTHER => OTHER,
        FEW . FEW => FEW,
        FEW . MANY => MANY,
        FEW . OTHER => OTHER,
        MANY . ONE => ONE,
        MANY . FEW => FEW,
        MANY . MANY => MANY,
        MANY . OTHER => OTHER,
        OTHER . ONE => ONE,
        OTHER . FEW => FEW,
        OTHER . MANY => MANY,
        OTHER . OTHER => OTHER,
    ];
}
