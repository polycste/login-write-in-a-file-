<?php
	
	session_start();
	if(!isset($_SESSION['username'])){
		if(!isset($_COOKIE['username'])){			
			header ("Location: a.php");
		}		
	}

?>
<html>
	<body>
	
	<h2>Private </h2>
	<p>my name is poly.my name is poly.my name is poly.my name is poly.my name is poly.my name is poly.
	my name is poly.my name is poly.my name is poly.my name is poly.my name is poly.my name is poly.my name is poly
	my name is poly.my name is poly.my name is poly.my name is poly.my name is poly.my name is poly.my name is poly</p>
		<p><a href="logout.php">log out</a></p>
	</body>
</html>