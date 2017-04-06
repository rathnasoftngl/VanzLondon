<?php
session_start();
error_reporting(0);
//ini_set('error_reporting', E_ALL);
include('database/config.php');
include_once 'functions.php';
$user = new User();

//print_r($_POST); exit; 
if(($_REQUEST['ccapcha'] == $_SESSION['vercode']))
{  
					            $_REQUEST['ccapcha'];
								$today=date('Y-m-d'); $total=0;   $idnum=0;
								$name  = $_REQUEST['cname']; 
								$mail = $_REQUEST['cemail'];
								$cartid = $_SESSION['cartid'];
							
								$error= '';

			  $orderid = trim($_POST["orderid"]); 
			  //memid = trim($_POST["memid"]);
              $cartorderid = trim($_SESSION["orderID"]);	
			  $sessionid = $_SESSION['sessionid'];	
			
	if($_SESSION["tempuser"]!="" && $_SESSION["usr"]=="")
	{ 
	$sql1 = "select * from tempcart where OrderDate='$today' 
	AND MemId='".$_SESSION["tempuser"]."' AND session_id='".$sessionid."'";
	$sqltempcart = mysql_query($sql1);
	//echo "select * from tempcart where MemId='".$_SESSION["tempuser"]."'";
	}
	else if($_SESSION["tempuser"]!="" && $_SESSION["usr"]!="")
	{
		$sql1 = "select * from tempcart where MemId='".$_SESSION["tempuser"]."' OR  MemId='" . $_SESSION["usr"] ."' AND OrderDate='$today' AND session_id='".$sessionid."' "; 
	$sqltempcart = mysql_query($sql1);
	//echo "select * from tempcart where MemId='".$_SESSION["tempuser"]."' OR  MemId='" . $_SESSION["usr"] ."'";
	}
	
	
	$formcontent = '<html><head><title>Vanz London</title></head><body>';							
	$formcontent	.= '<table align="center" width="600px" style="border-top:2px solid #999999;">
<tr><td align="center"><span style="font-size:36px; padding-bottom:10px;">VANZ LONDON</span></td></tr>
<tr><td>
    <table style="width:100%;">
    <tr bgcolor="#CCCCCC">
      <td colspan="5" align="center" style="padding:10px; background:#CCCCCC; color:#000000; font-weight:bold;">ORDER FORM</td>
    </tr>';
	$formcontent.='<tr>
      <td width="18%" style="padding:5px; color:#0033FF;">Name</td>
      <td width="32%" style="padding:5px; color:#FF0000;">'.$name.'</td>
      <td width="10%" style="padding:5px;">&nbsp;</td>
      <td width="15%" style="padding:5px; color:#0033FF; font-weight:bold;">ORDER ID</td>
      <td width="20%" style="padding:5px; color:#FF0000; font-weight:bold;">'.$cartorderid.'</td>
    </tr>';
	$formcontent.= '<tr>
      <td style="padding:5px; color:#0033FF;">Mail Id</td>
      <td style="padding:5px; color:#FF0000;">'.$mail.'</td>
      <td style="padding:5px;">&nbsp;</td>
      <td style="padding:5px; color:#0033FF; font-weight:bold;">DATE</td>
      <td style="padding:5px; color:#FF0000; font-weight:bold;">'.date('d-m-Y').'</td>
    </tr>
    <tr bgcolor="#EBEBEB">
      <td style="padding:5px;">ITEM </td>
      <td style="padding:5px;">ITEM NAME</td>
      <td style="padding:5px;">SIZE</td>
      <td style="padding:5px;">QTY</td>
      <td style="padding:5px;">ORDER VALUE</td>
    </tr>';
	
	if(mysql_num_rows($sqltempcart)>0)
		{
			 while($rs=mysql_fetch_array($sqltempcart))
		 {
		
		
        $idnum = $idnum + 1;
		$qty=$rs[3];
		$iid=$rs[4];
		
		$get_qty = mysql_query("Select OrderId,itemQty From `orderform` Where cartorderid = '".$cartorderid."' and itemId='$iid'");
        $qty_exe=mysql_fetch_row($get_qty);
		
		$prod = mysql_query("Select a.* From product_details a  Where a.id = '$iid'");
                   if($rst=mysql_fetch_array($prod)) 
				   {
					   
		                	$id = $rst[0];
		                	$iname = $rst[3];
						   	$isize = $rst['prod_size']; 
						   	$item_price = $rst['prod_price'] ;
							$qty=$qty_exe[1];
							$subtotal = $qty * $item_price;
							
		
	$formcontent.= '<tr><td colspan="5"><div style="border-bottom:1px solid #333333;"></div></td></tr>
    <tr>
      <td style="padding:5px;"><img src="http://vanzlondon.co.uk/images/prod3.jpg" style="width:100px; margin:5px; padding:2px; border:1px solid #CCCCCC;"/></td>
      <td style="padding:5px;">'.$iname.'</td>
      <td style="padding:5px;">'.$isize.'</td>
      <td style="padding:5px;">'.$qty.'</td>
      <td style="padding:5px;">£ '.$item_price.'</td>
    </tr>
    <tr><td colspan="5"><div style="border-bottom:2px dotted #CCCCCC;"></div></td></tr> ';
	$total +=$subtotal;  $qty_tot +=$qty; 
	} 
				  				
							
		 } }    
		 
	$formcontent.='<tr><td colspan="5"><div style="border-bottom:2px solid #CCCCCC;"></div></td></tr>
     <tr>
      <td colspan="2">&nbsp;</td>
      <td style="font-weight:bold; font-size:18px;">Total</td>
      <td style="padding:5px;" style="font-weight:bold; font-size:18px;">'.$qty_tot.'</td>
      <td style="padding:5px;" style="font-weight:bold; font-size:18px;">£ '.$total.'</td>
    </tr>
	<tr><td colspan="5"><div style="border-bottom:1px dashed #CCCCCC;"></div></td></tr>
     <tr bgcolor="#F0F0F0">
      <td colspan="5"><p style="text-align:center; padding:7px;"><strong>Note : 
	  </strong>This is Automatic E-mail Dont reply to this E-mail Id.<br />
       For Enquiry / Information Please Contact 144 CAMBERWELL ROAD, LONDON, SE5 OEE UK.<br />vanzlondon@testperfectlimited.com<br />+044 7984 433704</p></td>
    </tr>
	
    </table>
</td></tr>
<tr><td><img src="http://vanzlondon.co.uk/images/footer.png"></td></tr>
</table></body> </html>';
	//$formcontent.= '<tr><td><b> From    :</b></td><td>" .$name. "</td></tr>';
	//$formcontent .= '<tr><td><b> Email   :</b></td><td>" .$mail. "</td></tr></table> </body> </html>';
	
	$insert_cart = mysql_query("Update `orderform` SET `Cname`='$name', `Cemail`='$mail', `total_amt`='$total', `is_paid`='0' WHERE cartorderid='$cartorderid'   ");
	
									
			$recipient = $mail;
									$subject = "Order Form from VanzLondon";
									
																		
									//$mailheader = 'From: info@rathnasoftnet.com' . "\r\n" . 
									//'Reply-To: <'.$mail.'>';
									
									$headers = 'From: info@vanzlondon.co.uk' . "\r\n" .
    	'Reply-To: info@vanzlondon.co.uk' . "\r\n" .
		//'Cc: sahayajeenath@gmail.com' . "\r\n" .
		'Bcc: rathnasoft.ngl@gmail.com, rowthrinath.natarajan@testperfectlimited.com' . "\r\n" .
		'MIME-Version: 1.0' . "\r\n" .
		'Content-type: text/html; charset=iso-8859-1' . "\r\n" . 
    	'X-Mailer: PHP/' . phpversion();
		
		
		
									if(empty($error))
										{
											$mail = mail($recipient, $subject, $formcontent, $headers); 
											if($mail) {
									//	echo '<p class="succ_m">You are applied successfully</p>';
			$del_temcart = mysql_query("DELETE FROM tempcart where OrderId='".$cartorderid."' ");
			 session_destroy(); 
			 
									echo '1';
											}
											else {
											//echo '<p class="err_m">Applied Failed!</p>';
											echo '2';
											}
										}
										else {
										echo $error;
										} 
																	
									//echo 1; 								
								
								
								
								
							  }
							  
							  else
							  {
	echo 0;
}
	

?>