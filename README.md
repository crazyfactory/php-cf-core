# CrazyFactory\Core for PHP

A package containing Interfaces and Exceptions regularly used by other packages from Crazy Factory.

| master |
| --- |
| [![Build Status](https://travis-ci.org/crazyfactory/php-cf-core.svg?branch=master)](https://travis-ci.org/crazyfactory/php-cf-core) |

## Usage

- add a custom repository to your composer.json file
  ```
  "repositories": [
   {
     "type": "vcs",
     "url": "https://github.com/crazyfactory/php-cf-core"
   }
  ]
  ```

- run ```composer require crazyfactory/php-cf-core```

## Testing

This test offers no real test cases by design as it only contains simple interfaces. Implementations of these should be tested properly within their own packages.

- run ``composer update``
- run ``composer test`` for PHPUnit tests.
- run ``composer lint`` for code style tests.


Changelog

- 1.0.7: current Release
