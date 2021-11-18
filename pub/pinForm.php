<!DOCTYPE html>
<html lang="en">
<head>

    <title>Title</title>
    <link rel="stylesheet" type="text/css" media="all" href="style.css" />
</head>
<body>


<form action="ValidateRedirect.php" method="POST">
    <div class="headingsStyle"> <h1>Authentication</h1> </div>
    <div class="mainBox">
        <div class="box">
            <?php
                if(isset($_GET['flag'])){?>
                
             
            <div class="container alert"> Please enter correct access code </div>
                <?php  }
            ?>
            <div class="container"><label>Enter the PIN to Access<input type="text" name="PIN" class="FormControl" />
                </label> </div>
          <div class="container"><input type="submit" Value="ACCESS" class="FormControl button"/></div>
    </div>
    
    </div>

</form>

</body>
</html>