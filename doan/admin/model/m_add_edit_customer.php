<?php
// thêm
function do_add($arr)
{
		$hoten=$arr["hoten"];
		$password=$arr["password"];
		$diachi=$arr["diachi"];
		$sdt=$arr["sdt"];
		$email=$arr["email"];
	    mysql_query("insert into tbl_khachhang set hoten='{$hoten}',                                                  password='{$password}', diachi='{$diachi}',sdt='{$sdt}',email='{$email}', tt= '0' ");
}
// lấy thông tin user
function getonecustomer($id)
{
	$result=mysql_query("select * from tbl_khachhang where id_khachhang='{$id}'");
	$arr=mysql_fetch_array($result);
	return $arr;
}
//update user

function edituser($arr)
{
		$id=$arr["id"];
		$hoten=$arr["hoten"];
		$password=$arr["password"];
		$diachi=$arr["diachi"];
		$sdt=$arr["sdt"];
		$email=$arr["email"];
//update info
	mysql_query("update tbl_khachhang set hoten='{$hoten}',                                                  password='{$password}', diachi='{$diachi}',sdt='{$sdt}',email='{$email}', tt= '0' ");


}

?>