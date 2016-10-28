<?php
function get_nhomsp()
{
	$result=mysql_query("select * from tbl_nhomsp");
	$arr=array();
	while($row=mysql_fetch_array($result))
	{
		$arr[]=$row;	
	}
	return $arr;
}

function get_product($nhomsp)
{
	$result=mysql_query("select * from tbl_sanpham inner join tbl_nhomsp on tbl_sanpham.nhomsp_id = tbl_nhomsp.nhomsp_id where tbl_sanpham.nhomsp_id ={$nhomsp}");
	$arr=array();
	while($row=mysql_fetch_array($result))
	{
		$arr[]=$row;	
	}
	return $arr;
}

function getall_product()
{
	$result=mysql_query("select * from tbl_sanpham inner join tbl_nhomsp on tbl_sanpham.nhomsp_id = tbl_nhomsp.nhomsp_id ");
	$arr=array();
	while($row=mysql_fetch_array($result))
	{
		$arr[]=$row;	
	}
	return $arr;
}

function delete_product($id)
{
	mysql_query("delete from tbl_sanpham where sanpham_id='{$id}'");
}


function delete_all($str)
{
	mysql_query("delete from tbl_sanpham where sanpham_id in ({$str})");
}
?>