<?php
    include("./common/header.php");
?>

<?php

// echo phpinfo();
// build connection to db
$db_connection  = new PDO("mysql:host=localhost;dbname=ac_db", "acAdmin", "1234");

if ($db_connection == True){
  echo "sucess";
} else {
  echo "issue";
}

$query = "SELECT * FROM users";
$execute = $db_connection->query($query);
$data = $execute->fetchAll(PDO::FETCH_ASSOC);

print_r($data);
echo "<div class='row'>";
foreach ($data as $item) {
  echo "

  <div class='col-sm-6'>
      <div class='card p-3 m-2' style='width: 18rem;'>
        <img src='https://picsum.photos/200/300' class='card-img-top' alt='pics'>
        <div class='card-body'>
          <h5 class='card-title'>STUDENT INFO</h5>
        </div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Name $item[name] </li>
          <li class='list-group-item'>email $item[email]</li>
          <li class='list-group-item'>Age $item[age]</li>
        </ul>
      </div>
      </div>
      ";
};
echo "</div>";




























$connection = mysqli_connect('localhost', 'qasim', 'password', 'my_db');
$sql = "SELECT * FROM user";
$results = mysqli_query($connection, $sql);
$users = mysqli_fetch_all($results, MYSQLI_ASSOC);
print "<br/>";
print_r($users);



// $my_pdo = new PDO("mysql:host=localhost;dbname=my_db", "qasim", "password");


// $my_sql_query = "Insert into user(name, email, pass) values('abulG', 'q', 'a')";
// $my_pdo_results = $my_pdo->query($my_sql_query);
// if ($my_pdo_results == true) {
//     echo "Data Inserted";
// } else {
//     echo "Data Not Inserted";
// }
// echo("<br/>");
// print_r($my_db_rows);


// $my_sql_query = "DELETE FROM user WHERE name = 'abulG'";
// $my_pdo_results = $my_pdo->query($my_sql_query);
// if ($my_pdo_results == true) {
//     echo "Data Deleted";
// } else {
//     echo "Data Not Deleted";
// }
// echo("<br/>");


// $my_update_query = "Update user set name = 'Abul' where name = 'Qasim'";
// $my_pdo_results = $my_pdo->query($my_update_query);
// print_r($my_pdo_results);
// echo("<br/>");


// $my_sql_query = "Select * from user";
// $my_pdo_results = $my_pdo->query($my_sql_query);
// $my_db_rows  = $my_pdo_results->fetch(PDO::FETCH_ASSOC)`;
// echo("<br/>");
// print_r($my_db_rows );

?>



<?php

// $my_db_pdo = new PDO("mysql:host=localhost;dbname=my_db", "qasim", "password");
// //fetch and fetch assoc from user table
// $sql = "SELECT * FROM user";
// $result = $my_db_pdo->query($sql);
// $row = $result->fetch(PDO::FETCH_ASSOC);
// echo $row['name'];
// print_r($row);
// while($row = $result->fetch(PDO::FETCH_ASSOC)) {
//     echo $row['name'];
// }

?>
<div class="container">
  <h1>Welcome</h1>
</div>
<?php include('./common/footer.php'); ?>
