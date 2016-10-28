<?php
function get_category()
{
	$result=mysql_query("select * from tbl_nhomsp");
	$arr=array();
	while($row=mysql_fetch_array($result))
	{
		$arr[]=$row;	
	}
	return $arr;
}

function add_product($arr)
{
	$name=$arr["name"];
	$mota=$arr["mota"];
	$price=$arr["price"];
	$nhomsp=$arr["nhomsp"];
	$img=$arr["img"];
	$sp_hot=$arr["sp_hot"];
	mysql_query("insert into tbl_sanpham set nhomsp_id='{$nhomsp}', sanpham_name='{$name}',sanpham_img='{$img}',sanpham_price='{$price}',sanpham_description='{$mota}', sp_hot='{$sp_hot}'");
}

function get_one_product($id)
{
	$result=mysql_query("select * from tbl_sanpham where sanpham_id={$id} ");
	$arr=array();
	$row=mysql_fetch_array($result);
	
	return $row;
}

function edit_product($arr)
{
	$name=$arr["name"];
	$mota=$arr["mota"];
	$price=$arr["price"];
	$nhomsp=$arr["nhomsp"];
	$sp_hot=$arr["sp_hot"];
	$img=$arr["img"];
	$id=$arr["id"];
	mysql_query("update tbl_sanpham set nhomsp_id='{$nhomsp}', sanpham_name='{$name}',sanpham_price='{$price}',sanpham_description='{$mota}', sp_hot='{$sp_hot}', where sanpham_id='{$id}' ");	
		if($img!="")
		{
			mysql_query("update tbl_sanpham set sanpham_img='{$img}' where sanpham_id='{$id}'");
			
		}
	
}
?>