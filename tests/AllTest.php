<?php
use PHPUnit\Framework\TestCase;

class AllTest extends TestCase
{
    public function testArrayHasKey()
    {
        $this->assertArrayHasKey('aa',['aa'=>111,'bb'=>222]);
    }
}