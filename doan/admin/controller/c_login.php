<?php

include "model/m_login.php";
if(isset($_POST["btnsubmit"]))
{
	// hàm mysql_real_escape_string để xử lí các kí tự đặc biệt
	$username=mysql_real_escape_string($_POST["username"]);
	//hàm md5 chuyển pass từ dạng thường sang dạng md5
	$password=md5($_POST["password"]);
	if(checklogin($username,$password)==true)
	{
		$_SESSION["loged"]=true;
		header("location:index.php");	
		$_SESSION["username"]=$username;
		
	}
}

include "view/v_login.php";
?>