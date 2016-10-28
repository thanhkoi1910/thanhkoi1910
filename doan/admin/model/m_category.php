<?php
function getcategory($from,$record_perpage)
{
	$result=mysql_query("select * from tbl_nhomsp limit $from,$record_perpage" );
	$arr=array();
	while($row=mysql_fetch_array($result))
	{
		$arr[]=$row;
	}
	return $arr;
}
function totalrecord()
{
	$result=mysql_query("select * from tbl_nhomsp");
	$total_record=mysql_num_rows($result);
	return $total_record;	
}
function deletecategory($id)
{
	mysql_query("delete from tbl_nhomsp where nhomsp_id='{$id}'");	
}
 function delete_all_category($str_id)
 {
	
	mysql_query("delete from tbl_nhomsp where nhomsp_id in ({$str_id})"); 
	
 }

?>