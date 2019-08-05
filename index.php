
<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Models/Users.php';

use Code\Models\Users;

// $a = new Data();

// $n = $a->list()->fetch();

// echo json_encode($n);

$a = new Users();

$b = $a->list()->fetch();

echo json_encode($b);