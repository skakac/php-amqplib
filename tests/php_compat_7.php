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

    protected function setUp(): void {
        static::setUpCompat();
    }

    protected function tearDown(): void {
        static::tearDownCompat();
    }
}
