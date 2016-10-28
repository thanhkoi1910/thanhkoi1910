<?php
// hàm đếm số đơn hàng có tình trạng = 0 ( các đơn hàng chưa xử lí)
function count_order()
{
	$result=mysql_query("select * from tbl_donhang where tinhtrang=0");
	$arr=mysql_num_rows($result);
	return $arr;	
}
?>