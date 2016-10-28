<?php 
include "model/m_product.php";
$get_nhomsp=get_nhomsp();
if(isset($_GET["nhomsp"]))
{
	if(is_numeric($_GET["nhomsp"]))
	{ 
		$nhomsp=$_GET["nhomsp"];
		$get_product=get_product($nhomsp);	
	}
}
else
{
	$get_product=getall_product();
}

$act="";
if(isset($_GET["act"]))
{
	$act=$_GET["act"];	
	switch ($act)
	{
		case "delete":
		$id=$_GET["id"];
		delete_product($id);
		echo "<meta http-equiv='refresh' content='0; url=index.php?controller=product'>";
		break;	
		
		case "delete_all":
		if(isset($_POST["id"]))
		{
		$id=$_POST["id"];
		$str=implode(',',$id);
		print_r($str);
		delete_all($str);
		}
		break;
	}
}
//print_r($get_category);
include "view/v_product.php";
?>