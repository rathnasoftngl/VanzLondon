<div class="cart icon1 sub-icon1">
	<li><a href="view_cart.php" class="round"><?php echo $itemsinbasket;?></a>
	<ul class="sub-icon1 list">
		<div style="width:100%; padding:5px;">
        	<h3 style="border-bottom:1px dotted #CCCCCC;"><?php echo $itemsinbasket;?> Item in bag</h3>
        </div>
        <hr>
          <?php if(isset($_SESSION["tempuser"]) || isset($_SESSION["usr"]))
							  {
							  $tot_amt= 0; 
							 
							  
							 
							  
							  $get_cart = mysql_query("SELECT distinct a.id,a.prod_name,a.prod_price,a.prod_image1,t.MemId,t.OrderId,sum(t.Qty) as Qty from  product_details a left join tempcart t on t.ItemID=a.id $where  order by t.MemId DESC limit 5 ");
							  if(mysql_num_rows($get_cart)>0)
							  {
							 while($exe_cart = mysql_fetch_array($get_cart))
							 { 
							 $pprice=$exe_cart['Qty'] * $exe_cart['prod_price'];
							 
							 $tot_amt += $pprice;
							 
								 if($exe_cart['lfileName']!=NULL)
					   {
						   $imvar = "img/products/".$exe_cart['prod_image1'];
					   } else { $imvar = "images/shoe.jpg"; } 
							  ?>
        <div style="width:100%; padding:5px;">
        	<div style="width:35%; float:left;">
            <img src="<?php echo $imvar;?>" class="img-responsive" style="width:55px;">
            </div>
        	<div style="width:50%; float:left;">
            <p><a target="_blank" href="single.php?pid=<?php echo $exe_cart['id'];?>">
			<?php echo $exe_cart['prod_name'];?></a></p>
            <p>Qty : <?php echo $exe_cart['Qty'];?></p>
            <p style="color:#0033FF;">In Stock </p>
            </div>
        	<div style="width:14%; float:right;">
            <p>£ <?php echo $pprice;?></p>
            </div>
        </div><br /><br />
        <hr>
         <?php } } ?>
        
        
        <div style="width:100%; padding:5px;">
        	<div style="border-bottom:1px solid #CCCCCC;"></div>
        </div>
        
        <div style="width:100%; padding:5px;">
        	<div style="width:50%; float:left; padding-bottom:4px;">
            <h4>Total</h4>
            </div>
        	<div style="width:14%; float:right;">
            <h3>£ <?php echo $tot_amt; ?></h3>
            </div>
        </div>
        
        <div style="width:100%; padding:5px;">
        	<div style="width:48%; float:left;">
            <a href="view_cart.php"><h5 class="btn_view">VIEW/EDIT BAG</h5></a>
            </div>
        	<div style="width:48%; float:right;">
            <a href="checkout.php" title="Checkout products"> <h5 class="btn_check">CHECKOUT</h5> </a>
            </div>
        </div> <?php } ?>
	</ul>
	</li>
</div>