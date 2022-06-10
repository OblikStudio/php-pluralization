<?php

namespace Oblik\Pluralization;

class BosnianLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v, int $w, int $f)
    {
        $imod10 = $i % 10;
        $imod100 = $i % 100;
        $fmod10 = $f % 10;
        $fmod100 = $f % 100;

        if (
            ($v == 0 && $imod10 == 1 && $imod100 != 11)
            || ($fmod10 == 1 && $fmod100 != 11)
        ) {
            return ONE;
        }
        elseif (
            ($v == 0 && self::inRange($imod10, [2, 4]) && !self::inRange($imod100, [12, 14]))
            || (self::inRange($fmod10, [2, 4]) && !self::inRange($fmod100, [12, 14]))
        ) {
            return FEW;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        return OTHER;
    }

    const RANGE = [
        ONE . ONE => ONE,
        ONE . FEW => FEW,
        ONE . OTHER => OTHER,
        FEW . ONE => ONE,
        FEW . FEW => FEW,
        FEW . OTHER => OTHER,
        OTHER . ONE => ONE,
        OTHER . FEW => FEW,
        OTHER . OTHER => OTHER,
    ];
}
