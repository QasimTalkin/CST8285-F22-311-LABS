<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="utf‐8">
    <title>My Fist Web Page</title>
</head>

<body>
 <p> This is a first PHP example </p>
    <?php 
    echo "<p>Hello World</p>", "CST8285"; 
    echo"<br>";
    $age = 16;
    print"$age
    <br>
    sadasd
    ";
    echo"<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";
    echo"<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";
    printf("%.3f",$age);
    echo"<br>";


print "You are " . $age . " years old.\n";
echo"<br>";
print "<h1> You are $age years old. </h1>\n"; //interpreted
echo"<br>";
print 'You are $age years old.\n';// not interprested

echo       "<table border='1'>       <th colspan='2'>Server Information</th>";

foreach ($_SERVER as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
   ?>


<h2> AnomyFun </h2>



<?php
$names = array( 'Joe', 'Erin', 'Teresa', 'Louis' );
usort( $names, function($a, $b) { //callback function
    return $a[1] <=> $b[1];
});
?>

<pre>
    <?php print_r( $names ); ?>
</pre>

<h2> Exploddemo2</h2>
<?php
	
	$path= getcwd();
	echo $path. "<br>";
	if (file_exists("./data/file1.txt")){
		echo "true";
		echo "<br>";
	}
	else{
		echo "file not exist";
		echo "<br>";
	}
	
	// create a file simple_php_poem.txt Read from file and print to screen and write to new file txt new_php_poem.txt
  // create a file simple_php_poem.txt
	error_reporting(E_ALL);
  $poemFile = fopen("./data/simple_php_poem.txt", "w") or die("<h1> Unable to open file! </h1>");
  // Write to file
  fwrite($poemFile, "This is a simple poem\n PHP stands for Hypertext Preprocessor\n PHP is a server side scripting language\n PHP is fun and easy to learn\n");
  // create a file simple_php_poem.txt
  fclose($poemFile);
  // Read from file and print to screen
  $poemFile = fopen("./data/simple_php_poem.txt", "r") or die("<h1> Unable to open file! </h1>");
  while(!feof($poemFile)) {
    echo fgets($poemFile) . "<br>";
  }
	
	#echo file_get_contents("./data/file1.txt");
	$file_content = file_get_contents("./data/file1.txt");
	$greetings = explode("\n", $file_content); // array
	#echo $greetings; // echo needs string - error
	print_r($greetings);
	foreach($greetings as $greeting){
		echo("<p>");
		$words = explode(" ", $greeting);

		print_r($greeting."<br>");
		foreach($words as $word){
			
			echo($word."<br>"); //writin to flile
			file_put_contents("newfile.txt", $word." ",FILE_APPEND);
		}
		echo("</p>");
		
	  }
?>

<h2> FunctionDemo </h2>
<?php
echo" global variables";
echo "<br>";
$x = 5;
$y = 20;
function fun()
{
    global $x, $y;
    $y = $x + $y;
}
fun();
echo $y;
echo "<br>";
echo "<br>";
echo "Another way to access global variable";
echo "<br>";
function fun2()
{
    $y = $GLOBALS['x'] + $GLOBALS['y'];
}
fun2();
echo $y;

echo "<br>";
echo "<br>";
//pass by reference vs pass by value
echo "pass by value";
echo "<br>";
function test($n)
{ //value
    $n = $n + 10;
}

$m = 5;
test($m);
echo $m;
echo "<br>";

echo "<br>";
echo "pass by reference";
echo "<br>";
function test1(&$n)
{ //reference
    $n = $n + 10;
}
$m = 5;
test1($m);
echo $m;
echo "<br>";
echo "<br>";


//defualt parameters
echo "default parameters";
echo "<br>";
echo "<br>";
function add($n1 = 10, $n2 = 10)
{
    $n3 = $n1 + $n2;
    echo "Addition is: $n3<br/>";
}
add();
add(20);
add(40, 40);
echo "<br>";
echo "<br>";

// declare(strict_types=1);
//scalar type function
echo "scalar type function";
echo "<br>";
function addtwo($first_value, $second_value): int
{
    $result = $first_value + $second_value;
    return $result;
}
print addtwo(12.6, 14.9);

echo "<br>";

// example union function
echo "union function";
echo "<br>";
function double(int|float|null $a)
{
    return $a * 2;
}

echo double(true);
echo "<br>";
echo "<br>";
// example of default parameters
echo "another example of default parameters";
function math($a, $b = 2, $op = 'multiply')
{
    if ('add' == $op) {
        return $a + $b;
    } else if ('sub' == $op) {
        return $a - $b;
    } else if ('divide' == $op) {
        return $a / $b;
    }

    return $a * $b;
}

echo math(12, op: 'add', b: 12);
?>


<h2> var Array Demo</h2>
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