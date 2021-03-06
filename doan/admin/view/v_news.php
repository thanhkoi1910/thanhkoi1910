<div class="container">
   <div class="row">
       <div class="col-md-10 col-md-offset-1">
                
       <!-- content here -->
           <div class="panel panel-default">
               <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i>Danh sách tin tức</div>
               <div class="panel-body">
                
               <form id="category_form" method="post" action="index.php?controller=news&act=delete_all" role="form">

					<div class="col-xs-12">
	
                        <div class="form-group">
                            <!-- Single button -->
                            <div class="btn-group">
                                <button type="submit" name="btl_delete" class="btn btn-primary">Xóa bản ghi</button>            
                            </div>
                    
                            <a href="index.php?controller=add_edit_news&act=add" class="btn btn-primary pull-right">
                            <i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
                        </div>

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width:20px; text-align:center"><input id="checkAll" type="checkbox"/></th>
                                    <th style="width:20px; text-align:center">STT</th>
                                    <th>ID</th>
                                    <th>Tiêu đề</th>
                                    <th>Mô tả</th>
                                    <th>Nội dung</th>
                                    <th>Hình ảnh</th>
                                    <th>Ngày đăng</th>
                                    <th>Người đăng</th>
                                    <th style="width:80px; text-align:center">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                      		<?php
							$a="";
                            foreach($getnews as $key=>$value)
							{
							$a++;	
							?>
                            <tr>
                                    <td style="width:20px; text-align:center"><input id="checkall" name="id[]" 
                                    value="<?php echo $value["news_id"];?>" type="checkbox"/></th>
                                    <td style="width:20px; text-align:center"><?php echo $a;?></td>
                                    <td><?php echo $value["news_id"];?></td>
                                    <td><?php echo $value["title"];?></td>
                                    <td><?php echo $value["description"];?></td>
                                    <td><?php echo $value["content"];?></td>
                                    <td><img style="width:200px; height:200px;" src="img/<?php echo $value["news_img"];?>" ></td>
                                    <td><?php echo $value["date"];?></td>
                                    <td><?php echo $value["user"];?></td>
                                    <td style="width:80px; text-align:center">
                                    <a href="index.php?controller=add_edit_news&act=edit&id=<?php 
									echo $value["news_id"];?>"><span class="glyphicon glyphicon-edit
">  </span></a>
									/
                                    <a href="index.php?controller=news&act=delete&id=<?php echo $value
									["news_id"];?>"><span class="glyphicon glyphicon-remove" ></span></a>
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
                                <li ><span><a class="active" href="index.php?controller=news&p=<?php echo $i;?>">
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