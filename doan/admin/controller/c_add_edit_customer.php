<?php
include "model/m_add_edit_customer.php";
$action="";
$id=0;
if(isset($_GET["act"]))
{	
	$act=$_GET["act"];
	switch ($act)
	{
	case "add":
	$action="index.php?controller=add_edit_customer&act=do_add";
	break;
	
	case "do_add":
	$arr=array();
	$arr["hoten"]=mysql_real_escape_string($_POST["hoten"]);
	$arr["password"]=md5($_POST["password"]);
	$arr["diachi"]=mysql_real_escape_string($_POST["diachi"]);
	$arr["sdt"]=mysql_real_escape_string($_POST["sdt"]);
	$arr["email"]=mysql_real_escape_string($_POST["email"]);
    do_add($arr);
	echo "<meta http-equiv='refresh' content='0; url=index.php?controller=customer'>";
	break;
	
	
	case"edit":
	if(isset($_GET["id"]))
	{
		if(is_numeric($_GET["id"]))
		$id=$_GET["id"];
		$arr=getonecustomer($id);
		$action="index.php?controller=add_edit_customer&act=do_edit&id={$id}";	
	}
	
	break;
	
	case "do_edit":
	if(isset($_GET["id"]))
	{
		if(is_numeric($_GET["id"]))
		$id=$_GET["id"];
		$arr=array();
		$arr["id"]=$id;
		$arr["hoten"]=mysql_real_escape_string($_POST["hoten"]);
	    $arr["password"]=md5($_POST["password"]);
	    $arr["diachi"]=mysql_real_escape_string($_POST["diachi"]);
	    $arr["sdt"]=mysql_real_escape_string($_POST["sdt"]);
	    $arr["email"]=mysql_real_escape_string($_POST["email"]);
	}
	edituser($arr);
	echo "<meta http-equiv='refresh' content='0; url=index.php?controller=customer'>";
	break;
	

	}
}


include "view/v_add_edit_customer.php";

?>