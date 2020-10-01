<?php
session_start();
$host='localhost';
$user='root';
$pass='';
$db='discussion_forum';
$u_name=$_SESSION['username'];
$con=mysqli_connect($host,$user,$pass,$db);
$q_tag=$_POST['tag']; 
$q1_tag=implode($q_tag);
$date=date("Y/m/d");
date_default_timezone_set('Asia/Kolkata');
$time=date("h:i:s");
$sql="INSERT INTO ask_question(email,question,description,date,time) VALUES ('$u_name','$_POST[question]','$_POST[description]','$date','$time')";
$query=mysqli_query($con,$sql);
$query="SELECT * FROM ask_question ORDER BY q_id DESC LIMIT 1";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
$var_id=$result['q_id'];
$temp="";
for($i=0;$i<strlen($q1_tag);$i++)
{	
	if($q1_tag[$i]=='#')
	{
		$sql2="INSERT INTO q_tag(q_id,tag) VALUES ('$var_id','$temp')";
		$query2=mysqli_query($con,$sql2);
		$temp="";
		
	}else
	{
		 $temp=$temp.$q1_tag[$i];
	}
}
echo ' <script>
	alert("Question successfully posted");
	window.location="index3.php";
	
	</script>';
?>