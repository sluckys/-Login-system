<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form name="form1" action="" method="post">
  First name:<br>
  <input type="text" name="firstname"id=n><br>
  Last name:<br>
  <input type="text" name="lastname"id=n2><br>
  Age:<br>
  <input type="text" name="lastname" id=a><br>
   <input type="button" name="b" value="submit" onclick="'aa();">
</form>
<script type="text/javascript">
	function aa()
	{
		var xmlhttp;
		xmlhttp=new XMLHttpRequest();
		xmlhttp.open("GET","insert.php?name="+document.getElementId("n").value+"$name2="+document.getElementId("n2").value+"$age="+document.getElementId("a").value,false);
		xmlhttp.send(null);
	}
</script>
</body>
</html>