<?php
function getcustomer($from,$record_perpage)
{
	$result=mysql_query("select * from tbl_khachhang limit $from,$record_perpage" );
	$arr=array();
	while($row=mysql_fetch_array($result))
	{
		$arr[]=$row;
	}
	return $arr;
}
function totalrecord()
{
	$result=mysql_query("select * from tbl_khachhang");
	$total_record=mysql_num_rows($result);
	return $total_record;	
}
function deletecustomer($id)
{
	mysql_query("delete from tbl_khachhang where id_khachhang='{$id}'");	
}
 function delete_all_customer($str_id)
 {
	
	mysql_query("delete from tbl_khachhang where id_khachhang in ({$str_id})"); 
	
 }

?>