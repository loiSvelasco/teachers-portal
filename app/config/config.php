<?php

include(dirname(__DIR__) . '/../vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__) . '/../');
$dotenv->load();

Kint::$aliases[] = 'dd';
function dd(...$vars) { return die(Kint::dump(...$vars)); }

define("VIEW", dirname(__DIR__) . "/../public/");