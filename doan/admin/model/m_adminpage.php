<?php
function count_product()
{
	$result=mysql_query("select * from tbl_sanpham");
	$arr=mysql_num_rows($result);
	return $arr;
}

function count_order1()
{
	$result=mysql_query("select * from tbl_donhang");
	$arr=mysql_num_rows($result);
	return $arr;
}
function count_order1_new()
{
	$result=mysql_query("select * from tbl_donhang order by id_donhang desc limit 0,4");
	$arr=mysql_num_rows($result);
	return $arr;
}

function count_order1_chuaxl()
{
	$result=mysql_query("select * from tbl_donhang where tinhtrang=0 ");
	$arr=mysql_num_rows($result);
	return $arr;
}

function count_order1_daxl()
{
	$result=mysql_query("select * from tbl_donhang where tinhtrang=1 ");
	$arr=mysql_num_rows($result);
	return $arr;
}

function count_news()
{
	$result=mysql_query("select * from tbl_news");
	$arr=mysql_num_rows($result);
	return $arr;
}

function count_khachang()
{
	$result=mysql_query("select * from tbl_khachhang");
	$arr=mysql_num_rows($result);
	return $arr;
}


function get_order()
{
	$result=mysql_query("select * from tbl_donhang");
	$arr=array();
	while($row=mysql_fetch_array($result))
	{
		$arr[]=$row;	
	}
	return $arr;
}

function doanhthu($date)
{
	$total_price=0;
	$result=mysql_query("select id_donhang from tbl_donhang where date='$date'");
	$arr=array();
	while($row1=mysql_fetch_array($result))
	{
		$arr[]=$row1;	
	}
	foreach($arr as $value)
	{
		$order_id=$value["id_donhang"];
		$result1=mysql_query("select * from tbl_chitietdonhang where id_donhang='{$order_id}'");
		$arr1=array();
		while($row=mysql_fetch_array($result1))
		{
			$arr1[]=$row;
		}
		foreach($arr1 as $value)
		{
			$total_price+=$value["dongia"]*$value["soluong"];	
		
		}
	}
	echo $total_price;
	return $total_price;
}
?>