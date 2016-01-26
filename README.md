# superheroes [![Build Status](https://travis-ci.org/ddelrio1986/superheroes.svg?branch=master)](https://travis-ci.org/ddelrio1986/superheroes) [![Latest Stable Version](https://poser.pugx.org/ddelrio1986/superheroes/v/stable)](https://packagist.org/packages/ddelrio1986/superheroes) [![Total Downloads](https://poser.pugx.org/ddelrio1986/superheroes/downloads)](https://packagist.org/packages/ddelrio1986/superheroes) [![Latest Unstable Version](https://poser.pugx.org/ddelrio1986/superheroes/v/unstable)](https://packagist.org/packages/ddelrio1986/superheroes) [![License](https://poser.pugx.org/ddelrio1986/superheroes/license)](https://packagist.org/packages/ddelrio1986/superheroes)

> Get superhero names

Packagist: [ddelrio1986/superheroes](https://packagist.org/packages/ddelrio1986/superheroes)

## Installation

```
$ composer require ddelrio1986/superheroes
```

## Example Usage

```php
use DDelrio1986\Superheroes\Superheroes;

$superheroes = new Superheroes;

$superheroes->random();
//=> 'Spider-Ham'
```
## Quick API Reference

```php
$superheroes->all
```

Type: `array`

Superhero names in alphabetical order.

```php
$superheroes->random()
```

Type: `function`

Random superhero name.

## CLI Usage

```
$ ./bin/ddelrio1986-superheroes.php
Spider-Ham
```

```
$ ./bin/ddelrio1986-superheroes.php -a|--all
3-D Man
A-Bomb
...
```

## Running Unit Tests

```
phpunit
```

## License

MIT © [Daniel Del Rio](http://github.com/ddelrio1986)
