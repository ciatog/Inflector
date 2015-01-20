[![Build Status](https://travis-ci.org/ciatog/PhpInflector.svg?branch=master)](https://travis-ci.org/ciatog/PhpInflector)
[![Coverage Status](https://coveralls.io/repos/ciatog/PhpInflector/badge.png?branch=master)](https://coveralls.io/r/ciatog/PhpInflector?branch=master)

PHP Inflector
=============

A simple inflection library for PHP

Usage
-----

Install the latest version with `composer require ciatog/inflector`

```php
<?php

use Ciatog\Inflector;

$inflector = new Inflector();

// Outputs: Testing 123
echo $inflector->humanise("testing-123");

// Outputs: testing_123
echo $inflector->machinise("testing 123");

// Outputs: testing-123
echo $inflector->dasherise("testing 123");
```

Author
------

Keith Webster - <keith.webster@gmail.com> - <http://keith-webster.com>

License
-------

PHP Inflector is licensed under the MIT License - see the `LICENSE.txt` file for details
