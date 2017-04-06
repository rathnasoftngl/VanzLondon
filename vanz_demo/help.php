<?php 
session_start();

//ini_set('error_reporting', E_ALL);
include('database/config.php');
include_once 'functions.php';
$user = new User();

include("tempproduct.php"); 

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from p.w3layouts.com/demos/mihstore/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Jul 2016 12:28:24 GMT -->
<head>
<title>Vanz London</title>
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



<div class="container" style="margin-top:110px;">
	<div class="row">
		<div class="col-md-12" align="center">
			<img class="img-responsive" src="images/page_under_construction.png" alt=""  height="200" 
            style="width:50%" >
		</div>
	</div>
</div> 


          
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
        source: 'ajax.php'
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