<?php

namespace Oblik\Pluralization;

class FulahLanguage extends Language
{
    static function cardinal(float $n, int $i)
    {
        if ($i == 0 || $i == 1) {
            return ONE;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        return OTHER;
    }

    const RANGE = [];
}
