#!/usr/bin/env php
<?php

use DDelrio1986\Superheroes\Superheroes;

require_once __DIR__ . '/../vendor/autoload.php';

$options = getopt('a', ['all']);

$superheroes = new Superheroes;

if (count($options)) {
    array_walk($superheroes->all, function ($superhero) {
        echo $superhero . "\n";
    });
} else {
    echo $superheroes->random() . "\n";
}
