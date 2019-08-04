
<?php

use Code\Money\Data;

require __DIR__ . '/vendor/autoload.php';

$a = new Data();

$n = $a->list()->fetch();

print_r($n);