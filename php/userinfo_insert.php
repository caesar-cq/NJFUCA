
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
error_reporting(0);
//echo $_POST["stuffId"]; 
$userId = $_POST[userId];
$userName = $_POST[userName];
$userSex = $_POST[userSex];
$userPhone = $_POST[userPhone];
$userEmail = $_POST[userEmail];

if($userId != null){
	include 'connection.php';
	$sql = "insert into ".$table_name." (user_id,user_name,user_sex,user_phone,user_email)  values('$userId','$userName','$userSex','$userPhone','$userEmail')";

	if (!mysql_query($sql))
	{
		die('Error: ' . mysql_error());
	}
	echo "Success！";

	//关闭连接
	mysql_close($con);
} 
?>
<script language='javascript'>document.location = '../index.html'</script>
<!-- <a href="../index.html">back</a> -->