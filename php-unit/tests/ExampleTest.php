<?php

# Unit Test using PHP Unit is a PHP class


# use built in TestCase class
use PHPUnit\Framework\TestCase;

# Create the class for testing (match the class name to the file name)
# Extend your class from TestCase

class ExampleTest extends TestCase
{

    #Individual tests are public methods
    public function testAddingTwoPlusTwoResultsInFour()
    {
        # An assertion verifies that something is true
        $this->assertEquals(4, 2 + 2);
    }
}

# Unit tests usually test the behavior of a function or class

# To write a test in PHP-Unit
# Create a class that extends TestCase
# Add public methods that start with test
# Write public assertions that test code

# There are many different assertion methods that are available which you can find here:
# https://phpunit.readthedocs.io/en/9.5/assertions.html

# Naming Test Methods:
# There are two ways that you can name your test methods
# Prefix the method name with 'test'
// testFullNameIsEmptyByDefault
// test_full_name_is_empty_by_default

# Prefix your method with a docblock

/** 
 * @test
 */

// public function user_has_first_name()    
// Because this is prefixed with the @test docblock, this test is now valid