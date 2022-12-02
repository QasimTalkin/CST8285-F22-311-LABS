<?php 
  require_once('./connection/database.php');
    $db_connection = db_connect();
    $create_user_if_not_exists = "CREATE TABLE IF NOT EXISTS `users` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `name` varchar(255) NOT NULL,
      `password` varchar(255) NOT NULL,
      `email` varchar(255) NOT NULL,
      PRIMARY KEY (`id`)
    )";
  
    $create_to_do_list_query = "CREATE TABLE IF NOT EXISTS `to_do_list` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `user_id` int(11) NOT NULL,
      `task` varchar(255) NOT NULL,
      `status` varchar(255) NOT NULL,
      PRIMARY KEY (`id`),
      FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
    )";
    
    $create_user_if_not_exists_result = mysqli_query($db_connection, $create_user_if_not_exists);
    $create_to_do_list_result = mysqli_query($db_connection, $create_to_do_list_query);
 

  // check if table users exist

?>
<?php 
include './partials/header.php';
?>
<main>
  <!-- <h2> <?php 
  // set cookie welcome and out put it
  // if (isset($_COOKIE['welcome'])) {
  //   echo $_COOKIE['welcome'];
  // } else {
  //   echo 'Welcome to';
  // }
  
  ?> </h2> -->
  <form name="userForm" class="userForm" method="POST" action="login.php" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Full name...">
    <input type="text" name="email" placeholder="Email...">
    <input type="password" name="pwd" placeholder="Password...">
    <button type="submit">Sign up</button>
  </form>
</main>
<link rel="stylesheet" href="./styles/signUp.css">
<script src="./script/signup.js"></script>

<?php
  include './partials/footer.php';
?>
