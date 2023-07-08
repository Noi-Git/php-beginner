<?php
// === for loop
for ($x = 1; $x <= 3; $x++) {
  // echo 'The number in for loop is: ' . $x . '<br>';
}


// === while loop
echo '==== while loop ===== <br>';
$w = 1;
while ($w <= 4) {
  // echo 'The number in for while is: ' . $w . '<br>';
  $w++;
}

echo '========= <br>';

while (!$w < 4) {
  // echo 'The number not greater than : ' . $w . '<br>';
  $w--;
}

echo '==== do...while loop ===== <br>';
// === do..while loop -- always execute one
$d = 1;
do {
  // echo 'The number in do..while loop is: ' . $d . '<br>';
  $d++;
} while ($d <= 2);

// echo '========= <br>';

$d2 = 5;
do {
  // echo 'The number in do..while loop is: ' . $d2 . '<br>';
  $d2++;
} while ($d2 <= 2);

// === loop through an array --- count() is like .length
echo '==== loop through array with for...loop ===== <br>';
$posts = ['First', 'Second', 'Third', 'Fourth'];
$postsWithIndex = ['One', 'Two', 'Three', 'Four'];

for ($x = 0; $x < count($posts); $x++) {
  // echo '========= <br>';
  // echo 'index is: ' . $x . '<br>';
  // echo 'value is: ' . $posts[$x] . '<br>';
}

echo '==== loop through array with forEach..loop ===== <br>';
foreach ($posts as $post) {
  // echo 'The value is: ' . $post . '<br>';
}

echo '==== forEach..loop with index ===== <br>';
foreach ($postsWithIndex as $index => $postWT) {
  echo 'Post with index: ' . $index . ' - ' . $postWT . '<br>';
}

echo '==== forEach..loop with associative array - object like in js ===== <br>';
$people = [

  'first_name' => 'John',
  'last_name' => 'Doe',
  'email' => 'john@example.com'
];

foreach ($people as $key => $value) {
  echo 'Loop through object: ' . $key . ' = ' . $value . '<br>';
}
