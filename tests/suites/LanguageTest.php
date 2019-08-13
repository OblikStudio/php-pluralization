<?php

namespace Oblik\Pluralization;

use ReflectionMethod;
use PHPUnit\Framework\TestCase;

final class LanguageTest extends TestCase
{
    public function testNumberParsing()
    {
        $method = new ReflectionMethod(Language::class, 'parseNumber');
        $method->setAccessible(true);

        $this->assertEquals(['integer' => 0, 'fraction' => null], $method->invoke(null, 0));
        $this->assertEquals(['integer' => 0, 'fraction' => null], $method->invoke(null, 0.0));
        $this->assertEquals(['integer' => 0, 'fraction' => 0], $method->invoke(null, '0.0'));
        $this->assertEquals(['integer' => 0, 'fraction' => 0.1], $method->invoke(null, 0.1));
        $this->assertEquals(['integer' => 0, 'fraction' => 0.1], $method->invoke(null, '0.1'));

        $this->assertEquals(['integer' => 1, 'fraction' => null], $method->invoke(null, 1));
        $this->assertEquals(['integer' => 1, 'fraction' => null], $method->invoke(null, 1.0));
        $this->assertEquals(['integer' => 1, 'fraction' => 0], $method->invoke(null, '1.0'));
        $this->assertEquals(['integer' => 1, 'fraction' => 0.004], $method->invoke(null, 1.004));
        
        $this->assertEquals(['integer' => 0, 'fraction' => null], $method->invoke(null, -0.0));
        $this->assertEquals(['integer' => -1, 'fraction' => 0.5], $method->invoke(null, -1.5));
        $this->assertEquals(['integer' => -1, 'fraction' => 0.5], $method->invoke(null, '-1.5'));
    }
}
