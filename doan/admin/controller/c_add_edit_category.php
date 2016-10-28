<?php
include "model/m_add_edit_category.php";
$action="";
$id=0;
if(isset($_GET["act"]))
{	
	$act=$_GET["act"];
	switch ($act)
	{
	case "add":
	$action="index.php?controller=add_edit_category&act=do_add";
	break;
	
	case "do_add":
	$arr=array();
	$arr["nhomsp_name"]=mysql_real_escape_string($_POST["username"]);
	$arr["mota"]=mysql_real_escape_string($_POST["mota"]);
	$checkusername=checkusername($arr);
	if($checkusername==true)
	{
			do_add($arr);
			echo "<meta http-equiv='refresh' content='0; url=index.php?controller=category'>";
		
	}
	else
	{
		echo "<script language='javascript'> alert('Tên nhóm dịch vụ đã tồn tại.!!'); </script>";	
	}

	break;
	
	
	case"edit":
	if(isset($_GET["id"]))
	{
		if(is_numeric($_GET["id"]))
		$id=$_GET["id"];
		$arr=getonecategory($id);
		$action="index.php?controller=add_edit_category&act=do_edit&id={$id}";	
	}
	
	break;
	
	case "do_edit":
	if(isset($_GET["id"]))
	{
		if(is_numeric($_GET["id"]))
		$id=$_GET["id"];
		$arr=array();
		$arr["id"]=$id;
		$arr["nhomsp_name"]=mysql_real_escape_string($_POST["username"]);
		$arr["mota"]=mysql_real_escape_string($_POST["mota"]);// password ở đây là pass người dung nhập;
	}
	edituser($arr);
	echo "<meta http-equiv='refresh' content='0; url=index.php?controller=category'>";
	break;
	

	}
}

include "view/v_add_edit_category.php";

?>