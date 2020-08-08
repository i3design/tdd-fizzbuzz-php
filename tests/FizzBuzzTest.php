<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    private $fb;
    
    /**
     * @before
     */
    public function _FizzBuzzオブジェクト作成()
    {
        $this->fb = new FizzBuzz();
    }

    /**
     * @test
     * @group それ以外は数値を文字列に変換する
     */
    public function _1を文字列1に変換する()
    {
        $this->assertEquals("1", $this->fb->convert(1));
    }

    /**
     * @test
     * @group 3の倍数はFizzに変換する
     */
    public function _3をFizzに変換する()
    {
        $this->assertEquals("Fizz", $this->fb->convert(3));
    }

    /**
     * @test
     * @group 5の倍数はBuzzに変換する
     */
    public function _5をBuzzに変換する()
    {
        $this->assertEquals("Buzz", $this->fb->convert(5));
    }
}