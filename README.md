# Destiny Matrix Matrix Calculator

A small PHP library that calculates Destiny Matrix personal points.

## Installation

```bash
composer require destiny-matrix/matrix-calculator
```

## Usage

```php
<?php

use DestinyMatrix\Calculator\MatrixCalculator;

$result = MatrixCalculator::fromDateString('1990-12-29');
$points = $result->toArray();

$resultFromParts = MatrixCalculator::fromParts(29, 12, 1990);
```

## Homepage

https://destiny-matrix.cc/es/
