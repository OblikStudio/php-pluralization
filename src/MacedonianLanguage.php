<?php

namespace Oblik\Pluralization;

class MacedonianLanguage extends Language
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
        return OTHER;
    }

    static function ordinal(int $n)
    {
        $mod10 = $n % 10;
        $mod100 = $n % 100;
        
        if ($mod10 == 1 && $mod100 != 11) {
            return ONE;
        }
        elseif ($mod10 == 2 && $mod100 != 12) {
            return TWO;
        }
        elseif (($mod10 == 7 || $mod10 == 8) && ($mod100 != 17 && $mod100 != 18)) {
            return MANY;
        }
        return OTHER;
    }

    const RANGE = [
        ZERO . ZERO => OTHER,
        ZERO . ONE => ONE,
        ZERO . OTHER => OTHER,
        ONE . ZERO => OTHER,
        ONE . ONE => ONE,
        ONE . OTHER => OTHER,
        OTHER . ZERO => OTHER,
        OTHER . ONE => ONE,
        OTHER . OTHER => OTHER,
    ];
}
