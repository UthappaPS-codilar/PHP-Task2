<?php
	
	require_once __DIR__ . '/../Helpers/include.php';
	//require_once __DIR__ . '/Display.php';
	$display = new Display();
	$data = $display->displayBook();
	$i=1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Library </title>
    <link rel="stylesheet" type="text/css" media="all" href="style.css" />
</head>

<body>
<form action="pinForm.php" method="POST">
    <div class="mainBox">
        <div class="box">
            <div class="container"> <input class="FormControl button" type="submit" value="ADD BOOKS"></div>
        </div>
    </div>
</form>
<div class="mainBox">
    <div class="box">
		
		<?php  foreach ($data as $row):     if($i==1){
			$classes="flex1";
			$i--;}
		else{
			$classes="flex";
			$i++;
			
		} ?>
        <div class="<?php echo $classes; ?>">
            <!--s <td>-->
            <div class="container"><span calss="align"><img src="./image/<?php echo $row['image']; ?> " /></span>
                <!--</td>
	<td>-->
                <div><b><span calss="align">Book ID : </span></b><span>
                            <?php echo $row['book_id'] ?>
                        </span> </div>
                <div><b><span calss="align">Book Name : </span></b><span>
                            <?php echo $row['book_name'] ?>
                        </span> </div>
                <div><b><span calss="align">Author : </span></b><span>
                            <?php echo $row['book_author'] ?>
                        </span> </div>
                <div><b><span calss="align">Published Date : </span></b><span>
                            <?php echo $row['book_published'] ?>
                        </span> </div>
            </div>
            <!-- <tr>
	 </td>
  
	 

 </tr>-->
			
			<?php endforeach; ?>
        </div>
    </div>
</body>

</html>