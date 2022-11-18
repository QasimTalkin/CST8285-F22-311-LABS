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
