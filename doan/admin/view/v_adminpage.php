<link rel="stylesheet" type="text/css" href="css/adminpage.css" >

<div class="adminpage">
	<div class="box">
    	<div class="box1" >
            <span style="margin-right:120px; margin-left:20px;"><?php echo $total_order;?></span>
            <span class="glyphicon glyphicon-shopping-cart" style="font-size:50px; margin-top:10px; " ></span>
            
            <div style=" text-align:center; width:100%;" >Đơn Hàng</div>
        </div>
        <div class="box2" >
            <span style="margin-right:120px; margin-left:20px;"><?php echo $total_customer;?></span>
            <span class="glyphicon glyphicon-user" style="font-size:50px; margin-top:10px; " ></span>
            
            <div style=" text-align:center; width:100%;" >Khách Hàng</div>
        </div>
        <div class="box3" >
            <span style="margin-right:120px; margin-left:20px;"><?php echo $total_product;?></span>
            <span class="glyphicon glyphicon-tags" style="font-size:50px; margin-top:10px; " ></span>
            <div style=" text-align:center; width:100%;" >Dịch vụ</div>
        </div>
        <div class="box4" >
            <span style="margin-right:120px; margin-left:20px;"><?php echo $total_news;?></span>
            <span class="glyphicon glyphicon-duplicate" style="font-size:50px; margin-top:10px; " ></span>
            <div style=" text-align:center; width:100%;" >Tin Tức</div>
        </div>
        
    </div>
	<div class="line-example">
    <div id="line-example"></div>
    </div>
   
    <div class="content1" >
    <br>
        <div class="content1_left">
        <table class="table table-striped table-hover">
        <tr>
            <td colspan="2">Thống kê</td>
        </tr>
          <tr>
            <td>Số lượng đơn hàng:</td>
            <td><?php echo $total_order;?></td>
        </tr>
         <tr>
            <td>Đơn hàng mới:</td>
            <td><?php echo $order_new;?></td>
        </tr>
        <tr>
            <td>Đơn hàng chưa thanh toán:</td>
            <td><?php echo $order_chuaxl;?></td>
        </tr>
          <tr>
            <td>Đơn hàng đã thanh toán:</td>
            <td><?php echo $order_daxl;?></td>
        </tr>
        </table>
        
        	
        </div>
        
    </div>
    
</div>
<script language="javascript">
Morris.Line({
  element: 'line-example',
  data: [
<?php
foreach($get_order as $value)
{
?>
    { y: '<?php echo $value["date"];?>', a: <?php doanhthu($value["date"]);?>},
 
<?php
}
?>
  
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['Doanh thu']
});
</script>