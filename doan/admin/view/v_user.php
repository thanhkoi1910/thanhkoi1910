<div class="container">
   <div class="row">
       <div class="col-md-10 col-md-offset-1">
                
       <!-- content here -->
           <div class="panel panel-default">
               <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i>Danh sách user</div>
               <div class="panel-body">
                
               <form id="category_form" method="post" action="index.php?controller=user&act=delete_all" role="form">

					<div class="col-xs-12">
	
                        <div class="form-group">
                            <!-- Single button -->
                            <div class="btn-group">
                                <button type="submit" name="btl_delete" class="btn btn-primary">Xóa bản ghi</button>            
                            </div>
                    
                            <a href="index.php?controller=add_edit_user&act=add" class="btn btn-primary pull-right">
                            <i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
                        </div>

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width:20px; text-align:center"><input id="checkAll" type="checkbox"/></th>
                                    <th style="width:20px; text-align:center">STT</th>
                                    <th>Username</th>
                                    <th>Ho ten</th>
                                    <th>Dia chi</th>
                                    <th>Dien thoai</th>
                                    <th style="width:80px; text-align:center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                      		<?php
							$a="";
                            foreach($getuser as $key=>$value)
							{
							$a++;	
							?>
                            <tr>
                                    <td style="width:20px; text-align:center"><input id="checkall" name="id[]" 
                                    value="<?php echo $value["pk_user_id"];?>" type="checkbox"/></th>
                                    <td style="width:20px; text-align:center"><?php echo $a;?></td>
                                    <td><?php echo $value["c_username"];?></td>
                                    <td><?php echo $value["c_fullname"];?></td>
                                    <td><?php echo $value["c_andress"];?></td>
                                    <td><?php echo $value["c_phone"];?></td>
                                    
                                    <td style="width:80px; text-align:center">
                                    <a href="index.php?controller=add_edit_user&act=edit&id=<?php 
									echo $value["pk_user_id"];?>"><span class="glyphicon glyphicon-edit
">  </span></a>
									/
                                    <a href="index.php?controller=user&act=delete&id=<?php echo $value
									["pk_user_id"];?>"><span class="glyphicon glyphicon-remove" ></span></a>
                                    </td>
                                </tr>
                            <?php
							}
							?>		
                            </tbody>
                        </table>
	
                       <div class="text-right">
                            <ul class="pagination">
                                <li class="disabled"><span>Page</span></li>
                                <?php                                	
                                	for($i=1;$i<=$page;$i++)
                                	{
                                ?>
                                <li ><span><a class="active" href="index.php?controller=user&p=<?php echo $i;?>">
								<?php echo $i;?></a></span></li>
                                <?php } ?>
                            </ul>
                        </div>	
</div>
</div>

				</form>                
                 		</div>
        			</div>
             <!-- end content -->
                </div>
        </div>       
</div>