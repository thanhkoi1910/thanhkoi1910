<?php
function getnews($from,$record_perpage)
{
	$result=mysql_query("select * from tbl_news limit $from,$record_perpage" );
	$arr=array();
	while($row=mysql_fetch_array($result))
	{
		$arr[]=$row;
	}
	return $arr;
}
function totalrecord()
{
	$result=mysql_query("select * from tbl_news");
	$total_record=mysql_num_rows($result);
	return $total_record;	
}
function deletenews($id)
{
	mysql_query("delete from tbl_news where news_id='{$id}'");	
}
 function delete_all_news($str_id)
 {
	
	mysql_query("delete from tbl_news where news_id in ({$str_id})"); 
	
 }

?>