<?php
// Variables must be prefixed with $

$name = 'Noi';
$age = 40;
// === Use . for concatenation
// === Use "" the result is like string interporation ``
echo 'My name is ' . $name;
echo "</br>";

echo "This is another way: $name </br>";
// echo "</br>";

echo "Another to concat variable: {$name} </br>";
// echo "</br>";


// === Create constant
define('HOST', 'localhost');
define('DB_Name', 'dev_db');

// === Will get localhost on the screen
// echo HOST;
