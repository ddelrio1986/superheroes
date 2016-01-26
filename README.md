# superheroes [![Build Status](https://travis-ci.org/ddelrio1986/superheroes.svg?branch=master)](https://travis-ci.org/ddelrio1986/superheroes)

> Get superhero names

Packagist: [ddelrio1986/superheroes](https://packagist.org/packages/ddelrio1986/superheroes)

## Install

```
$ composer require ddelrio1986/superheroes
```

## Usage

```php
use DDelrio1986\Superheroes\Superheroes;

$superheroes = new Superheroes;

$superheroes->random();
//=> 'Spider-Ham'
```
## API

### ->all

Type: `array`

Superhero names in alphabetical order.

### ->random()

Type: `function`

Random superhero name.

## License

MIT © [Daniel Del Rio](http://github.com/ddelrio1986)
