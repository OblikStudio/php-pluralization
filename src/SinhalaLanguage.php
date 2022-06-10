<?php

namespace Oblik\Pluralization;

class SinhalaLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v, int $w, int $f)
    {
        if ($n == 0 || $n == 1 || ($i == 0 && $f == 1)) {
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
        OTHER . ONE => OTHER,
        OTHER . OTHER => OTHER
    ];
}
