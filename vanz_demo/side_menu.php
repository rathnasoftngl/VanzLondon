        <link rel="stylesheet" href="side_menu/demo.css">
        <link rel="stylesheet" href="side_menu/pushy.css">
        <nav class="pushy pushy-left" data-focus="#first-link">
            <div class="pushy-content">
                <ul>
                	<?php 
					 $sel_menu = mysql_query("SELECT * from product_category order by pid ASC");
					 while($exe_menu = mysql_fetch_array($sel_menu))
					 { 
					 $cid= $exe_menu['pid'];
					 ?>
                    <li class="pushy-submenu">
                        <button id="first-link"><a  href="#"><?php echo $exe_menu['product_name']?></a></button>
                        <?php
						$sel_submenu = mysql_query("SELECT * from sub_product_category where cid=$cid order by scid ASC") ;
						if(mysql_num_rows($sel_submenu)>0)
						{ 
						?>
                            <ul>
                            <?php      
                            while($exe_submenu = mysql_fetch_array($sel_submenu))
                            {
                            ?>
                                <li class="pushy-link"><a href="product.php?w=<?php echo $exe_menu['pid'];?>&cid=<?php echo $exe_submenu['scid'];?>"><?php echo $exe_submenu['scname']?></a></li>
                            <?php 
							}   
							?>
                            </ul>
                        <?php
						}
						?>    
                    </li>
                   <?php
				   }
				   ?> 
                </ul>
            </div>
        </nav>
        <div class="site-overlay"></div>
        
         <button class="menu-btn">&#9776;</button>
        
        <script src="side_menu/pushy.min.js"></script>
