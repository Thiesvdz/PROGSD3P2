<?php


// Ints in een string worden nogsteeds gezien als Ints

echo 5 * 5;echo '<br>';
echo '5' * '5';echo '<br>';
echo "5" * "5";echo '<br>';


// constantes

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;echo '<br>';
echo DB_NAME;echo '<br>';
