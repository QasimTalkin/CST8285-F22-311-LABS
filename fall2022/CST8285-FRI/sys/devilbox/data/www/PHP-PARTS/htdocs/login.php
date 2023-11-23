<?php
require_once('./connection/database.php');
session_start();
//  check if a post request is made with user data if yes add to table and redirect to to do list page else redirect to sign up 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['pwd'])) {
  $db_connection = db_connect();
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pwd')";
  $result = mysqli_query($db_connection, $sql);

  if ($result) {
    header("Location: toDoList.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db_connection);
  }
} else {
  
  include './partials/header.php';

  echo '<main>
  <form name="userForm" class="userForm" method="POST" action="toDoList.php">
    <input type="text" name="name" placeholder="User Name...">
    <input type="password" name="pwd" placeholder="Password...">
    <button type="submit">Login</button>
  </form>
</main>
<link rel="stylesheet" href="./styles/signUp.css">
<script src="./script/signup.js"></script>';
  
  include './partials/footer.php';  
}
?>