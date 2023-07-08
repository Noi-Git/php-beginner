<?php
// echo "hello";

// print_r([1, 2, 3]);
// var_dump('hello');
// var_dump(true);

// var_export('Hi there!');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php echo "First php"; ?>
  <h1><?php echo "This is with h1 tag"; ?></h1>
  <p><?= 'short hand: use = sign then you do not need "php echo"'; ?></p>

  <h2>Data Types</h2>
  <?php include 'data-type.php'; ?>

  <h2>Array</h2>
  <?php include 'arrays.php'; ?>

</body>

</html>