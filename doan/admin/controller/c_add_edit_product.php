<?php
include "model/m_add_edit_product.php";
$get_category=get_category();
$act="";
$action="";
$nhomsp="";
$id=0;
if(isset($_GET["act"]))
{
	$act=$_GET["act"];
	switch ($act)
	{
		case "add":
		$action="index.php?controller=add_edit_product&act=do_add";
		break;	
		
		case "do_add":
		$time=time();
		if(isset($_POST["btn_add_edit_product"]))
		{
			$arr=array();
			$arr["name"]=mysql_real_escape_string($_POST["sp_name"]);
			$arr["mota"]=mysql_real_escape_string($_POST["sp_description"]);
			$arr["price"]=mysql_real_escape_string($_POST["sp_price"]);
			$arr["nhomsp"]=mysql_real_escape_string($_POST["danhmuc"]);
			$arr["img"]=$time."_".$_FILES["f"]["name"];
			if(isset($_POST["sp_hot"]))
			{
				$arr["sp_hot"]=1;	
			}
			else
			{
				$arr["sp_hot"]=0;	
			}
		}
		move_uploaded_file($_FILES["f"]["tmp_name"],"img/".$time."_".$_FILES["f"]["name"]);
		add_product($arr);
		//print_r($arr);
		echo "<meta http-equiv='refresh' content='0; url=index.php?controller=product'>";
		break;
		
		
		case "edit":
		if(isset($_GET["id"]))
		{	
			if(is_numeric($_GET["id"]))
			{
			$id=$_GET["id"];
			$action="index.php?controller=add_edit_product&act=do_edit";
			
			}
			$get_one_product=get_one_product($id);
		}
		break;
		
		case "do_edit":
		$time=time();
		if(isset($_POST["btn_add_edit_product"]))
		{
			$arr=array();
			$arr["name"]=$_POST["sp_name"];
			$arr["mota"]=$_POST["sp_description"];
			$arr["price"]=$_POST["sp_price"];
			$arr["nhomsp"]=$_POST["danhmuc"];
			$arr["img"]="";
			$arr["id"]=$_POST["sp_id"];
			//$arr["id"]=
			if(isset($_FILES["f"]))
			{
				if($_FILES["f"]["name"]!="")
				{
					$arr["img"]=$time."_".$_FILES["f"]["name"];	
					move_uploaded_file($_FILES["f"]["tmp_name"],"img/".$time."_".$_FILES["f"]["name"]);
				}
			}
			if(isset($_POST["sp_hot"]))
			{
				$arr["sp_hot"]=1;
			}
			else
			{
				$arr["sp_hot"]=0;
			}
		}
		edit_product($arr);
		print_r($arr);
		echo "<meta http-equiv='refresh' content='0; url=index.php?controller=product'>";
		break;
	}	
}
include "view/v_add_edit_product.php";
?>
