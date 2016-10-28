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
	if(document.getElementById("fullname").value=="")
	{
		document.getElementById("fullname1").innerHTML="Bạn phải nhập thông tin";	
		n++;
	}
	else
	{
	document.getElementById("fullname1").innerHTML="";	
	}
	//check andress
	if(document.getElementById("andress").value=="")
	{
		document.getElementById("andress1").innerHTML="Bạn phải nhập thông tin";	
		n++;
	}
	else
	{
	document.getElementById("andress1").innerHTML="";	
	}
	//check phone
	if(document.getElementById("phone").value=="")
	{
		document.getElementById("phone1").innerHTML="Bạn phải nhập thông tin";	
		n++;
	}
	else
	{
		if(isNaN(document.getElementById("phone").value)==true)
		{
			document.getElementById("phone1").innerHTML="Bạn phải nhập số";	
			n++;		
		}
		else
		{
			document.getElementById("phone1").innerHTML="";
		}
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
</script>
<head>
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
                    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Add-Edit-User</div>
                    <div class="panel-body">
                        <form id="category-form" class="form-horizontal" method="post" action="<?php echo $action;?>" enctype="multipart/form-data" role="form">
                            <input name="id" type="hidden" value="8"/>
                            
                            
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                Username
                                </label>
                                <div class="col-sm-9">
                                <input name="username" id="username" type="text"  class="form-control"  placeholder="Enter username"  value="<?php if(isset($_GET["id"]))echo $arr["c_username"];?>"/>
                                <span id="username1"></span>
                                </div>
                            </div> 
                            
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                    <input name="password" id="password" type="password"  class="form-control" placeholder="Enter passwrod"  value="<?php if(isset($_GET["id"])) echo $arr["c_password"];?>"/>
                                <span id="password1"></span>
                                </div>
                            </div>  
                            
                            
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Fullname</label>
                                <div class="col-sm-9">
                                    <input name="fullname" id="fullname" type="text"  class="form-control"  placeholder="Enter Fullname" 
                                    value="<?php if(isset($_GET["id"])) echo $arr["c_fullname"];?>"/>
                                    <span id="fullname1"></span>
                                </div>
                            </div>   
                            
                                             
                            <div class="form-group">
                                <label for="position" class="col-sm-3 control-label">Andress</label>
                                <div class="col-sm-9">
                                    <input name="andress" id="andress" type="text"  class="form-control"  placeholder="Enter Andress"  value="<?php if(isset($_GET["id"])) echo $arr["c_andress"];?>"/>
                                    <span id="andress1"></span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="position" class="col-sm-3 control-label">Phone</label>
                                <div class="col-sm-9">
                                    <input name="phone" id="phone" type="text"  class="form-control"  placeholder="Enter Phone"  value="<?php if(isset($_GET["id"])) echo $arr["c_phone"];?>"/>
                                    <span id="phone1"></span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" name="btn_add_edit_user" class="btn btn-primary" onClick="return checkform();">Cập nhật</button>
                                    <a class="btn btn-warning" href="index.php?controller=user">Trở về</a>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>                <!-- END CONTENT -->
                 		
                </div>
        </div>       
</div>

</body>