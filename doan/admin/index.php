<meta charset="utf-8">
<?php
	session_start();
	$act="";
	if(isset($_GET["act"]))
	{
		$act=$_GET["act"];
		switch ($act)
		{
			case "logout":
			unset($_SESSION["loged"]);
			break;		
		}
	}
	$c="";
	$controller="controller/c_adminpage.php";
	if(isset($_GET["controller"]))
	{
		$c=$_GET["controller"];
		switch ($c)
		{
			case "adminpage":
			$controller="controller/c_adminpage.php";
			break;
			
			case "user":
			$controller="controller/c_user.php";
			break;
			
			case "add_edit_user":
			$controller="controller/c_add_edit_user.php";
			break;	
			
			case "category":
			$controller="controller/c_category.php";
			break;
			
			case "add_edit_category":
			$controller="controller/c_add_edit_category.php";
			break;
			
			case "product":
			$controller="controller/c_product.php";
			break;
			
			case "add_edit_product":
			$controller="controller/c_add_edit_product.php";
			break;
			
			case "customer":
			$controller="controller/c_customer.php";
			break;
			
			case "product_hot":
			$controller="controller/c_product_hot.php";
			break;
			
			case "news":
			$controller="controller/c_news.php";
			break;
            
			case "add_edit_news":
			$controller="controller/c_add_edit_news.php";
			break;
			
			case "add_edit_customer":
			$controller="controller/c_add_edit_customer.php";
			break;

		}	
	}
	
	include "../config.php";
	if(!isset($_SESSION["loged"]))
	{
		header("location:login.php");
	}
	include "controller/c_master.php";
	
	
?>

	

