<?php

declare(strict_types=1);

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    function testMethods()
    {

        $this->assertEquals(
            10,
            $this->calc->sum(2, 3, 5),
            'wrong sum'
        );

        $this->assertEquals(
            27,
            $this->calc->pow(3, 3),
            'wrong pow'
        );

        $this->assertEquals(
            5,
            $this->calc->minus(10,5),
            'wrong minus'
        );

        $this->assertEquals(
            2,
            $this->calc->delen(10,5),
            'wrong delenie'
        );

        $this->assertEquals(
            1,
            $this->calc->procent(11,2),
            'wrong procent'
        );

        $this->assertEquals(
            9,
            $this->calc->mult(3,3),
            'wrong multiplication'
        );
    }

    protected function tearDown(): void
    {
    }
}
