<?php
// thêm
function do_add($arr)
{
		$username=$arr["username"];
		$password=$arr["password"];
		$fullname=$arr["fullname"];
		$andress=$arr["andress"];
		$phone=$arr["phone"];

	mysql_query("insert into tbl_user set 
	c_username='{$username}',
	c_password='{$password}',
	c_fullname='{$fullname}',
	c_andress='{$andress}',
	c_phone='{$phone}'
	");
}
// lấy thông tin user
function getoneuser($id)
{
	$result=mysql_query("select * from tbl_user where pk_user_id='{$id}'");
	$arr=mysql_fetch_array($result);
	return $arr;
}
//update user

function edituser($arr)
{
		$id=$arr["id"];
		$username=$arr["username"];
		$password=$arr["password"];
		$fullname=$arr["fullname"];
		$andress=$arr["andress"];
		$phone=$arr["phone"];
	//update info
	mysql_query("update tbl_user set c_username='{$username}', c_fullname='{$fullname}',c_andress='{$andress}', c_phone='{$phone}' where pk_user_id='{$id}'");
	//check password
	$check=mysql_query("select c_password from tbl_user where c_password='{$password}'");
	$row_check=mysql_fetch_array($check);
	if($row_check != $password)
	{
		$new_password=md5($password);
		mysql_query("update tbl_user set c_password='{$new_password}' where pk_user_id='{$id}' ");	
	}
	

}
// kiểm tra tên username đã tồn tại hay chưa
function checkusername($arr)
{
	$username=$arr["username"];
	$check_username=mysql_query("select * from tbl_user where c_username='{$username}'");
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