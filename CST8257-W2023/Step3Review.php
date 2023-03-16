<?php 
	session_start(); 				
	if(!isset($_SESSION["memory"]))
	{
            header("Location: Step2SelectMemory.php");
            exit();
	}
        
        if (isset($_POST["finish"]))
        {
            header("Location: Step4Finish.php");
            exit();
        }
        else if (isset($_POST["prev"]))
        {
            header("Location: Step2SelectMemory.php");  
            exit();
        }
 include("./common/header.php"); 
 ?>
<div class="container">
    <h1>Welcome <span class="text-primary"><?php echo $_SESSION["name"]; ?></span>!</h1>
    <h4>Please Review you configuration.</h4>
        <span class="text-dark">CPU: </span><?php echo $_SESSION["cpu"] ?>
        <br/>
	<span class="text-dark">Memory: </span><?php echo $_SESSION["memory"] ?> G
    <br/><br/>
    <form method="POST">
        <div class="row form-group">
            <div class="col-md-2"><input class="btn btn-primary" name="prev" type="submit" value="< Prev" /></div>
            <div class="col-md-2"><input class="btn btn-primary" name="finish" type="submit" value="Finish" /></div>
        </div>
    </form>
</div>	
<?php include('./common/footer.php'); ?>