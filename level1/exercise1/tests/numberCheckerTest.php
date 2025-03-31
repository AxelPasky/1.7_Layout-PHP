<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../numberChecker.php';
class NumberCheckerTest extends TestCase
{
    public function testIsEven()
    {
        $numberChecker = new NumberChecker(4);
        $this->assertTrue($numberChecker->isEven());

        $numberChecker = new NumberChecker(3);
        $this->assertFalse($numberChecker->isEven());
    }

    public function testIsPositive()
    {
        $numberChecker = new NumberChecker(5);
        $this->assertTrue($numberChecker->isPositive());

        $numberChecker = new NumberChecker(-3);
        $this->assertFalse($numberChecker->isPositive());
    }
}