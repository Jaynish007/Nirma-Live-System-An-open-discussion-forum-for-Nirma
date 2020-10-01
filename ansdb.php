<?php
session_start();
$host='localhost';
$user='root';
$pass='';
$db='discussion_forum';
$u_name=$_SESSION['username'];
$con=mysqli_connect($host,$user,$pass,$db);
$date=date("Y/m/d");
date_default_timezone_set('Asia/Kolkata');
$time=date("h:i:s");
$iid = $_SESSION['q_id'];
$sql="INSERT INTO answer(q_id,ans,email,date,time) VALUES ('$iid','$_POST[description]','$u_name','$date','$time')";
$query=mysqli_query($con,$sql);
if($query)
{
	echo ' <script>
		alert("Answer successfully posted");
		window.location="index3.php";
		</script>';
}else
	echo 'NOT';
?>