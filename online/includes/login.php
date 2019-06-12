<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.p
		{
			color:#4080bf;
			padding-left:85%;
			font-size: 20px;
			font-family: cursive;
		}
	</style>
</head>
<body>
</body>

</html>

	<?php
require "header.php";
?>
<main>
<?php

    if(isset($_SESSION['userId']))
    {
     echo '<p class="p"></p>';
    }
    else {
         echo '<p class="p"> You are logged out!</p>';
    }
?>


</main>

<?php
require "footer.php";
?>

</body>
</html>