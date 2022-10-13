<?php


require_once '../package_externe/vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

$output = $bessie->say();
echo $output;