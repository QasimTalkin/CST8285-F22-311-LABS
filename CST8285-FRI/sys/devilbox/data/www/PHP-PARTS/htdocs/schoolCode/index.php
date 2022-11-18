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
    print"$age";
    echo"<br>";
    printf("%.3f",$age);
    echo"<br>";


print "You are " . $age . " years old.\n";
echo"<br>";
print "You are $age years old.\n"; //interpreted
echo"<br>";
print 'You are $age years old.\n';// not interprested




//server information
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
   ?>

</body>

</html>