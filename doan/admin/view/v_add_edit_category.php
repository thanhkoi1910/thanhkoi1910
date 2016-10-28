<script language="javascript">

function checkform()
{
	var n=0;
	//check username
	if(document.getElementById("username").value=="")
	{
		document.getElementById("username1").innerHTML="Bạn phải nhập thông tin";	
		n++;
	}
	else
	{
	document.getElementById("username1").innerHTML="";	
	}
	//check password 
	if(document.getElementById("mota").value=="")
	{
		document.getElementById("fullname1").innerHTML="Bạn phải nhập thông tin";	
		n++;
	}
	else
	{
	document.getElementById("fullname1").innerHTML="";	
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
<title>Cùng học Bootstrap</title>
 
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
                    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Add-Edit-Category</div>
                    <div class="panel-body">
                        <form id="category-form" class="form-horizontal" method="post" action="<?php echo $action;?>" enctype="multipart/form-data" role="form">
                            <input name="id" type="hidden" value="8"/>

                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                 Tên nhóm dịch vụ
                                </label>
                                <div class="col-sm-9">
                                <input name="username" id="username" type="text"  class="form-control"  placeholder="Nhóm dịch vụ"  value="<?php if(isset($_GET["id"]))echo $arr["nhomsp_name"];?>"/>
                                <span id="username1"></span>
                                </div>
                            </div> 
                            
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Mô tả </label>
                                <div class="col-sm-9">
                                    <input name="mota" id="mota" type="text"  class="form-control"  placeholder="Mô ta nhóm dịch vụ" 
                                    value="<?php if(isset($_GET["id"])) echo $arr["mota"];?>"/>
                                    <span id="fullname1"></span>
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