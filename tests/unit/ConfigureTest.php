<?php
declare(strict_types=1);

namespace tests\unit;

use Configure\Configure;
use PHPUnit\Framework\TestCase;

/**
 * Class ConfigureTest
 * @package tests\unit
 *
 * phpunit tests/unit/ConfigureTest
 */
class ConfigureTest extends TestCase
{
    /**
     * @test
     */
    public function read_引数が空の場合は例外を投げる()
    {
        $this->expectException(\Exception::class);
        Configure::read('');
    }
}