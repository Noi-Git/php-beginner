<?php
$numbers = [1, 4, 6, 7];
$fruits = array('apple', 'orange', 'pear');

// print_r($numbers);
// print_r($fruits);

// var_dump($numbers);
// var_dump($fruits);

// echo "Print out item at index 1: $fruits[1]";


// === Associative Array
$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green'
];

// echo "Print: $colors[4]";

// === Access person.first_name -- basically object in js
$person = [
  'first_name' => 'John',
  'last_name' => 'Doe',
  'email' => 'john@example.com'
];

// echo $person['first_name'];
// echo "Printout full name" . ' ' . $person['first_name'] . ' ' . $person['last_name'];


// === Nested array or object
$people = [
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@example.com'
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Smith',
    'email' => 'jane@example.com'
  ],
  [
    'first_name' => 'Noi',
    'last_name' => 'Smith',
    'email' => 'Noi@example.com'
  ]
];

// echo $people[1]['email'];

// === Turn into json object
var_dump(json_encode($people));
