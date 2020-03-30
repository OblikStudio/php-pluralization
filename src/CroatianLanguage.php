<?php

namespace Oblik\Pluralization;

class CroatianLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v, int $w, int $f, int $t)
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
            ($v == 0 && ($imod10 == 2 || $imod10 == 3 || $imod10 == 4) && ($imod100 != 12 && $imod100 != 13 && $imod100 != 14))
            || ($fmod10 == 2 || $fmod10 == 3 || $fmod10 == 4) && ($fmod100 != 12 && $fmod100 != 13 && $fmod100 != 14)
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
