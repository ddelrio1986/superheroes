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
}
