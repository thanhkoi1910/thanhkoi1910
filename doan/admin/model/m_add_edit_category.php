<?php
// thêm
function do_add($arr)
{
		$nhomsp_name=$arr["nhomsp_name"];
		$mota=$arr["mota"];
	    mysql_query("insert into tbl_nhomsp set nhomsp_name='{$nhomsp_name}', mota='{$mota}'");
}
// lấy thông tin user
function getonecategory($id)
{
	$result=mysql_query("select * from tbl_nhomsp where nhomsp_id='{$id}'");
	$arr=mysql_fetch_array($result);
	return $arr;
}
//update user

function edituser($arr)
{
		$id=$arr["id"];
		$username=$arr["nhomsp_name"];
		$mota=$arr["mota"];
//update info
	mysql_query("update tbl_nhomsp set nhomsp_name='{$username}', mota='{$mota}' where nhomsp_id='{$id}'");
//check password
/*	$check=mysql_query("select c_password from tbl_user where c_password='{$password}'");
	$row_check=mysql_fetch_array($check);
	if($row_check != $password)
	{
		$new_password=md5($password);
		mysql_query("update tbl_user set c_password='{$new_password}' where pk_user_id='{$id}' ");	
	}
*/	

}
// kiểm tra tên username đã tồn tại hay chưa
function checkusername($arr)
{
	$username=$arr["nhomsp_name"];
	$check_username=mysql_query("select * from tbl_nhomsp where nhomsp_name='{$username}'");
	if(mysql_num_rows($check_username)>0)
	{
		return false;	
	}
	else
	{
		return true;	
	}
}
?>