<?php

/**
 * These two files are needed to support php < 7.1.
 * In modern versions of phpunit (after php 7.1 was released), signature of setUp() and tearDown() methods of phpunit changed.
 * Until PhpAmqpLib supports php <7.1, this file is needed to mate tests work on old php versions
 */

namespace PhpAmqpLib\Tests;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function setUpCompat()
    {
        parent::setUp();
    }

    protected function tearDownCompat()
    {
        parent::tearDown();
    }

    public function setUp()
    {
        static::setUpCompat();
    }

    public function tearDown()
    {
        static::tearDownCompat();
    }

    protected function assertIsArray($actual, $message = '')
    {
        $this->assertInternalType('array', $actual, $message);
    }

    protected function assertIsString($actual, $message = '')
    {
        $this->assertInternalType('string', $actual, $message);
    }

    protected function assertIsInt($actual, $message = '')
    {
        $this->assertInternalType('integer', $actual, $message);
    }
}
