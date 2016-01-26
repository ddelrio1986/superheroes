<?php
/**
 * Superheroes Test
 *
 * Tests the superheroes class.
 *
 * @package DDelrio1986\SuperheroesTest
 * @filesource
 */

namespace DDelrio1986\SuperheroesTest;

use DDelrio1986\Superheroes\Superheroes;
use PHPUnit_Framework_TestCase;

/**
 * Superheroes Test
 *
 * Tests the superheroes class.
 *
 * @package DDelrio1986\SuperheroesTest
 */
class SuperheroesTest extends PHPUnit_Framework_TestCase
{

    /**
     * Test Superheroes Class Exists
     *
     * Tests if the superheroes class exists.
     */
    public function testSuperheroesClassExists()
    {
        $this->assertEquals(true, class_exists('DDelrio1986\Superheroes\Superheroes'));
    }

    /**
     * Test Names Loaded
     *
     * Tests that superhero names are loaded.
     */
    public function testNamesLoaded()
    {
        $superheroes = new Superheroes;
        $this->assertGreaterThan(0, count($superheroes->all));
    }

    /**
     * Test Random Method Exists
     *
     * Tests that the random method exists.
     */
    public function testRandomMethodExists()
    {
        $superheroes = new Superheroes;
        $this->assertTrue(method_exists($superheroes, 'random'));
    }

    /**
     * Test Random Returns A String
     *
     * Tests that random actually returns a string.
     */
    public function testRandomReturnsAString()
    {
        $superheroes = new Superheroes;
        $this->assertEquals('string', gettype($superheroes->random()));
    }

    /**
     * Test Name Is From List
     *
     * Tests if the name returned from random is in the list of superheroes.
     */
    public function testNameIsFromList()
    {
        $superheroes = new Superheroes;
        $this->assertContains($superheroes->random(), $superheroes->all);
    }

    /**
     * Test Names Are Random
     *
     * Tests that the names returned are random.
     */
    public function testNamesAreRandom()
    {
        $superheroes = new Superheroes;
        $this->assertNotEquals($superheroes->random(), $superheroes->random());
    }
}
