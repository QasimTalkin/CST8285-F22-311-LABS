<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>INTRODUCTION TO PHP</title>
</head>

<body>
  <p>
    Here's the output of the PHP script:
  </p>
  
  <h1> <?php print "Output from PHP"; ?> </h1>
  <p> This is a simple example of PHP </p>
  <p> The square root of 5 is <?php print sqrt(5); ?> </p>

  <!-- constant example -->

  <p> <?php define("PI", "6789");
      echo "This is a constant" ."  ".PI;
      ?>
  </p>
  <?php
  $str1 = "<div>What does PHP stand for?</div>";
  
  echo "<h1>display the type of variable</h1>";
  var_dump($str1); // display the varable type
  echo "<br>";
  echo "<br>";
  ?>

<?php

  echo "<h1>print element of the array</h1>";

  $fruits = array('Banana ', 'Grapes', 'Apple',); // declare an array
  print_r($fruits); // outputs the contents of the array as key/value pairs


  echo "<br>";

  echo "<h1>sort arrays in ascending order</h1>";
  //sort arrays in ascending order
  sort($fruits);
  print_r($fruits);
  echo "<br>";
  echo "<br>";
  $fruits = array('Banana ', 'Grapes', 'Apple','Mango');
  echo "<h1>a correct way to sort arrays in ascending order</h1>";
  asort($fruits);
  print_r($fruits);

  echo "<br>";
  echo "<br>";
  echo "<h1>sort arrays in descending order</h1>";
  rsort($fruits);  //sort arrays in descending order
  print_r($fruits);
  echo "<br>";
  echo "<br>";
  $fruits = array('Mango','Banana ', 'Grapes', 'Apple');
  echo "<h1>sort associative arrays in ascending order, according to the key</h1>";
  ksort($fruits);   //sort associative arrays in ascending order, according to the key
  print_r($fruits);

  echo "<br>";
  echo "<br>";
  echo "<h1>Sort associative arrays in descending order, according to the value</h1>";
  $team = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  arsort($team);   // sort associative arrays in descending order, according to the value
  print_r($team);
  echo "<br>";
  echo "<h1>loop through the array</h1>";
  $colors = ['red', 'green', 'blue']; //loop through the array

  foreach ($colors as $color) {
    echo $color . "<br>";
  }

  ?>
</body>

</html>