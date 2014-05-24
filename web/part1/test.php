<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

print_r(Yaml::parse(realpath(__DIR__.'/test.yml')));
