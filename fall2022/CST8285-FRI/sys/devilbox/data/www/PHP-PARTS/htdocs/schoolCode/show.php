<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <?php
  //conect to the datbase
  
  require_once('database.php');
  include "headerEm.php";
  $db = db_connect();
  //access URL parameter

  $id = $_GET['id'];

  //prepare your query
  $sql = "SELECT * FROM employees WHERE id= '$id' ";

  $result_set = mysqli_query($db, $sql);

  $result = mysqli_fetch_assoc($result_set);

  ?>
  <!-- display the employee data -->
  <div id="content">

    <a class="back-link" href="index.php"> Back to List</a>

    <div class="page show">

      <h1> <?php echo $result['name']; ?></h1>

      <div class="attributes">
        <dl>
          <dt>Employee Name</dt>
          <dd><?php echo $result['name']; ?></dd>
        </dl>
        <dl>
          <dt>Employee address</dt>
          <dd><?php echo $result['address']; ?></dd>
        </dl>
        <dl>
          <dt>Employee salary</dt>
          <dd><?php echo $result['salary']; ?></dd>
        </dl>
        <dl>

      </div>


    </div>

  </div>

  <?php include 'footerEm.php'; ?>
</body>

</html>