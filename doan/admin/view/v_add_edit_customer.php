<script language="javascript">

function checkform()
{
	var n=0;
	//check username
	if(document.getElementById("hoten").value=="")
	{
		document.getElementById("hoten1").innerHTML="Bạn phải nhập thông tin";	
		n++;
	}
	else
	{
	document.getElementById("hoten1").innerHTML="";	
	}
	//check password 
	if(document.getElementById("password").value=="")
	{
		document.getElementById("password1").innerHTML="Bạn phải nhập thông tin";	
		n++;
	}
	else
	{
	document.getElementById("password1").innerHTML="";	
	}
	//check full name
	if(document.getElementById("diachi").value=="")
	{
		document.getElementById("diachi1").innerHTML="Bạn phải nhập thông tin";	
		n++;
	}
	else
	{
	document.getElementById("diachi1").innerHTML="";	
	}
	//check andress
	if(document.getElementById("sdt").value=="")
	{
		document.getElementById("sdt1").innerHTML="Bạn phải nhập thông tin";	
		n++;
	}
	else
	{
		if(isNaN(document.getElementById("sdt").value)==true)
		{
			document.getElementById("sdt1").innerHTML="Bạn phải nhập số";	
			n++;		
		}
		else
		{
			document.getElementById("sdt1").innerHTML="";
		}
	}
	//check phone
	if(document.getElementById("email").value=="")
	{
		document.getElementById("email1").innerHTML="Bạn phải nhập thông tin";	
		n++;
	}	
	if(n==0)
	{
		return true;	
	}
	else
	{
		return false;	
	}
}
</script><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
 
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>


<style type="text/css">
span {color:red;}
</style>
<body>


<div class="container">
        <div class="row">
                <div class="col-md-10 col-md-offset-1">                
               <!-- BEGIN CONTENT -->
                    <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Add-Edit-Customer</div>
                    <div class="panel-body">
                        <form id="category-form" class="form-horizontal" method="post"
                         action="<?php echo $action;?>" enctype="multipart/form-data" role="form">
                            <input name="id" type="hidden" value="8"/>

                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                               Họ tên
                                </label>
                                <div class="col-sm-9">
                                <input name="hoten" id="hoten" type="text"  class="form-control" 
                                 placeholder="Họ tên" 
                                 value="<?php if(isset($_GET["id"]))echo $arr["hoten"];?>"/>
                                <span id="hoten1"></span>
                                </div>
                            </div> 
                            
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                               Password
                                </label>
                                <div class="col-sm-9">
                                <input name="password" id="password" type="text"  class="form-control" 
                                 placeholder="Password" 
                                 value="<?php if(isset($_GET["id"]))echo $arr["hoten"];?>"/>
                                <span id="password1"></span>
                                </div>
                            </div> 
                            
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Địa chỉ </label>
                                <div class="col-sm-9">
                                    <input name="diachi" id="diachi" type="text"  class="form-control"  
                                    placeholder="Địa chỉ" 
                                    value="<?php if(isset($_GET["id"])) echo $arr["diachi"];?>"/>
                                    <span id="diachi1"></span>
                                </div>
                            </div>  
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Số điện thoại </label>
                                <div class="col-sm-9">
                                    <input name="sdt" id="sdt" type="text"  class="form-control"  
                                    placeholder="Số điện thoại" 
                                    value="<?php if(isset($_GET["id"])) echo $arr["sdt"];?>"/>
                                    <span id="sdt1"></span>
                                </div>
                            </div>   
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Email </label>
                                <div class="col-sm-9">
                                    <input name="email" id="email" type="text"  class="form-control"  
                                    placeholder="Email" 
                                    value="<?php if(isset($_GET["id"])) echo $arr["email"];?>"/>
                                    <span id="email1"></span>
                                </div>
                            </div>    
                            
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" name="btn_add_edit_user" class="btn btn-primary" 
                                    onClick="return checkform();">Cập nhật</button>
                                    <a class="btn btn-warning" href="index.php?controller=category">Trở về</a>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>                <!-- END CONTENT -->
                 		
                </div>
        </div>       
</div>

</body>