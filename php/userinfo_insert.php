
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
error_reporting(0);
//获取莫态框表单数据
$userId = $_POST[userId];
$userName = $_POST[userName];
$userSex = $_POST[userSex];
$userPhone = $_POST[userPhone];
$userEmail = $_POST[userEmail];
$userShow = $_POST[userShow];
if($userId != null){
	include 'connection.php';
	$sql = "insert into ".$table_name." (user_id,user_name,user_sex,user_phone,user_email,user_show)  values('$userId','$userName','$userSex','$userPhone','$userEmail','$userShow')";

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