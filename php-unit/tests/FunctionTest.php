<?php

use PHPUnit\Framework\TestCase;


class FunctionTest extends TestCase
{
    public function testAddReturnsTheCorrectSum()
    {
        # require the functions that you want to test

        require 'functions.php';  # Inside is the function add()

        $this->assertEquals(4, add(2, 2));
        $this->assertEquals(8, add(3, 5));
    }
}
