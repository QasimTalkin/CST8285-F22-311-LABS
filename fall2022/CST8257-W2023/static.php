<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stattic PHP</title>
</head>
<body>
  <?php 
    class Math {
      public static $pi = 3.14159;
      public static function to_floor($num) {
        return floor($num);
      }
      
      public static function get_random_of($num){
        return rand(0, $num);
      }
      
      public static $math_type = ["floor", "ceil", "round"];
    }
    
    echo "Exmaple of Public Property <br>";
    print_r(Math::$math_type);
    echo "<br>";
    echo "Example of Static Method <br>";
    echo Math::to_floor(3.5) . "<br>";
    echo Math::get_random_of(10) . "<br>";
    echo "Example of Static Property <br>";
    echo Math::$pi . "<br>";
    
  
  ?>
  
</body>
</html>