<style type="text/css" >
span {color:red;}
</style>
<script src="ckeditor/ckeditor.js"></script>
<script language="javascript">
	function checkform()
	{
		var n=0;
		//check tietu de
		if(document.getElementById("tieude").value=="")
		{
			document.getElementById("tieude1").innerHTML="Bạn phải nhập thông tin";	
			n++;
		}
		else
		{
			document.getElementById("tieude1").innerHTML="";
		}
		
		//check tomtat
		if(document.getElementById("tomtat").value=="")
		{	
			document.getElementById("tomtat1").innerHTML="Bạn phải nhập thông tin";
			n++;
		}
		else
		{
			document.getElementById("tomtat1").innerHTML="";
		}
		
		//check noi dung
		if(document.getElementById("noidung").value=="")
		{
			document.getElementById("noidung1").innerHTML="bạn phải nhập thông tin";	
			n++;
		}
		else
		{
			document.getElementById("noidung1").innerHTML="";	
		}
		//check hinh anh
		<?php
		if(!isset($_GET["id"]))
		{
		?>
		if(document.getElementById("f").value=="")
		{
			document.getElementById("f1").innerHTML="Bạn phải chọn ảnh";	
			n++;
		}
		else
		{
			document.getElementById("f1").innerHTML="";	
		}
		<?php
		}
		?>
		
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
<body>
<div class="container">
        <div class="row">
                <div class="col-md-10 col-md-offset-1">                
               <!-- BEGIN CONTENT -->
                    <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Add-Edit-User</div>
                    <div class="panel-body">
                        <form id="category-form" class="form-horizontal" method="post" action="<?php echo $action;?>" enctype="multipart/form-data" role="form" enctype="multipart/form-data" onSubmit="return checkform();">
                            <input name="id" type="hidden" value="8"/>
                            
                            
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                Tiêu đề:
                                </label>
                                <div class="col-sm-9">
                                <input name="tieude" id="tieude"  type="text"  class="form-control"  placeholder="Enter username"  value="<?php if(isset($_GET["id"]))echo $get_one_news["tieude"];?>"/>
                                <span id="tieude1" ></span>    
                                </div>
                                
                            </div> 
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Tóm Tắt</label>
                                <div class="col-sm-9">
                                   <textarea name="tomtat" id="tomtat" class="form-control" style="width:600px; height:100px;" ><?php if(isset($_GET["id"]))echo $get_one_news["tomtat"];?></textarea>
                                    <script>
                                        // Replace the <textarea id="editor1"> with a CKEditor
                                        // instance, using default configuration.
                                        CKEDITOR.replace("tomtat");
                                    </script>
                                    <span id="tomtat1"></span>
                                </div>
                                 
                            </div>  
                            
                              <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Nội dung:</label>
                                <div class="col-sm-9">
                                   <textarea name="noidung"  id="noidung" class="form-control" style="width:600px; height:100px;" ><?php if(isset($_GET["id"]))echo $get_one_news["noidung"];?></textarea>
                                   <script>
                                        // Replace the <textarea id="editor1"> with a CKEditor
                                        // instance, using default configuration.
                                        CKEDITOR.replace("noidung");
                                    </script>
                                    <span id="noidung1"></span>
                                </div>
                                
                            </div>
                               <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Hinh anh:</label>
                                <div class="col-sm-9">
                                  <input type="file" name="f" id="f">
                                   <span id="f1"></span>
                                </div>
                                
                            </div>
                            <div style="width:200px; height:200px; margin:0px auto;">
                            <?php
                            if(isset($_GET["id"]))
							{
							?>
                               <img src="../img/<?php if(isset($_GET["id"])) echo $get_one_news["hinhanh"];?>" style="width:200px; height:200px;">
                            <?php
							}
							?>
                                </div>
                                
                             
                        
                            <br>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <input type="submit" name="btn_add_edit_news" class="btn btn-primary" value="Cập Nhập"  >
                                    <a class="btn btn-warning" href="index.php?controller=news">Trở về</a>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>                <!-- END CONTENT -->
                 		
                </div>
        </div>       
</div>

</body>