<ul class="megamenu skyblue">
				     <?php 
					 $sel_menu = mysql_query("SELECT * from product_category order by pid ASC");
					 while($exe_menu = mysql_fetch_array($sel_menu))
					 { $cid= $exe_menu['pid'];
					 ?>
                      <li class="grid"><a><?php echo $exe_menu['product_name']?></a>
                         <?php
							$sel_submenu = mysql_query("SELECT * from sub_product_category where cid=$cid order by scid ASC") ;
							if(mysql_num_rows($sel_submenu)>0)
							{ ?>
					    <div class="megapanel">
						<div class="row">
							<div class="col3">
								<div class="h_nav">
									<ul>
                            <?php      
					 while($exe_submenu = mysql_fetch_array($sel_submenu))
					 {
									 ?>
										<li><a href="product.php?w=<?php echo $exe_menu['pid'];?>&cid=<?php echo $exe_submenu['scid'];?> ">
	<?php echo $exe_submenu['scname']?></a></li>
										
                                        <?php }   ?>
									</ul>	
								</div>							
							</div>
							<div class="col3">
								<div class="h_nav">
									<img src="images/<?php echo $exe_menu['cat_image']?>" class="img-responsive">
								</div>							
							</div>
						  </div>
						</div> <?php } 
						?>
					</li>
					<?php } ?>
			  </ul>