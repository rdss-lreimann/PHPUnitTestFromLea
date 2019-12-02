<?php

use DI\ContainerBuilder;
use Lea\PHPUnit\Arithmetician\Execute;

// @codeCoverageIgnoreStart

require __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new ContainerBuilder();
$containerBuilder->useAnnotations(true);
$container = $containerBuilder->build();

$execute = $container->get(Execute::class);

$firstNumber = readline('Give me the first number with which you want to calculate:');
$secondNumber = readline('Give me the second number with which you want to calculate:');
$operator = readline('Give me the operator with which you want to calculate:');

$execute->run($firstNumber, $secondNumber, $operator);


// @codeCoverageIgnoreEnd
