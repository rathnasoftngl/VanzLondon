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
function AddtoCart(vid)
{		
	    //alert("Item has been added to bag and open the bag bubble");	
		
	    //alert(v1);	 
	   //window.location.href ='AddtoTempCart-index.php?ProdID='+v1;
	 //alert("ProdID="+vid);
	$.ajax({
							type: "POST",
						  url: "AddtoTempCart-index.php",
						   data:"ProdID="+vid,
						   success: function(msg){ //alert(msg);
						 
						   if(msg==1)
						   {
							  
							   $('.alert_message').show();
	                           $(".alert_message").fadeToggle(6000);
							   

$("#header_div").load(location.href + " #header_div");

 
						   }
						}
						});

	   //location.reload();
	   //return false; return true; 
	  // window.location.href ='AddtoTempCart-index.php?ProdID='+v1;
 }
/*$(document).ready(function() {

$('#button').click(function(){$('#link').click();
   //In case the page doesn't change although you want it to
})

});*/
</script>

<script>
$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  

</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
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

 
 
<!--header-->
<div class="container-fluid navbar-fixed-top" style="background-color:#000000; z-index:1" id="header_div">
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

<?php  $_SESSION['sessionid']= session_id();
$wval = $_REQUEST['pid'];


 $qry = mysql_fetch_assoc(mysql_query("SELECT p.*,pc.product_name from product_details p inner join product_category pc on pc.pid=p.prod_type where p.id=$wval"));


?>

<div class="container" style="margin-top:110px">
<div class="row">
<ul class="top_list">
<a href="index.php"><li>Home ></li></a>
<a href="product.php?w=<?php echo $qry['prod_type'];?>" ><li><?php echo $qry['product_name']?> ></li></a>
<a href="single.php?pid=<?php echo $wval;?>"><li><?php echo $qry['prod_name']?></li></a></ul>
</div>
</div>




	<div class="container" style="margin-top:20px;">
<?php $i=1; $pid=$_REQUEST['pid'];
			$sel_products = mysql_query("SELECT * from product_details where id=$pid");
			while($exe_products = mysql_fetch_array($sel_products))
			{
			?>
            
			<div class="col-md-12">
			<div class="col-md-6 single-top">	
				<div class="flexslider">
							        <!-- FlexSlider -->
										<script src="js/imagezoom.js"></script>
										  <script defer src="js/jquery.flexslider.js"></script>
										<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

										<script>
										// Can also be used with $(document).ready()
										$(window).load(function() {
										  $('.flexslider').flexslider({
											animation: "slide",
											controlNav: "thumbnails"
										  });
										});
										</script>
									<!-- //FlexSlider-->

							  <ul class="slides">
								<li data-thumb="images/prod1.jpg">
									<div class="thumb-image"> <img src="images/prod1.jpg" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="images/prod2.jpg">
									 <div class="thumb-image"> <img src="images/prod2.jpg" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="images/prod3.jpg">
								   <div class="thumb-image"> <img src="images/prod3.jpg" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="images/prod1.jpg">
								   <div class="thumb-image"> <img src="images/prod1.jpg" data-imagezoom="true" class="img-responsive"> </div>
								</li>
							  </ul>
							<div class="clearfix"></div>
				</div>	

			</div>	<P><div class="alert_message" style="display:none;border-color: #00ff00; background-color: #f0fff0;
    color: #000000; 
    background-repeat: no-repeat;
    border: 2px solid;
    margin: 3em 0 0;
    padding: 2em 2em 2em 26px; font-size:14px; width:auto; float:right;">
            Item has been added to bag and open the bag bubble</div></P>
					<div class="col-md-6 single-top-in">
						<div class="single-para">
							<div class="para-grid">
                            
                            
								<span class="add-to"><img src="images/prod1.jpg" style="width:80px; height:auto; border:1px solid #CCCCCC; padding:2px;"> <?php echo $exe_products['prod_name']?></span>
								<p class="cart-to">£ <?php echo $exe_products['prod_price']?></p>					
								<div class="clearfix"></div>
							 </div>
						  <div class="available">
                          <!--<div class="col-md-3">Product Code</div>
                           <div class="col-md-9"><p style="text-align:justify;">TB-001</p><br /></div>-->
                           <div class="col-md-4">Product Code</div>
                           <div class="col-md-8"><p style="text-align:justify;"><?php echo $exe_products['prod_code']?></p><br /></div>
                            <div class="col-md-4">Product Type</div>
                           <div class="col-md-8"><p style="text-align:justify;"><?php echo $exe_products['prod_name']?></p><br /></div>
                           <div class="col-md-4">Product Category</div>
                           <div class="col-md-8"><p style="text-align:justify;"><?php echo $exe_products['prod_name']?></p><br /></div>
                           <div class="col-md-4">Product Material</div>
                           <div class="col-md-8"><p style="text-align:justify;"><?php echo $exe_products['prod_material']?></p><br /></div>
                          <div class="col-md-4">Size</div>
                          		<div class="col-md-8"><select style="width:100%;">
									<option>Large</option>
									<option>Medium</option>
									<option>small</option>
									<option>Large</option>
									<option>small</option>
								</select><br /><br /></div>
                          <div class="col-md-4">Colour</div>
                           		<div class="col-md-8"><select style="width:100%;">
									<option>Black</option>
									<option>Brown</option>
								</select><br /><br />  </div>
                           <div class="col-md-4">Description</div>
                           <div class="col-md-8"><p style="text-align:justify;">
						   <?php echo $exe_products['prod_des']?></p><br /></div>
                           <div class="col-md-4">Stock</div>
                           <div class="col-md-8"><p style="text-align:justify;">In stock</p><br /></div>
                              
						</div>
							
								<!--<a href="#" class="cart-an ">Add to Bag</a>-->
                                 <a class="cart-an" href="#"  onclick='AddtoCart(<?php echo $pid;?>)'>Add To Bag</a>
							<div class="share">
						</div>
						</div>
					</div>
				<div class="clearfix"> </div>
 <!--<ul id="flexiselDemo1">
			<li><img src="images/pi.jpg" /><div class="grid-flex"><a href="#">Lorem</a><p>Rs 850</p></div></li>
			<li><img src="images/pi1.jpg" /><div class="grid-flex"><a href="#">Amet</a><p>Rs 850</p></div></li>
			<li><img src="images/pi2.jpg" /><div class="grid-flex"><a href="#">Simple</a><p>Rs 850</p></div></li>
			<li><img src="images/pi3.jpg" /><div class="grid-flex"><a href="#">Text</a><p>Rs 850</p></div></li>
			<li><img src="images/pi4.jpg" /><div class="grid-flex"><a href="#">Sit</a><p>Rs 850</p></div></li>
		 </ul>-->
	  
<!---->

<!---->
			</div> <?php } ?>
			<div class="clearfix"> </div>
		</div>
<?php include("footer.php"); ?>                     

	</div>
</body>

</html>
  <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>