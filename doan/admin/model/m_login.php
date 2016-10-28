<?php
//hàm kiểm tra mật khẩu và tài khoản có khớp với csdl hay không
function checklogin($username,$password)
{
	$checkusername=mysql_query("select c_username from tbl_user where c_username='{$username}'");
	if(mysql_num_rows($checkusername)>0)
	{
		$checkpassword=mysql_query("select c_password from tbl_user WHERE c_password='{$password}';");
		if(mysql_num_rows($checkpassword)>0)
		{
			return true;	
		}
	}
	return false;
	
}

?>