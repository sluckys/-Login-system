<?php

 $servername = "localhost";
 $dBUsername = "root";
 $dBPassword = "";
 $dBName = "lucky";

 $conn = mysqli_connect
 ($servername,$dBUsername,$dBPassword,$dBName);

 if($conn)
 {
 	echo"";

 }else
 {
     die("Connection failed: ".mysqli_connect_error());
 }
