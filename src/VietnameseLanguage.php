<?php

namespace Oblik\Pluralization;

class VietnameseLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v)
    {
        return OTHER;
    }

    static function ordinal(int $n)
    {
        if ($n == 1) {
            return ONE;
        }
        return OTHER;
    }

    const RANGE = [
        OTHER . OTHER => OTHER,
    ];
}
