<?php
function get_news($id)
{
	$result=mysql_query("select * from tbl_tintuc where id_tintuc='{$id}'");
	$arr=mysql_fetch_array($result);
	return $arr;	
}


function add_news($arr)
{
	$date=date("Y-m-d"); 
	$tieude=$arr["tieude"];
	$tomtat=$arr["tomtat"];
	$noidung=$arr["noidung"];
	$hinhanh=$arr["hinhanh"];
	$news_hot=$arr["news_hot"];
	mysql_query("insert into tbl_tintuc set tieude='{$tieude}', tomtat='{$tomtat}',noidung='{$noidung}',hinhanh='{$hinhanh}', ngaydang='{$date}' c_hot='{$news_hot}'");
}

function edit_news($arr)
{
	$tieude=$arr["tieude"];
	$tomtat=$arr["tomtat"];
	$noidung=$arr["noidung"];
	$id=$arr["id"];
	$hinhanh=$arr["hinhanh_new"];
	$news_hot=$arr["news_hot"];
	mysql_query("update tbl_tintuc set tieude='{$tieude}', tomtat='{$tomtat}',noidung='{$noidung}',c_hot='{$news_hot}' where id_tintuc='{$id}'");
	if($hinhanh!="")
	{
		mysql_query("update tbl_tintuc set hinhanh='{$hinhanh}' where id_tintuc='{$id}'");
	}
}

?>