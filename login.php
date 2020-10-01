<?php
session_start();
$host='localhost';
$user='root';
$pass='';
$db='discussion_forum';


$con=mysqli_connect($host,$user,$pass,$db);

$uname=$_POST['uname'];
$pass=$_POST['psw'];
$sql="SELECT email,psw from registration where email='$uname' and psw='$pass'";
$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
if($num==1)
{
	$_SESSION['username']=$uname;
	  
	echo  ' <script>
	alert("Login Successful");
	window.location="index3.php";
	
	</script>';
	
}
else
echo  ' <script>
	alert("Invalid details");
	window.location="index.php";
	
</script>';




?>