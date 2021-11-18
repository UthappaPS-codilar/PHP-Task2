<html>

<head>

    <title>
        Insert Page
    </title>
    <link rel="stylesheet" type="text/css" media="all" href="style.css" />
</head>

<body>
<form action="insertRedirect.php" method="POST">
    <div class="mainBox">
        <div class="box">
			<?php
				if(isset($_GET['status'])){?>
                    <div class="container successfully"><span>Insertion Successful </span></div>
				<?php  }
				if(isset($_GET['statusFail'])){?>
                    <div class="container alert"><span>Insertion Failed Contact Database Admin </span></div>
				<?php  }
			?>
            <div class="container">
                <lable>Book Image<input class="FormControl" type="file" name="image" /> </lable>
            </div>
            <div class="container">
                <lable>Book Name<input class="FormControl" type="text" name="book_name" /> </lable>
            </div>
            <div class="container">
                <lable>Book Author<input class="FormControl" type="text" name="book_author" /> </lable>
            </div>
            <div class="container">
                <lable>Book ID No<input class="FormControl" type="text" name="book_id" /> </lable>
            </div>
            <div class="container">
                <lable>Book Published at<input class="FormControl" type="date" name="published" /> </lable>
            </div>
            <div class="container">
                <input class="FormControl button" type="submit" Value="UPLOAD" />
            </div>

        </div>
    </div>
</form>

</html>