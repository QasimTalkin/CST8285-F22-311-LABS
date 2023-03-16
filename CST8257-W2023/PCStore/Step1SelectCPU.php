<?php 
    session_start(); 	
    if(!isset($_SESSION["name"]))
    {
        header("Location: Welcome.php");
        exit( );
    }
    $name = $_SESSION["name"];

    $i3check = "";
    $i5check = "";
    $i7check = "";
    if(isset($_SESSION["cpu"]))
    {
        if($_SESSION["cpu"] === "Core i3 E300")
        {
                $i3check = "checked";
        }
        elseif($_SESSION["cpu"] === "Core i5 M500")
        {
                $i5check = "checked";
        }
        elseif($_SESSION["cpu"] === "Core i7 P700")
        {
                $i7check = "checked";
        }
    }
    
    $errorMessage="";
    if (isset($_POST["next"]))
    {
        if (isset($_POST["cpu"]))
        {
            $_SESSION["cpu"] = $_POST["cpu"];
            header("Location: Step2SelectMemory.php");
        }
        else
        {
            $errorMessage = "You must select a CPU type!";
        }
    }
    else if (isset($_POST["prev"]))
    {
        if (isset($_POST["cpu"]))
        {
            $_SESSION["cpu"] = $_POST["cpu"];
        }
        header("Location: Welcome.php");
    }
?>

<?php include("./common/header.php"); ?>
<div class="container">
    <h1>Welcome <span class="text-primary"><?php echo $name; ?></span>!</h1>
    <h4>Please select a CPU type. <span class="text-danger"><?php echo $errorMessage;?></span></h4>
<br/>
    <form action="Step1SelectCPU.php" method="POST">
        <div class="row form-group">
                <label class="form-label col-md-3">Core i3 E300: ($250)</label>
                <div class="col-md-1">
                    <input type="radio" name="cpu" value="Core i3 E300" <?php echo $i3check; ?> />
                </div>
        </div>
        <div class="row form-group">
                <label class="form-label col-md-3">Core i5 M500: ($780)</label>
                <div class="col-md-1">
                    <input type="radio" name="cpu" value="Core i5 M500" <?php echo $i5check; ?> />
                </div>
        </div>
        <div class="row form-group">
                <label class="form-label col-md-3">Core i7 P700: ($1000)</label>
                <div class="col-md-1">
                    <input type="radio" name="cpu" value="Core i7 P700" <?php echo $i7check; ?> />
                </div>
        </div>  
        <br/>
        <div class="row form-group">
            <div class="col-md-offset-1 col-md-2"><input class="btn btn-primary" name="prev" type="submit" value="< Prev" /></div>
            <div class="col-md-offset-1 col-md-2"><input class="btn btn-primary" name="next" type="submit" value="Next >" /></div>
        </div>
    </form>
</div>
<?php include('./common/footer.php'); ?>