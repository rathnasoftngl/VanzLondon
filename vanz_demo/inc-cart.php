<style>
.product_cart{
	text-align: left; color:#000000; font-weight:bold; font-size:16px; }
	
</style>

  
  Your bag contains <span class="qty_tot"><?php echo $itemsinbasket; ?> </span> items. <!--and comes to a total of £ <span class="amt_tot">60.00</span> -->
<div class="table-responsive">
    
        <table width="100%" class="table" border="0" cellspacing="0" cellpadding="0" align="center" style="padding:10px;">
  <tr>
    <td> 
	<?php $today=date('Y-m-d'); $_SESSION['sessionid']= session_id();
	if($_SESSION["tempuser"]!="" && $_SESSION["usr"]=="")
	{ 
	$sqltempcart = mysql_query("select * from tempcart where OrderDate='$today' AND MemId='".$_SESSION["tempuser"]."' AND session_id='".$_SESSION['sessionid']."'");
	//echo "select * from tempcart where MemId='".$_SESSION["tempuser"]."'";
	}
	else if($_SESSION["tempuser"]!="" && $_SESSION["usr"]!="")
	{
	$sqltempcart = mysql_query("select * from tempcart where MemId='".$_SESSION["tempuser"]."' OR  MemId='" . $_SESSION["usr"] ."' AND OrderDate='$today' AND  session_id='".$_SESSION['sessionid']."'");
	//echo "select * from tempcart where MemId='".$_SESSION["tempuser"]."' OR  MemId='" . $_SESSION["usr"] ."'";
	}
	if(mysql_num_rows($sqltempcart)>0)
		{
	?>
    
    <table width="100%"  align="center" rules="none" style="margin:1px;" id="cart_table">
              <tr  style="color: #666;">
                <td colspan="8"><div style="border-bottom:1px dotted #CCCCCC;"></div></td>
              </tr>
              <tr style="border-bottom:1px dotted #CCCCCC;" align="center">
                <td class="product_cart">Item </td>
                <td  height="25" class="product_cart">Item Name</td>
                <td class="product_cart" align="center">Size</td>
                <td class="product_cart">Qty</td>
                <td class="product_cart">Availability</td>
                <td class="product_cart">ORDER VALUE</td>
                <td width="15%" colspan="2" bordercolor="#FFFFFF"  >&nbsp;</td>
              </tr>
              <tr  style="color: #666;">
                <td colspan="8"><div style="border-bottom:1px dotted #CCCCCC;"></div></td>
              </tr>
    
     <?php       
     //Function to calculate total amount Purchased'
     
		$total=0;
        $idnum=0;
        //$sqltempcart = mysql_query("select * from tempcart where MemId='".$_SESSION["tempuser"]."'");
		
	    while($rs=mysql_fetch_array($sqltempcart))
		 {
		
        $idnum = $idnum + 1;
		$qty=$rs[3];
		$iid=$rs[4];
         $tempid = $rs[8];

              $prod = mysql_query("Select * From product_details Where id = '$iid'");
                   if($rst=mysql_fetch_array($prod)) 
				   {
					   // $brandid = $rst[10];
		                $id = $rst[0];
		                $pname = $rst[3];
						$psize = $rst[9];
						$thumbnail = $rst[9];
						   $cat_id = $rst[1] ;
		                   $subcat_id = $rst[2] ;
						   $item_price = $rst[12] ;
						   
		                 
				  } 
				  $subtotal = $qty * $item_price;
								$total +=$item_price; 	
				?>
               <tbody> 
              <tr id="cart_td"  style="color: #666; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:12px;">
                <td width="12%" align="left" style="padding-top:5px;">
                  <img src="images/prod3.jpg" style="width:80px; margin:5px; padding:2px; border:1px solid #CCCCCC;"/>
                 </td>
                <td width="27%"><div align="left"><?php echo $pname; ?>    </div></td>
                <td width="11%"><div align="center"><?php echo $psize; ?></div></td>
                <td width="9%"><div align="center"><!--<input type="text" name="qty<?=$idnum?>"  id="qty<?=$idnum?>" size="4" value="<?php echo $qty;?>" /> -->
                <select id="Qty_1" class="<?=$tempid?>" name="Qty_1" data-customdropdown="true">
                <?php $j=1; while($j<=9)
				{ ?>
<option value="<?php echo $j; ?>" ><?php echo $j; ?></option>
<?php $j++; } ?>
</select>
                <input type="hidden" name="txtproductID" value="<?=$iid?>" />
                <input name="itid<?=$idnum?>" id="itid<?=$idnum?>" type="hidden" value="<?=$iid?>" />
                   <input name="ConId"  id="co2" type="hidden" value="<?=$cat_id?>" />
                    <input name="SConId" id="co3" type="hidden" value="<?=$subcat_id?>" />
                    <!--<input name="SSConId"  id="co4" type="hidden" value="<?=$prod_id?>" />-->
				  <input type="hidden" name="idval" value="<?php echo $id; ?>" />
                  <input type="hidden" class="price" value="<?php echo $item_price; ?>" />
 </div></td>
                <td width="13%"><div align="center" style=" color: #4d8958; font-family: "azo-sans",sans-serif;">
                In Stock</div></td>
                <td width="13%"><div align="center">£ <span class="amount" id="pprice<?=$idnum?>">
				<?php echo $item_price; ?></span></div></td>
                
                <td  colspan="2"><b></b>
                  <div align="center"><a href="#" style="TEXT-DECORATION: none"><img src="images/close.png" alt="Remove Item from Cart" style="width:15px;" onclick="return DeleteCart(<?php echo $rs['Tempid']; ?>)" /></a></div>
                  
                  </td>
              </tr>
              <tr  style="color: #666;">
                <td colspan="8"><div style="border-bottom:1px dotted #CCCCCC;"></div></td>
              </tr> </tbody>
               <?php
	}
	?>
              
              
              <tr bgcolor="#CCCCCC">
                <td height="29" colspan="4" valign="bottom" style="padding:10px;"><div align="right"> <h3>ORDER VALUE </h3> </div> </td>
                <td height="29" colspan="3" align="center" bordercolor="#FFFFFF" style="padding:10px;">   
                <h3>£ <span class="tot_price"><?php echo $total; ?></span></h3></td>
              </tr>
              
              <tr  style="color: #666;">
                <td colspan="8"><div style="border-bottom:1px dotted #CCCCCC;"></div></td>
              </tr>

              <tr valign="bottom" bgcolor="#CCCCCC">
                <td height="29" colspan="6" valign="bottom"><div align="left" style="padding:20px;">
               <a href="index.php"> <strong> &laquo; Shop More  </strong> </a></div> </td>
                <td height="29" width="15%" valign="bottom" bordercolor="#FFFFFF"> 
                <a href="checkout.php"><div class="shopbtn">GO TO CHECKOUT</div></a></td>
              </tr>
			  
            </table> <?php } ?>
            
   </td>
  </tr>
</table>

</div>


   