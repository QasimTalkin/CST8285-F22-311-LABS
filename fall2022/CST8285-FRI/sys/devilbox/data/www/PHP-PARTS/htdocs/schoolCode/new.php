<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="style.css" />
</head>
<body>
  
<?php include 'headerEm.php'; ?>

<div id="content">

  <a class="back-link" href="<?php echo 'index.php'; ?>"> Back to List</a>

  <div class="New Employee">
    <h1>Create New Employee</h1>

    <form action='create.php' method="POST">
    
      <dl>
        <dt>Employee Name</dt>
        <dd><input type="text" name="name" /></dd>
      </dl>
      <dl>
        <dt>Address</dt>
        <dd><input type="text" name="address"  /></dd>
          
      </dl>
      <dl>
        <dt>Employee Salary</dt>
        <dd><input type="text" name="salary"  /></dd>
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Employee" />
      </div>
    </form>


  </div>

</div>

<?php include 'footerEm.php'; ?>
