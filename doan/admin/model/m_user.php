<?php
// lấy user từ vị trí $from, đến vị trị $record
//mysql_query : thực hiện câu lệnh truy vấn
	//mysql_fetch_array : đưa kết quả thu được từ bảng vào mảng
	//mysql_num_rows : đếm số dòng dữ liệu trong bảng

function getuser($from,$record_perpage)
{
		$result=mysql_query("select * from tbl_user limit $from,$record_perpage" );
	$arr=array();
	while($row=mysql_fetch_array($result))
	{
		$arr[]=$row;
	}
	return $arr;
}
// xóa user theo id
function deleteuser($id)
{
	mysql_query("delete from tbl_user where pk_user_id='{$id}'");	
}
 function delete_all_user($str_id)
 {
	
	mysql_query("delete from tbl_user where pk_user_id in ({$str_id})"); 
	
 }
// hàm đếm tông số bản ghi
function totalrecord()
{
	
	$result=mysql_query("select * from tbl_user");
	$total_record=mysql_num_rows($result);
	return $total_record;	
}
?>