<html>

<body>
  <h1> Credit Website </h1>
  <?php
  //if (isset($_GET['Order'])) { // check if we submit the form
  if ($_SERVER['REQUEST_METHOD'] == 'POST') { // check if we submit the form
    $name = $_POST["userid"];
    $ccn  = $_POST["ccard_number"];
    $type = $_POST["creditcard"];

    print "<p> Thank you \"$name\" </p> \n";
    print "<p> Your $type credit card \"$ccn\"
           has been charged $10,000.00!</p> \n";
    print "<p> Thank you! </p> \n";
  } else
    echo "Please fill the form"
  ?>
  <p>
</body>

</html>