<?php
require_once('./connection/database.php');
session_start();
$db_connection = db_connect();
if (isset($_SESSION['user_id'])) {
  if (isset($_POST['toDoItem'])){
    $task = $_POST['task'];
    $status = $_POST['status'];
    $user_id = $_SESSION['user_id'];
    $sql = "INSERT INTO `to_do_list` (`user_id`, `task`, `status`) VALUES ('$user_id', '$task', '$status')";
    print('QaaAsim');
    $result = mysqli_query($db_connection, $sql);
    print_r($result);
  }
  fetchToDoList($db_connection);
} else {
  loginUser($db_connection);
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
  echo "<table style='width: 80%; text-align: center; margin:20px auto' border='1'>";
  echo "<tr><th>Task #</th><th>Task</th><th>Status</th></tr>";
  foreach ($to_do_list as $row) {
    echo "<tr><td>" . $row[0] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
  }
  echo "</table>";
  ;
  renderAddToDoItemForm();
  include './partials/footer.php';
}

function redirectToSignUp() {
  header("Location: signup.php");
}

function renderAddToDoItemForm() {
  echo '<form name="toDoItemForm" class="userForm" method="POST" action="toDoList.php">
    <input type="text" name="task" placeholder="Title...">
    <input type="text" name="status" placeholder="Status...">
    <button type="submit" name="toDoItem">Add</button>
  </form>';
}
?>