<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>admin</title>
 
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="css/master.css" >
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script language="javascript" src="js/jquery-1.11.3.min.js"></script>
<script language="javascript" src="morris.js-0.5.1/morris.min.js"></script>
</head>
<body>


  <nav class="navbar navbar-default navbar-inverse" role="navigation">
  
    <!--— -navbar-header để nhóm navbar lại khi toggle để hiển thị trên di động ---->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php?controller=adminpage">Admin page</a>
    </div>

    <!--—các thành phần navbar  ---->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">               
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dịch vụ <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?controller=category">Danh sách nhóm  dịch vụ</a></li>
            <li><a href="index.php?controller=product">Danh sách dịch vụ</a></li>
            <li><a href="index.php?controller=product_detail">Danh sách loại dich vụ</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="index.php?controller=news" class="dropdown-toggle" >Tin tức</a>
         
        </li>
        <li><a href="index.php?controller=order">Đơn hàng(<?php echo $count_order;?>)</a></li>
          <li><a href="index.php?controller=feedback">Liên hệ</a></li>
           <li><a href="index.php?controller=user">Người sử dụng</a></li>
           <li><a href="index.php?controller=customer" >Khách hàng</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a>Xin chào <?php echo $_SESSION["username"]; ?></a></li>
         <li><a href="index.php?act=logout">Đăng xuất</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  
</nav>



<div class="content">
    <div class="content_left" style="box-shadow:#C8C7C7 2px 2px 2px 2px;">
        <div class="panel panel-default" style="color:black;">
        	<div class="panel-heading">Dịch vụ</div>
            <div class="panel-body" >
                <ul class="list-inline">
                    <li><span class="glyphicon glyphicon-cog" style="margin-right:5px; margin-bottom:7px;" ></span><a href="index.php?controller=product&id=1"style="color:black;" >Danh sách dịch vụ</a></li>
                    <li><span class="glyphicon glyphicon-cog" style="margin-right:5px; margin-bottom:7px;"></span><a href="index.php?controller=product_new" style="color:black;" >Dịch vụ mới</a></li></br>
                    <li><span class="glyphicon glyphicon-cog" style="margin-right:5px; margin-bottom:7px;"></span><a href="index.php?controller=product_hot" style="color:black;" >Dịch vụ hot</a></li>
                </ul>
            </div>
            <div class="panel-heading">Đơn Hàng</div>
            <div class="panel-body" >
                <ul class="list-inline">
                    <li><span class="glyphicon glyphicon-cog" style="margin-right:5px; margin-bottom:7px;"></span><a href="index.php?controller=order&key=1" style="color:black;" >Đơn Hàng đã xữ lý</a></li>
                    <li><span class="glyphicon glyphicon-cog" style="margin-right:5px; margin-bottom:7px;"></span><a href="index.php?controller=order&key=0" style="color:black;" >Đơn hàng chưa xử lý</a></li>
                </ul>
            </div>
            <div class="panel-heading">Quản lý khách hàng</div>
            <div class="panel-body" >
            	 <ul class="list-inline">
                    <li><span class="glyphicon glyphicon-cog" style="margin-right:5px; margin-bottom:7px;"></span><a href="index.php?controller=customer" style="color:black;" >Danh sách khách hàng</a></li>
                    
                </ul>
            </div>
            <div class="panel-heading">Quản lý chương trình</div>
            <div class="panel-body" >
            	 <ul class="list-inline">
                    <li><span class="glyphicon glyphicon-cog" style="margin-right:5px; margin-bottom:7px;"></span><a href="index.php?controller=slide" style="color:black;" >Khuyến mãi</a></li>
                    <br>
                    <li><span class="glyphicon glyphicon-cog" style="margin-right:5px; margin-bottom:7px;"></span><a href="index.php?controller=content_home" style="color:black;" >Hậu mãi</a></li>
                    <br>
                    <li><span class="glyphicon glyphicon-cog" style="margin-right:5px; margin-bottom:7px;"></span><a href="index.php?controller=support_home" style="color:black;" >Hỗ trợ</a></li>
                    
                </ul>
            </div>
            
        </div>
    </div>
    
    <div class="content_right" style=" margin-left:-90px">
    <?php
	include $controller;
	?>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script language="javascript">
$('#checkAll').click(function(e){
    var table= $(e.target).closest('table');
    $('td input:checkbox',table).prop('checked',this.checked);
});
</script>
</body>