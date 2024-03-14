<?php

require __DIR__ .'/vendor/autoload.php';

use FirstProject\Person;

$person = new Person();
$person->name = 'John Pablo';

echo $person->name;