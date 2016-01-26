<?php
/**
 * Superheroes
 *
 * The main superheroes class.
 *
 * @package DDelrio1986\Superheroes
 * @filesource
 */

namespace DDelrio1986\Superheroes;

/**
 * Superheroes
 *
 * The main superheroes class.
 *
 * @package DDelrio1986\Superheroes
 */
class Superheroes
{

    /**
     * All
     *
     * @var array All of the superheroes.
     */
    public $all = array();

    /**
     * __construct
     *
     * Loads all of the superheroes.
     */
    public function __construct()
    {
        $this->all = require __DIR__ . '/../data/superheroes.php';
    }

    /**
     * Random
     *
     * Obtains a random superhero from the list.
     *
     * @return string A random superhero from the list.
     */
    public function random()
    {

        // Return a random entry from the superhero list.
        return $this->all[mt_rand(0, count($this->all) - 1)];
    }
}
