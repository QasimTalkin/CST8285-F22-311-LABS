<?php
require_once('./connection/database.php');
session_start();
$db_connection = db_connect();
if ($_SESSION['user_id']) {
  fetchToDoList($db_connection);
} else {
  print_r($_SESSION);
}
function loginUser($db_connection){
  if (!empty($_POST['name']) && !empty($_POST['pwd'])) {

    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$pwd'";
    
    $result = mysqli_query($db_connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      $user_id = mysqli_fetch_assoc($result)['id'];
      $_SESSION['user_id'] = $user_id;  
      fetchToDoList($db_connection);
    } else {
      redirectToSignUp();
    }
  } else {
    redirectToSignUp();
  }
}

function fetchToDoList($db_connection) {

  $user_id = $_SESSION['user_id'];
  $get_to_do_list_query = "SELECT * FROM `to_do_list` WHERE `user_id` = '$user_id'";
  $get_to_do_list_result = mysqli_query($db_connection, $get_to_do_list_query);
  $to_do_list = mysqli_fetch_all($get_to_do_list_result);
  renderToDoList($to_do_list);
}

function renderToDoList($to_do_list) {
  include './partials/header.php';
  while ($to_do_item = array_shift($to_do_list)) {
    echo '<div class="toDoItem">
      <div class="toDoItem__title">
        <h3>' . $to_do_item[1] . '</h3>
      </div>
      <div class="toDoItem__description">
        <p>' . $to_do_item[2] . '</p>
      </div>
      <div class="toDoItem__date">
        <p>' . $to_do_item[3] . '</p>
      </div>
      <div class="toDoItem__status">
        <p>' . $to_do_item[4] . '</p>
      </div>
    </div>';
  };

  echo "<h2> Render Done</h2>";
  renderAddToDoItemForm();
  include './partials/footer.php';
}

function redirectToSignUp() {
  header("Location: signup.php");
}

function renderAddToDoItemForm() {
  echo '<form name="toDoItemForm" class="userForm" method="POST" action="toDoList.php">
    <input type="text" name="title" placeholder="Title...">
    <input type="text" name="description" placeholder="Description...">
    <input type="date" name="date" placeholder="Date...">
    <input type="text" name="status" placeholder="Status...">
    <button type="submit" name="toDoItem">Add</button>
  </form>';
}
?>