<?php
use PHPUnit\Framework\TestCase;

class Dummy
{
    public $foo;
}

class AllTest extends TestCase
{
    public function testAll()
    {
        $this->assertClassHasAttribute('foo','Dummy');
    }
}