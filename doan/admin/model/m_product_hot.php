<?php
function getproduct_hot($from,$record_perpage)
{
	$result=mysql_query("select * from tbl_sanpham where sp_hot = '1' limit $from,$record_perpage" );
	$arr=array();
	while($row=mysql_fetch_array($result))
	{
		$arr[]=$row;
	}
	return $arr;
}
function totalrecord()
{
	$result=mysql_query("select * from tbl_sanpham where sp_hot = '1'");
	$total_record=mysql_num_rows($result);
	return $total_record;	
}
function deleteproduct($id)
{
	mysql_query("delete from tbl_sanpham where sanpham_id='{$id}'");	
}
 function delete_all_product($str_id)
 {
	
	mysql_query("delete from tbl_sanpham where sanpham_id in ({$str_id})"); 
	
 }
 ?>