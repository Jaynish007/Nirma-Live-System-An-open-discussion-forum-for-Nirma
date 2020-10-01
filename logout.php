<?php
	session_start();
	session_unset();
	echo  ' <script>
	alert("Logout Successful");
	window.location="index.php";
	
	</script>';
?>