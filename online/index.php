<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.img
		{
			margin-top:40px;
			padding-left:50px;
			border-image: solid-black;
			height: 350px;
			width:450px;
		}
		
			ul
		{
			float:left;
		}
		ul li
		{
			float:left;
			list-style: none;
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
      	echo'
      	';
      }
      else
      {
      	echo '';
      }

      
    
?>


</main>

<?php
require "footer.php";
?>

</body>
</html>