<?php

$host='localhost';
$user='root';
$pass='';
$db='discussion_forum';


$con=mysqli_connect($host,$user,$pass,$db);
$p1=$_POST['psw'];
$p2=$_POST['rpsw'];
if($p1==$p2)
{
$sql="INSERT INTO registration(fname,lname,email,psw) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[psw]')";
$query=mysqli_query($con,$sql);
if($query)
echo  ' <script>
	alert("your data is successfully inserted");
	window.location="index.php";
	
</script>';
else
echo '
<script>
	alert("This email is already registed");
	window.location="index.php#top";
	
</script>';
}else{
	echo '
	<script>
	alert("Password did not match");
	window.location="index.php#top";
	</script>
	';
	
}
?>