<?php session_start()?>
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
          <li><a href="/signup.php"><?php echo isset($login) ? $login : 'Sign Up' ?></a></li>
          <li> <a href="/login.php"> login </a></li>
          <?php
          echo isset($_SESSION['user_id']) ? 'session set': 'Sign Up' ?>
        </ul>
      </nav>
  </header>