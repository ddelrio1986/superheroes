#!/usr/bin/env php
<?php

use DDelrio1986\Superheroes\Superheroes;

require_once __DIR__ . '/../vendor/autoload.php';

$options = getopt('a', ['all']);

$superheroes = new Superheroes;

// Print all superheroes.
if (count($options)) {
    array_walk($superheroes->all, function ($superhero) {
        echo $superhero . "\n";
    });

// Print one random superhero.
} else {
    echo $superheroes->random() . "\n";
}
