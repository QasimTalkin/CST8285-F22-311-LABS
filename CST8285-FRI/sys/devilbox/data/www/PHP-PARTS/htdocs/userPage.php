<!-- Include 
-http://localhost/vendor/phpmyadmin-5.1.3/index.php?route=/

header -->





<?php 
include './partials/header.php';
?>


<?php 





if (!empty($_POST['name']) && !empty($_POST['pwd']) && !empty($_POST['email'])){
  $user_name = $_POST['name'];
  $password = $_POST['pwd'];
  $email = $_POST['email'];
  $db_connection = mysqli_connect('127.0.0.1', 'root', '', 'to_really_do_db', 3306 );

  if($db_connection) {
    
    $add_user_query = "INSERT INTO USER (name, password, email) values ('$user_name', '$password', '$email')";
    
    $result = mysqli_query($db_connection,$add_user_query);
    
    $to_do_list = "SELECT * from to_do_list";
    
    $result = mysqli_query($db_connection,$to_do_list);
  

    
    
  } else {
    echo ':.(';
  }
  
  
  
  
  echo "<h1> Welcome $user_name</h1>";
  $file = fopen('./schoolCode/newfile.txt', 'r+');
  $file_content = file_get_contents('./schoolCode/newfile.txt');
  
  echo "<h2>using file Content </h2>";
  echo $file_content;
  echo "<ol> ";
  while (!feof($file)){
    echo "<li>" . fgets($file) . "</li>";
  };
  echo "</ol>";






} 





else {
  echo 'Not Welcome';
};

?>


<?php 
include './partials/footer.php';
?>