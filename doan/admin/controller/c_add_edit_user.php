<?php 
include "model/m_add_edit_user.php";
$action="";
$id=0;
if(isset($_GET["act"]))
{	
	$act=$_GET["act"];
	switch ($act)
	{
	case "add":
	$action="index.php?controller=add_edit_user&act=do_add";
	break;
	
	case "do_add":
	$arr=array();
	$arr["username"]=mysql_real_escape_string($_POST["username"]);
	$arr["password"]=md5($_POST["password"]);
	$arr["fullname"]=mysql_real_escape_string($_POST["fullname"]);
	$arr["andress"]=mysql_real_escape_string($_POST["andress"]);
	$arr["phone"]=mysql_real_escape_string($_POST["phone"]);
	$checkusername=checkusername($arr);
	if($checkusername==true)
	{
			do_add($arr);
			echo "<meta http-equiv='refresh' content='0; url=index.php?controller=user'>";
		
	}
	else
	{
		echo "<script language='javascript'> alert('Username đã tồn tại.!!'); </script>";	
	}

	break;
	
	
	case"edit":
	if(isset($_GET["id"]))
	{
		if(is_numeric($_GET["id"]))
		$id=$_GET["id"];
		$arr=getoneuser($id);
		$action="index.php?controller=add_edit_user&act=do_edit&id={$id}";	
	}
	
	break;
	
	case "do_edit":
	if(isset($_GET["id"]))
	{
		if(is_numeric($_GET["id"]))
		$id=$_GET["id"];
		$arr=array();
		$arr["id"]=$id;
		$arr["username"]=mysql_real_escape_string($_POST["username"]);
		$arr["password"]=mysql_real_escape_string($_POST["password"]);// password ở đây là pass người dung nhập;
		$arr["fullname"]=mysql_real_escape_string($_POST["fullname"]);
		$arr["andress"]=mysql_real_escape_string($_POST["andress"]);
		$arr["phone"]=mysql_real_escape_string($_POST["phone"]);
	}
	edituser($arr);
	echo "<meta http-equiv='refresh' content='0; url=index.php?controller=user'>";
	break;
	

	}
}


include "view/v_add_edit_user.php";
?>