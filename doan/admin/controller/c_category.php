<?php
include "model/m_category.php";
// tổng số bản ghi
$total_record=totalrecord();
// số bản ghi trên 1 trang
$record_perpage=3;
// số trang ceil là hàm làm tròn lên
$page=ceil($total_record/$record_perpage);
$p=0;
if(isset($_GET["p"]))
{
	$p=$_GET["p"];
	
	if($p>0)
	{
		$p--;	
	}
}	
$from=$record_perpage*$p;		

$getcategory=getcategory($from,$record_perpage);
// Xóa

$id=0;
if(isset($_GET["act"]))
{
	$act=$_GET["act"];	
	switch($act)
	{
		case "delete":
		// is_numberic : kiếm tra id có phải kiểu số hay không
		if(is_numeric($_GET["id"]))
		$id=$_GET["id"];
		deletecategory($id);
		// làm mới trang hiện tại ngay sau khi xóa
		echo "<meta http-equiv='refresh' content='0; url=index.php?controller=category'>";
		break;	
		
		case "delete_all":
		if(isset($_POST["id"]))
		{

			$arr=$_POST["id"];
			// chuyển đổi một mảng thành 1 chuỗi
			$str_id=implode($arr,",");
			print_r($arr);
			delete_all_category($str_id);
			echo "<meta http-equiv='refresh' content='0; url=index.php?controller=category'>";
		}
		break;	
	}
}


include "view/v_category.php";
?>