<div class="container">
   <div class="row">
       <div class="col-md-10 col-md-offset-1">	
                
       <!-- content here -->
           <div class="panel panel-default">
               <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Danh sách dịch vụ</div>
               <div class="panel-body">
                
               <form id="category_form" method="post" action="index.php?controller=product&act=delete_all" role="form">

					<div class="col-xs-12">
	
                        <div class="form-group">
                            <!-- Single button -->
                            <div class="btn-group">
                                <button type="submit" name="btl_delete" class="btn btn-primary">Xóa bản ghi</button>            
                            </div>
                    
                            <a href="index.php?controller=add_edit_product&act=add" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
                        </div>
                        <div>
                          <div class="text-right">
                            <ul class="pagination">
                            <?php
                            foreach($get_nhomsp as $value)
							{
							?>
                                <li>
                                <a href="index.php?controller=product&nhomsp=<?php echo $value["nhomsp_id"];?>" 
                                 <?php 
								if(isset($_GET["nhomsp"])){if($_GET["nhomsp"]==$value["nhomsp_name"]){echo                                "style='background-color:#F1F1F1;'";}}?>>
                                <span><?php echo $value["nhomsp_name"];?></span>
                                </a>
                                </li>
                                
                             <?php
							}
							 ?>  
                                
                            </ul>
                        </div>
                        
                        </div>

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width:20px; text-align:center"><input id="checkAll" type="checkbox"/></th>
                                    <th style="width:20px; text-align:center">STT</th>
                                    <th>Nhóm dịch vụ</th>
                                    <th>Tên dịch vụ</th>
                                    <th>ID dịch vụ</th>
                                    <th>Hình ảnh</th>
                                    <th>Mô tả</th>
                                    <th>Dịch vụ hot</th>
                                    <th style="width:80px; text-align:center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                      		<?php
							$stt=0;
							if(isset($get_product))
                            foreach($get_product as $value)
							{
								$stt++;
							?>
                            	<tr>
                                	<td style="width:20px; text-align:center"> 
                                    <input id="checkAll" name="id[]" type="checkbox"                                      value="<?php echo $value["sanpham_id"];?>"/> </td>
                                    <td style="width:20px; text-align:center"><?php echo $stt;?>  </td>
                                    <td><?php echo $value["nhomsp_name"];?></td>
                                    <td><?php echo $value["sanpham_name"];?></td>
                                    <td><?php echo $value["sanpham_id"];?></td>
                                    <td><img style="width:50px; height:50px;" src="img/<?php echo $value["sanpham_img"];?>" ></td>
                                    <td><?php echo $value["sanpham_description"];?></td>
                                    <td><?php echo $value["sp_hot"];?></td>

                                    <td>
                                    <a href="index.php?controller=add_edit_product&act=edit&id=<?php echo
									 $value["sanpham_id"];?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                    / 
                                    <a href="index.php?controller=product&act=delete&id=<?php echo 
									$value["sanpham_id"];?>"><span class="glyphicon glyphicon-remove"></span></a>
                                    
                                    </td>
                                </tr>
                            <?php
							}
							?>
                            </tbody>
                        </table>
	
                     	
</div>
</div>

				</form>                
                 		</div>
        			</div>
             <!-- end content -->
                </div>
        </div>       
</div>