<?php echo $nhomsp;?>
<script language="javascript">
function checkform()
{
	var n=0;
	//check name
	if(document.getElementById("name").value=="")
	{
			document.getElementById("name1").innerHTML="Bạn phải nhập thông tin";
			n++;
	}
	else
	{
			document.getElementById("name1").innerHTML="";
	}
	//check size
	if(document.getElementById("size").value=="")
	{
			document.getElementById("size1").innerHTML="Bạn phải nhập thông tin";
			n++;
			
	}
	else
	{
	
			document.getElementById("size1").innerHTML="";	
	}
	//check mota
	if(document.getElementById("mota").value=="")
	{
		document.getElementById("mota1").innerHTML="Bạn phải nhập thông tin";	
		n++;
	}
	else
	{
		document.getElementById("mota1").innerHTML="";
	}
	//check gia
	if(document.getElementById("gia").value=="")
	{
		document.getElementById("gia1").innerHTML="Bạn phải nhập thông tin";
		n++;	
	}
	else
	{
		if(isNaN(document.getElementById("gia").value)==true)
		{
			document.getElementById("gia1").innerHTML="Bạn phải nhập số";
			n++;
		}
		else
		{
			document.getElementById("gia1").innerHTML="";
		}
	}
	//check danhmuc
	if(document.getElementById("danhmuc").value==0)
	{
		document.getElementById("danhmuc1").innerHTML="Bạn phải nhập thông tin";		
		n++;
	}
	else
	{
		document.getElementById("danhmuc1").innerHTML="";
	}
	//check img
	<?php
	if(isset($_GET["id"]))
	{
	?>
		document.getElementById("f1").innerHTML="";
	<?php
	}
	else
	{
	?>
		if(document.getElementById("f").value=="")
		{
			document.getElementById("f1").innerHTML="Ban phải chọn ảnh";	
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
<style type="text/css">
span {color:red; font-size:12px;}

</style>
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
                    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Add-Edit-Product</div>
                    <div class="panel-body">
                        <form id="category-form" class="form-horizontal" method="post" action="<?php echo $action;?>" enctype="multipart/form-data" role="form">
                            <input name="id" type="hidden" value="8"/>
                            
                            
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                
                                Tên dịch vụ
                                </label>
                                <div class="col-sm-9">
                                    <input name="sp_name" id="name" type="text"  class="form-control"  placeholder="Enter username"  value="<?php if(isset($_GET["id"]))echo $get_one_product["sanpham_name"];?>"/>
                                    <span id="name1"></span>
                                </div>
                            </div>
                            <input type="hidden" name="sp_id" value="<?php echo $get_one_product["sanpham_id"];?>">
                              <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                
                                Dịch vụ hot
                                </label>
                                <div class="col-sm-9">
                                    <input type="checkbox" name="sp_hot" <?php if(isset($_GET["id"])){ if($get_one_product["sp_hot"]==0){echo "";}else{echo "checked";} }?>>
                                </div>
                            </div>  
                            
                            
                              <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                
                                Mô tả:
                                </label>
                                <div class="col-sm-9">
                                    <input name="sp_description" id="mota" type="text"  class="form-control"  placeholder="Enter username"  value="<?php if(isset($_GET["id"]))echo $get_one_product["sanpham_description"];?>"/>
                                    <span id="mota1"></span>
                                </div>
                            </div>
                            
                              <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                
                                Giá:
                                </label>
                                <div class="col-sm-9">
                                    <input name="sp_price" id="gia" type="text"  class="form-control"  placeholder="Enter username"  value="<?php if(isset($_GET["id"]))echo $get_one_product["sanpham_price"];?>"/>
                                    <span id="gia1"></span>
                                </div>
                            </div>
                            
                              <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                
                                Danh Mục:
                                </label>
                                <div class="col-sm-9">
									<select name="danhmuc" class="form-control" id="danhmuc" >
                                    <option value="0">---</option>
										<?php 
                                        foreach($get_category as $value)
                                        {
                                        ?>
                                     	<option value="<?php echo $value["nhomsp_id"];?>"
                                         <?php if(isset($_GET["id"]))if( $value["nhomsp_id"]==$get_one_product
										 ["nhomsp_id"]){echo "selected";}else{echo "";}?>>
										<?php echo $value["nhomsp_name"];?>
                                        </option>
                                        <?php
                                        }
                                        ?>
                                        
                                    </select>	
                                    <span id="danhmuc1"></span>		
                                </div>
                            </div>
                            
                            
                              <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                
                                Ảnh:
                                </label>
                                <div class="col-sm-9">
									<input type="file" name="f" id="f" >	
                                    <br>
                                    <span id="f1"></span>
                                    <br>
                                </div>
                                  <div style="width:200px; height:200px; margin:0px auto;">
                                 <?php
                                 if(isset($_GET["id"]))
								 {
								 ?>
                                <img src="img/<?php if(isset($_GET["id"])) echo $get_one_product["sanpham_img"];?>" 
                                style="width:200px; height:170px;">
                                <?php
								 }
								?>
                                </div>
                            </div>
                            
                            
                           
                  
                  
                  <br><br>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" name="btn_add_edit_product" class="btn btn-primary" onClick="return checkform();">Cập nhật</button>
                                    <a class="btn btn-warning" href="index.php?controller=product&id=<?php echo $get_one_product["nhomsp_id"];?>">Trở về</a>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>                <!-- END CONTENT -->
                 		
                </div>
        </div>       
</div>
</body>