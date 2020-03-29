<?php

namespace Oblik\Pluralization;

class AzerbaijaniLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v)
    {
        if ($n == 1) {
            return ONE;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        $mod10 = $n % 10;
        $mod100 = $n % 100;
        $mod1000 = $n % 1000;
        
        if (
            ($mod10 == 1 || $mod10 == 2 || $mod10 == 5 || $mod10 == 7 || $mod10 == 8)
            || ($mod100 == 20 || $mod100 == 50 || $mod100 == 70 || $mod100 == 80)
        ) {
            return ONE;
        }
        elseif (
            ($mod10 == 3|| $mod10 == 4)
            || ($mod1000 == 100 || $mod1000 == 200 || $mod1000 == 300 || $mod1000 == 400
                || $mod1000 == 500 || $mod1000 == 600|| $mod1000 == 700 || $mod1000 == 800 || $mod1000 == 900)
        ) {
            return FEW;
        }
        elseif ($n == 0 || $mod10 == 6 || ($mod100 == 40 || $mod100 == 60 || $mod100 == 90)) {
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
