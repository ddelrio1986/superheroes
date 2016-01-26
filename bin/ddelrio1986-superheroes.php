#!/usr/bin/env php
<?php

use DDelrio1986\Superheroes\Superheroes;

// Setup autoloading.
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {

    // Local installation.
    require __DIR__ . '/../vendor/autoload.php';
} elseif (file_exists(getcwd() . '/vendor/autoload.php')) {

    // Root project is current working directory.
    require getcwd() . '/vendor/autoload.php';
} elseif (file_exists(__DIR__ . '/../../../autoload.php')) {

    // Relative to composer install.
    require __DIR__ . '/../../../autoload.php';
} else {
    fwrite(STDERR, "Unable to setup autoloading; aborting\n");
    exit(2);
}

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
