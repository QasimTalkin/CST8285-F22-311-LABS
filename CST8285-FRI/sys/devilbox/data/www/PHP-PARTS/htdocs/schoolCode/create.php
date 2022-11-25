<?php

require_once('database.php');
include "headerEm.php";
$db = db_connect();

// Handle form values sent by new.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //make sure we submit the data
  $name = $_POST['name']; // access the form data
  $address = $_POST['address'];
  $salary = $_POST['salary'];
  //prepare your query string
  $sql = "INSERT INTO employees (name, address,salary) VALUES ('$name','$address','$salary')";
  $result = mysqli_query($db, $sql);
  // For INSERT statements, $result is true/false

  $id = mysqli_insert_id($db); //the mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) 
  //redirect to show page with generated id as a parameter
  header("Location: show.php?id=  $id");
} else {
  header("Location:  new.php");
}
