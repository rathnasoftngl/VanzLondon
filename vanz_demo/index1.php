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

 
<!--header-->

<?php include("header.php"); ?>


<div class="container" style="margin-top:115px;">
	<div class="row">
		<div class="col-md-12">
				<!--<img class="img-responsive" src="images/banner.jpg" alt="" style="width:100%;" >-->
                <?php include("slider.html"); ?>
		</div>
	</div>
</div>            

<div class="container" style="margin-top:15px;">
	<div class="row">
		<div class="col-md-3">
        <div class="ind_prod">
			<img class="img-responsive" src="images/col1.jpg" alt="" style="width:100%;" >
            <a href="#"><p class="ind_shop">Shop Now</p></a>
		</div>
        </div>
		<div class="col-md-3">
        <div class="ind_prod">
			<img class="img-responsive" src="images/col2.jpg" alt="" style="width:100%;" >
            <a href="#"><p class="ind_shop">Shop Now</p></a>
		</div>
        </div>
		<div class="col-md-3">
        <div class="ind_prod">
			<img class="img-responsive" src="images/col3.jpg" alt="" style="width:100%;" >
            <a href="#"><p class="ind_shop">Shop Now</p></a>
		</div>
        </div>
		<div class="col-md-3">
        <div class="ind_prod">
			<img class="img-responsive" src="images/col4.jpg" alt="" style="width:100%;" >
            <a href="#"><p class="ind_shop">Shop Now</p></a>
		</div>
        </div>
	</div>
</div>            


<div class="container" style="margin-top:15px;">
	<div class="row">
		<div class="col-md-12">
			<img class="img-responsive" src="images/shoes_banner.jpg" alt="" style="width:100%;" >
		</div>
	</div>
</div>
<?php include("footer.php"); ?>                     



	</div>
</body>

</html>