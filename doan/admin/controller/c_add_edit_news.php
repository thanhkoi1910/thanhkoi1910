<?php
include "model/m_add_edit_news.php";
$act="";
$action="";
$id=0;
if(isset($_GET["act"]))
{
	$act=$_GET["act"];
	switch ($act)
	{
		case "add":
		$action="index.php?controller=add_edit_news&act=do_add";	
		break;	
		
		case "do_add":
		$time=time();
		$arr=array();
		$arr["tieude"]=mysql_real_escape_string($_POST["tieude"]);
		$arr["tomtat"]=mysql_real_escape_string($_POST["tomtat"]);
		$arr["noidung"]=mysql_real_escape_string($_POST["noidung"]);
		$arr["hinhanh"]=$time."_".mysql_real_escape_string($_FILES["f"]["name"]);
		move_uploaded_file($_FILES["f"]["tmp_name"],"../img/".$time."_".$_FILES["f"]["name"]);
		if(isset($_POST["news_hot"]))
		{
			$arr["news_hot"]=1;
		}
		else
		{
			$arr["news_hot"]=0;	
		}
		add_news($arr);
		echo "<meta http-equiv='refresh' content='0; url=index.php?controller=news'>";
		break;
		
		case "edit":
		if(isset($_GET["id"]))
		{
			if(is_numeric($_GET["id"]))
			$id=$_GET["id"];
			$action="index.php?controller=add_edit_news&act=do_edit&id={$id}";	
			$get_one_news=get_news($id);
		}
		break;
	
	
		
		case "do_edit":
		
		if(isset($_GET["id"]))
		{
		$id=$_GET["id"];
		$arr=array();
		$arr["id"]=$id;
		$arr["tieude"]=mysql_real_escape_string($_POST["tieude"]);
		$arr["tomtat"]=mysql_real_escape_string($_POST["tomtat"]);
		$arr["noidung"]=mysql_real_escape_string($_POST["noidung"]);
		$arr["hinhanh_new"]="";
		if(isset($_FILES["f"]))
		{
			if($_FILES["f"]["name"]!="")
				{	
					$time=time();
					$arr["hinhanh_new"]=$time."_".$_FILES["f"]["name"];
					move_uploaded_file($_FILES["f"]["tmp_name"],"../img/".$time."_".$_FILES["f"]["name"]);
				}
	
			}
		}
		if(isset($_POST["news_hot"]))
		{
			$arr["news_hot"]=1;
		}
		else
		{
			$arr["news_hot"]=0;	
		}
		edit_news($arr);
		echo $arr["hinhanh_new"];
		echo "<meta http-equiv='refresh' content='0; url=index.php?controller=news'>";
		break;
	}
}



include "view/v_add_edit_news.php";
?>