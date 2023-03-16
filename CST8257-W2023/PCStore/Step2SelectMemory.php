<?php 
    session_start();
   // retrieve PHP session!
    if (!isset($_SESSION["cpu"]))
    {
            header("Location: Step1SelectCPU.php");
            exit( );
    }
    
    $m4selected = "";
    $m8selected = "";
    $m16selected = "";	
    if (isset($_SESSION["memory"]))
    {
            if ($_SESSION["memory"] == "4")
            {
                    $m4selected = "selected";
            }
            elseif ($_SESSION["memory"] == "8")
            {
                    $m8selected = "selected";
            }
            elseif ($_SESSION["memory"] == "16")
            {
                    $m16selected = "selected";
            }
    }
    
    $errorMessage="";
    if (isset($_POST["next"]))
    {
        if (isset($_POST["memory"]) && $_POST["memory"] !== "-1")
        {
            $_SESSION["memory"] = $_POST["memory"];
            header("Location: Step3Review.php");
        }
        else
        {
            $errorMessage = "You must select the amount of RAM!";
        }
    }
    else if (isset($_POST["prev"]))
    {
        if (isset($_POST["memory"]))
        {
            $_SESSION["memory"] = $_POST["memory"];
        }
        header("Location: Step1SelectCPU.php");
    }

include("./common/header.php"); ?>
<div class="container">
    <h1>Welcome <span class="text-primary"><?php echo $_SESSION["name"]; ?></span>!</h1>
    <h4>Please select the size of RAM. <span class="text-danger"><?php echo $errorMessage;?></span></h4>
    <br/>
    <form action="Step2SelectMemory.php" method="POST">
        <div class="row form-group">
            <div class="col-md-4">
                <select name="memory" class="form-control">
                    <option value="-1">Select one ...</option>
                    <option value="4" <?php echo $m4selected;?>>4G ($100)</option>
                    <option value="8" <?php echo $m8selected;?>>8G ($200)</option>
                    <option value="16" <?php echo $m16selected;?>>16G ($300)</option>
                </select>
            </div>
        </div>
        <br/>
        <div class="row form-group">
            <div class="col-md-2"><input class="btn btn-primary" name="prev" type="submit" value="< Prev" /></div>
            <div class="col-md-2"><input class="btn btn-primary" name="next" type="submit" value="Next >" /></div>
        </div>
    </form>
</div>	
<?php include('./common/footer.php'); ?>