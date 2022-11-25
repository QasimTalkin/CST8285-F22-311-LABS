<!-- Include 
-http://localhost/vendor/phpmyadmin-5.1.3/index.php?route=/

header -->
<?php 
include './partials/header.php';

$file = fopen('anything.txt', 'w');
fwrite($file, $_POST['name'])
?>

<main>
  <form name="signUpForm" class="signupForm" method="POST" action="userPage.php">
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

