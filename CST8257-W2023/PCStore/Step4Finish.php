<?php 
    session_start(); 	// retrieve PHP session!
    if (!isset($_SESSION["name"]))
    {
            header("Location: Welcome.php");
            exit();
    }

    include("./common/header.php"); 
?>
<div class="container">	
	<h1>Thank you, <span class="text-primary"><?php echo $_SESSION["name"] ?></span>, for shopping with us today!</h1>
     
	<?php session_destroy();?>
</div>	
<?php include('./common/footer.php'); ?>