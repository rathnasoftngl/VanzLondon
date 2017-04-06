<?php $where = ""; $today=date('Y-m-d'); $sessionid = session_id();
          
		   if($_SESSION["tempuser"]!="" && $_SESSION["usr"]=="")
		  {  
		  	$countitems=mysql_query("SELECT count(*) FROM tempcart WHERE OrderDate='$today' AND  MemId='" . $_SESSION["tempuser"] . "'");
			 $where = "where t.OrderDate='$today' AND t.MemId='" . $_SESSION["tempuser"] . "' AND t.session_id='".$sessionid."' ";
			//echo "SELECT count(*) FROM tempcart WHERE MemId='" . $_SESSION["tempuser"] . "'";
		  } 
		  else if($_SESSION["tempuser"]!="" && $_SESSION["usr"]!="")
		  {
		  	$countitems=mysql_query("SELECT count(*) FROM tempcart WHERE MemId='" . $_SESSION["usr"] . "' OR MemId='" . $_SESSION["tempuser"] . "' AND OrderDate='$today'");
			//echo "SELECT count(*) FROM tempcart WHERE MemId='" . $_SESSION["usr"] . "' OR MemId='" . $_SESSION["tempuser"] . "'";
			 $where = "where t.MemId='" . $_SESSION["usr"] . "' OR t.MemId='" . $_SESSION["tempuser"] . "' AND t.OrderDate='$today' AND t.session_id='".$sessionid."'";
		  }

		  if($getcntitems=mysql_fetch_array($countitems))
		  		     $itemsinbasket = $getcntitems[0];
		  else
			$itemsinbasket = "0";

		 

?> 
<!--<div class="cart icon1 sub-icon1">
						<h6>Shopping Cart:
						<span class="item"><a href="view_cart.php">[ <?php //echo $itemsinbasket;?> items ]</a></span>
						<!--<span class="rate"><img src="images/ruppee.png"> 0</span>
						<li><a href="#" class="round"> </a>
						<ul class="sub-icon1 list">
						  <h3>Recently added items (<?php //echo $itemsinbasket;?>)</h3>
						  <div class="shopping_cart">
							  <div class="cart_box">
                              <?php /*if(isset($_SESSION["tempuser"]) || isset($_SESSION["usr"]))
							  {
							  
							  $get_cart = mysql_query("SELECT a.id,a.itemVal,a.itemPrice,a.lfileName,t.MemId,t.OrderId from  applicationone a left join tempcart t on t.ItemID=a.id $where  order by t.MemId DESC limit 5 ");
							  if(mysql_num_rows($get_cart)>0)
							  {
							 while($exe_cart = mysql_fetch_array($get_cart))
							 {
								 if($exe_cart['lfileName']!=NULL)
					   {
						   $imvar = "img/products/".$exe_cart['lfileName'];
					   } else { $imvar = "img/products/pulses1.jpg"; }  */
							  ?>
							   	 <div class="message">
							   	     <div class="alert-close"> </div> 
										<div class="list_img">
                                        <img src="<?php //echo $imvar;?>" class="img-responsive" alt=""></div>
										<div class="list_desc"><h4><a target="_blank" href="single_product.php?pid=<?php //echo $exe_cart['id'];?>"><?php //echo $exe_cart['itemVal'];?></a></h4>
										
										<a class="offer"><?php //echo "Rs. ".$exe_cart['itemPrice'];?></a>
										</div>
		                              <div class="clearfix"></div>
	                              </div>
                                  <?php //} } else { ?>
                                   <div class="message">
                                   <div class="list_desc"><h4>No items!</h4>
                                   </div> </div> <?php //} } ?>
	                            </div>
	                           
								
	                        </div>
							  <div class="check_button"><a href="view_cart.php">View Cart</a></div>
					      <div class="clearfix"></div>
						</ul>
					</li>
</h6>
						
					</div>-->