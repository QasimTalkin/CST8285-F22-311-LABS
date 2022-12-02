<?php 
require_once('./connection/database.php');
  db_connect();
 session_start();
 if(isset($_GET['logout'])){
  unset($_SESSION['user_id']);
}
;

$a = 'hi Ho HOO';
print_r(explode(' ', $a, -1));
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Live Demo</title>
    <link rel="stylesheet" href="/styles/styles.css">
  </head>
  <body>
  <header>
      <nav>
        <a href="/">My Logo</a>
        <ul class="navLinks">
          <li><a href="/CST8285-MIDTERM.html">Midterm</a></li>
          <!-- logout button to destroy session -->
          <?php if (isset($_SESSION['user_id'])): ?>
            <li><a href="../toDoList.php">User DashBoard</a></li>
            <li><a href="../index.php?logout=1">Logout</a></li>
          <?php else: ?>
            <li><a href="/login.php">Login</a></li>
            <li><a href="/signup.php"><?php echo isset($login) ? $login : 'Sign Up' ?></a></li>
          <?php endif; ?>
        </ul>
      </nav>
  </header>