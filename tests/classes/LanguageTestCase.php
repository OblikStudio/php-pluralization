<?php

namespace Oblik\Pluralization;

use PHPUnit\Framework\TestCase;

class LanguageTestCase extends TestCase
{
    protected function checkNumbers(int $category, string $method, array $assertions)
    {
        foreach ($assertions as $value) {
            if (is_array($value)) {
                $start = $value[0];
                $end = $value[1];
                $decimals = $value[2] ?? 0;
                $step = ($decimals > 0) ? pow(10, -$decimals) : 1;

                for ($i = $start; $i <= $end; $i += $step) {
                    if ($decimals > 0) {
                        $number = number_format($i, $decimals, '.', '');
                    } else {
                        $number = $i;
                    }

                    $this->assertEquals($category, static::$class::$method($number));
                }
            } else {
                $this->assertEquals($category, static::$class::$method($value));
            }
        }
    }

    protected function checkCardinals(int $category, array $assertions)
    {
        $this->checkNumbers($category, 'getCardinal', $assertions);
    }

    protected function checkOrdinals(int $category, array $assertions)
    {
        $this->checkNumbers($category, 'getOrdinal', $assertions);
    }
}
