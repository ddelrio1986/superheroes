<?php

use DDelrio1986\Superheroes\Superheroes;

class SuperheroesTest extends PHPUnit_Framework_TestCase
{
    public function testSuperheroesClassExists()
    {
        $this->assertEquals(true, class_exists('DDelrio1986\Superheroes\Superheroes'));
    }
}
