<?php

namespace Oblik\Pluralization;

use ReflectionMethod;
use PHPUnit\Framework\TestCase;


final class LanguageTest extends TestCase
{
    /**
     * @see http://unicode.org/reports/tr35/tr35-numbers.html#Plural_Operand_Examples
     */
    public function testNumberParsing()
    {
        $method = new ReflectionMethod(Language::class, 'parseNumber');
        $method->setAccessible(true);

        $this->assertEquals([1, 1, 0, 0, 0, 0], $method->invoke(null, 1));
        $this->assertEquals(['1.0', 1, 1, 0, 0, 0], $method->invoke(null, '1.0'));
        $this->assertEquals(['1.00', 1, 2, 0, 0, 0], $method->invoke(null, '1.00'));
        $this->assertEquals([1.3, 1, 1, 1, 3, 3], $method->invoke(null, 1.3));
        $this->assertEquals(['1.30', 1, 2, 1, 30, 3], $method->invoke(null, '1.30'));
        $this->assertEquals([1.03, 1, 2, 2, 3, 3], $method->invoke(null, 1.03));
        $this->assertEquals(['1.230', 1, 3, 2, 230, 23], $method->invoke(null, '1.230'));
    }
}
