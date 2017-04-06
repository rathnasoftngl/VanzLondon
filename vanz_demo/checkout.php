<?php 
session_start();

//ini_set('error_reporting', E_ALL);
include('database/config.php');
include_once 'functions.php';
$user = new User();

 
?>

<!DOCTYPE html>
<html>

<!-- Mirrored from p.w3layouts.com/demos/mihstore/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Jul 2016 12:28:24 GMT -->
<head>
<title>Shopping</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="online shopping" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!--//slider-script-->
<script>
$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>
$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>
<script>
$(document).ready(function(c) {
	$('.alert-close2').on('click', function(c){
		$('.message2').fadeOut('slow', function(c){
	  		$('.message2').remove();
		});
	});	  
});
</script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>	
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>				

</head>
<body>
<script async type='text/javascript' src='../../../../cdn.fancybar.net/ac/fancybar6a2f.js?zoneid=1502&amp;serve=C6ADVKE&amp;placement=w3layouts' id='_fancybar_js'></script>

 
 <script language="javascript">
$(document).ready(function(){

$(".refresh").click(function () {
    $(".imgcaptcha").attr("src","demo_captcha.php?_="+((new Date()).getTime()));
    
});


 $('#Checkout_form').submit(function() { 
   
 if($('#name').val()=='')
 {
	 alert('Name Missing'); return false; 
 }
 else if($('#email').val()=='')
 {
	 alert('Enter Email Address'); return false; 
 }
 
 
 else {
 
	$.post("submit_demo_captcha.php?"+$("#Checkout_form").serialize(), { }, function(response){ alert(response);
        if(response==1)
		{
           $(".imgcaptcha").attr("src","demo_captcha.php?_="+((new Date()).getTime()));
           
           alert("Data Submitted Successfully!");
		   clear_enform();
		   window.location.reload();
        }
		else if(response==2) { alert('Invalid data');}
		else{
           alert("wrong captcha code!"); clear_form();
        }
	}); }
	return false;
    });

function clear_enform()
{
	$('#name').val('');
 
 $('#email').val('');
 
 
 
$("#capcha").val('');
 
}

 function clear_form()
     {
     
		$("#captcha").val('');
     }
	 
    

});

</script>

<!--header-->
<div class="container-fluid navbar-fixed-top" style="background-color:#000000; z-index:1">
	<div class="container">
    	<div class="row">
			<div class="hidden-xs hidden-sm">
            <div class="col-md-3">
				<a href="index.php"><span style="font-size:36px; color:#FFFFFF; padding-bottom:10px;">VANZ LONDON</span><br /><br />	</a>
			</div>
            </div>
            
            <div class="hidden-md hidden-lg">
            <div class="col-xs-9 col-sm-5">
				<a href="index.php"><span style="font-size:26px; color:#FFFFFF; padding-bottom:10px;">VANZ LONDON</span>	</a>
			</div>
            <div class="col-xs-3 col-sm-1">
				<img src="images/flag.jpg" class="img-responsive" style="margin-top:10px;" />
			</div>
            </div>
            
            <div class="col-md-4 col-xs-9 col-sm-6">
            <form id="newsearch" name="newsearch" action="product.php" method="get"  data-link-name="Search" class="navbar-form navbar-left form-inline">
           
        	<div class="form-group">
          	<!--<input type="text" class="form-control key" placeholder="Search by product, item number or brand" required="required" spellcheck="false" autocomplete="off" >-->
            <input id="sli_search_1" class="form-control key" name="w" value="" placeholder="Search by product, brand" required spellcheck="false"  type="text">
<!--<input name="isort" value="score" type="hidden">
<input id="search-af" name="af" type="hidden">
<input class="SearchButton" value="" title="Search Items" type="submit">-->
        	</div>
        	<!--<button type="submit" class="btn btn-default"> </button>-->
      		</form>

            </div>
            
            <div class="col-md-1">
			<?php include("Tempcart.php"); 
			if($itemsinbasket>0) include("head_cart.php");
			else  include("head_cart1.php"); ?>
            </div>	
            
            <div class="col-md-3  col-xs-9">        
			<ul class="header-in">
				<li><a href="#">MY ACCOUNT</a> </li>
				<li><a href="help.php">HELP</a></li>
				<?php if($itemsinbasket>0) { ?><li style="border:1px solid #333333; margin-left:5px; background:#404040; border-radius:10px; padding:1px;"><a href="checkout.php"> CHECK OUT</a></li>
                <?php } else { ?>
                <li style="border:1px solid #333333; margin-left:5px; background:#404040; border-radius:10px; padding:1px;"><a style="color:#A4A4A4"> CHECK OUT</a></li> <?php }?>
                
			</ul>
		</div>

                <div class="col-md-1 hidden-xs"><img src="images/flag.jpg" class="img-responsive" style="margin-top:10px;" /></div>
        

		<div class="col-md-8 col-md-offset-4  col-xs-3">
				<div class="top-nav">
                <div class="hidden-md hidden-lg">
              <?php include("side_menu.php");  ?>
				</div>
                
                <div class="hidden-xs hidden-sm">
				<?php include("menu.php")?>
                </div>
                </div>
		</div>
</div>
</div>
</div>

<div class="container" style="margin-top:110px">
<div class="row">
<ul class="top_list">
<a href="index.php" title="Vanz London"><li>Home ></li></a>
<a href="checkout.php"><li>Checkout ></li></a></ul>
</div>
</div>

<?php date_default_timezone_set("Asia/Kolkata");  $today_time=date('Y-m-d h:i:s'); 
$today = date('Y-m-d'); $sessionid = session_id();
	if($_SESSION["tempuser"]!="" && $_SESSION["usr"]=="")
	{ 
	$sqltempcart = mysql_query("select * from tempcart where OrderDate='$today' 
	AND MemId='".$_SESSION["tempuser"]."' AND session_id='".$sessionid."'");
	
	while($exe_temp = mysql_fetch_array($sqltempcart))
	{
		$insert_ordertbl = mysql_query("INSERT INTO `orderform` (`memid`, `cartorderid`, `itemId`, 
		`itemQty`,  `Ordered_at`) VALUES 
		('".$exe_temp['MemId']."', '".$exe_temp['OrderId']."', '".$exe_temp['ItemID']."', '".$exe_temp['Qty']."', '$today_time');");
		
		$orid = mysql_insert_id(); $memid = $exe_temp['MemId']; $cartorderid = $exe_temp['OrderId'];
	}
	
	
	
	}
	else if($_SESSION["tempuser"]!="" && $_SESSION["usr"]!="")
	{
	$sqltempcart = mysql_query("select * from tempcart where MemId='".$_SESSION["tempuser"]."' OR  MemId='" . $_SESSION["usr"] ."' AND OrderDate='$today' AND session_id='".$sessionid."'");
	//echo "select * from tempcart where MemId='".$_SESSION["tempuser"]."' OR  MemId='" . $_SESSION["usr"] ."'";
	} ?>
    
<div class="container" style="margin-top:20px;">
	<div class="row">
		<div class="col-md-5">	
        <div class="check_form">
        <h3>Checkout Form</h3>
         <form action="#null" method="post" class="block" id="Checkout_form" enctype="multipart/form-data">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="name" required name="cname">
          </div>
          <div class="form-group">
            <label>Email Id</label>
            <input type="email" class="form-control" id="email" name="cemail" required>
            
            <input type="hidden" name="orderid" id="orderid" value="<?php echo $orid; ?>"/>
<input type="hidden" name="memid" id="orderid" value="<?php echo $memid; ?>"/>
<input type="hidden" name="cartorderid" id="orderid" value="<?php echo $cartorderid; ?>"/>

          </div>
          <div class="form-group">
            <label>Capcha</label>
            <input type="text" class="form-control" id="capcha" name="ccapcha" required>
            <p><img src="demo_captcha.php" class="imgcaptcha" alt="captcha"  />
					&nbsp;<img src="images/media-repeat.png" width="40" height="40" alt="reload" class="refresh" /></p>
          </div>
          <button type="submit" class="btn-default sub_btn">Submit</button>
          &nbsp;
            <input type="reset" name="reset" value="Reset Form" class="btn-default sub_btn">
        </form>		
		</div>
		</div>
        <div class="col-md-7">	
        <div class="check_form">
        <h3>Checkout Summary</h3> <br/>
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
              <!--<tr  style="color: #666;">
                <td colspan="8"><div style="border-bottom:1px dotted #CCCCCC;"></div></td>
              </tr>-->
              <tr style="border-bottom:1px dotted #CCCCCC;" align="center">
                <td class="product_cart">Item </td>
                <td  height="25" class="product_cart">Item Name</td>
                <td class="product_cart" align="center">Size</td>
                <td class="product_cart">Qty</td>
                <!--<td class="product_cart">Availability</td>-->
                <td class="product_cart">ORDER VALUE</td>
                <!--<td width="15%" colspan="2" bordercolor="#FFFFFF"  >&nbsp;</td>-->
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
                <td width="9%"><div align="center"><input type="text" name="qty<?=$idnum?>"  id="qty<?=$idnum?>" size="4" value="<?php echo $qty;?>" readonly /> 
                <!--<select id="Qty_1" class="734-287" name="Qty_1" data-customdropdown="true">
                <?php $j=1; while($j<=9)
				{ ?>
<option value="<?php echo $j; ?>" ><?php echo $j; ?></option>
<?php $j++; } ?>
</select>-->
                <input type="hidden" name="txtproductID" value="<?=$iid?>" />
                <input name="itid<?=$idnum?>" id="itid<?=$idnum?>" type="hidden" value="<?=$iid?>" />
                   <input name="ConId"  id="co2" type="hidden" value="<?=$cat_id?>" />
                    <input name="SConId" id="co3" type="hidden" value="<?=$subcat_id?>" />
                    <!--<input name="SSConId"  id="co4" type="hidden" value="<?=$prod_id?>" />-->
				  <input type="hidden" name="idval" value="<?php echo $id; ?>" />
                  <input type="hidden" class="price" value="<?php echo $item_price; ?>" />
 </div></td>
              <!--  <td width="13%"><div align="center" style=" color: #4d8958; font-family: "azo-sans",sans-serif;">
                In Stock</div></td>-->
                <td width="13%"><div align="center">£ <span class="amount" id="pprice<?=$idnum?>">
				<?php echo $item_price; ?></span></div></td>
                
                <!--<td  colspan="2"><b></b>
                  <div align="center"><a href="#" style="TEXT-DECORATION: none"><img src="images/close.png" alt="Remove Item from Cart" style="width:15px;" onclick="return DeleteCart(<?php echo $rs['Tempid']; ?>)" /></a></div>
                  
                  
                  </td>-->
              </tr>
              <tr  style="color: #666;">
                <td colspan="8"><div style="border-bottom:1px dotted #CCCCCC;"></div></td>
              </tr> </tbody>
               <?php
	}
	?>
              
              
              <tr bgcolor="#CCCCCC">
                <td height="29" colspan="4" valign="bottom" style="padding:10px;"><div align="right"> <h4>ORDER VALUE </h4> </div> </td>
                <td height="29" colspan="3" align="center" bordercolor="#FFFFFF" style="padding:10px;">   <h4>£ 
                <span class="tot_price"><?php echo $total; ?></span></h4></td>
              </tr>
              
              <tr  style="color: #666;">
                <td colspan="8"><div style="border-bottom:1px dotted #CCCCCC;"></div></td>
              </tr>
<tr valign="bottom">
                <!--<td height="29" colspan="6" valign="bottom"><div align="left" style="padding:20px;">
               <a href="index.php"> <strong> &laquo; Shop More  </strong> </a></div> </td>-->
                <td height="29" width="25%" valign="bottom" bordercolor="#FFFFFF" align="right"> 
                <a href="view_cart.php">
                <button class="btn-default sub_btn">View/Edit Bag &raquo;</button>
                <!--<div class="shopbtn" style="background:#009966;">View/Edit Bag &raquo;</div>--></a></td>
              </tr>
              
			  
            </table> <?php } ?>
            
   </td>
  </tr>
</table>

</div>		
		</div>
		</div>
        <!--<div class="col-md-6">
        <div class="btn_cont">Continue</div>
        </div>-->
	</div>
</div>

		<!---728x90--->
<?php include("footer.php"); ?>                     



	</div>
</body>

</html>
<link rel="stylesheet" href="css/jquery-ui.css">
<!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(function() {
    $( "#sli_search_1" ).autocomplete({
        source: 'autocomplete.php'
    })
	 .data("uiAutocomplete")._renderItem = function (ul, item) {
        var newText = String(item.value).replace(
                new RegExp(this.term, "gi"),
                "<span class='ui-state-highlight'>$&</span>");

        return $("<li></li>")
            .data("item.autocomplete", item)
            .append("<a>" + newText + "</a>")
            .appendTo(ul);
    };
});
</script>