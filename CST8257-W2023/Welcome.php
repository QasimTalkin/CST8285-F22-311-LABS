<?php 
    session_start();
    $errorMessage= "";
    $name = "";
    if (isset($_POST["next"]))
    {
        $name = trim($_POST["name"]);
        if( empty($name) )
        {
            $errorMessage = "Name is required!";
        }
        else
        {
            $_SESSION["name"] = $name;
            header("Location: Step1SelectCPU.php");
            exit();
        }
    }
    else {
        if(isset($_SESSION["name"]))
        {
           $name = $_SESSION["name"];
        }
    }
    include("./common/header.php"); 
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
<h1>Welcome to Build-Your-Dream-PC Store </h1>
<h4>To start, please enter your name</h4>
<br/>
 <form action="Welcome.php" method="POST">
    <div class="row">
        <label class="col-md-1">Name:</label>
        <div class="col-md-3">
            <input type="text" name="name" class="form-control" value="<?php echo $name;?>" /><br/>
        </div>
         <div class="col-md-3 text-danger">
            <?php echo $errorMessage?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-2">
            <input type="submit" name="next" value="Next >" class="btn-primary" />
        </div>
    </div>

</form>
</div>
<?php include('./common/footer.php'); ?>