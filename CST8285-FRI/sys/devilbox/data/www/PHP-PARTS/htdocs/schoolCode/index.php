<?php 
  include "./../partials/header.php";
  $name = 'abul qasim';
  $isNotSleepy = false;
  $my_number = 123.33;
  define('class', 'Web Dev');

  printValue($name);
  
  echo $name;
 

  
  echo "Hello My Name is $name <br>" .  gettype($my_number) . " " .  $my_number;
  
  $myArray = array($name, $isNotSleepy, 'a', $my_number);
  
  
  
  print_r($myArray);
  
  print(asort($myArray));
  
  echo $myArray[0];
  echo '<ul>';
  foreach ($myArray as $item) {
    $item = $item ? strtoupper($item) : "SAD";
    echo "<li> <h2>$item </h2> </li>";
  };
  echo '</ul>';
  
  function printValue(&$myValues){
    $myValues =  strtoupper($myValues);
    
    echo($myValues);
  };
  

  
?>
<main>
 <table>
  <th> SERVER info</th>
   <?php
     foreach ($_SERVER as $key => $value) {
    
      echo "<tr> <td>$key </td>  <td>$value </td> </tr>";
    };
   ?>
 </table>

</main>

<?php 
  include "./../partials/footer.php";
?>