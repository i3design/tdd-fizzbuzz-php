<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function _1を文字列1に変換する()
    {
        $fb = new FizzBuzz();
        $this->assertEquals("1", $fb->convert(1));
    }
}