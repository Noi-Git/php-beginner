<?php

// === If statement
$age = 10;

if ($age >= 18) {
  // echo 'You can drink now!';
} else {
  // echo 'Got to wait a bit younger!';
}

// === say hello base on time of the day
$t = date('H');
// echo $t;

if ($t < 12) {
  // echo 'Good morning!';
} elseif ($t < 18) {
  // echo 'Good afternoon!';
} else {
  // echo 'Good evening!';
}

// === negate
$emptyPost = ['what?'];
$posts = ['Your dam post'];
$withoutEmpty = ['Hmmm! it is not empty'];

if (empty($emptyPost)) {
  // echo 'It is empty';
}


if (!empty($posts)) {
  // echo "The content is: $posts[0]";
}

// === ternary condition
// echo !empty($posts) ? $posts[0] : 'No posts';

// === save in variable
$firstPost = !empty($posts) ? $posts[0] : 'No posts dummer!';
echo $firstPost;
echo "</br>";

$secondPost = empty($emptyPost) ? 'No posts dummer!' : 'Hmmm!!';
echo $secondPost;
echo "</br>";

// === Use double ??
// $thirdPost = $withoutEmpty[0] ?? null;
$thirdPost = $withoutEmpty[0] ?? 'There is no post in here';
echo $thirdPost;
echo "</br>";

// === switch case
$favColor = 'green';

switch ($favColor) {
  case 'red':
    echo "Your favorite color is red </br>";
    break;
  case 'blue':
    echo "Your favorite color is blue </br>";
    break;
  default:
    echo "You do not have favorit color </br>";
    break;
}
