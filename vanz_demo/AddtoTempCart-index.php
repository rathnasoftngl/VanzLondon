<?php session_start();
require('database/config.php');
include_once 'functions.php';
$user = new User();
$sessionid = session_id();
error_reporting(0);

if(isset($_REQUEST["ProdID"]))
{

$ItmId=$_REQUEST["ProdID"];


$Checkout="N";
$qty = 1;
$sessionid1 = $_SESSION['sessionid'];
 
/*echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
    exit; */


	
function createUser($sessionid1)
{
	
	$selque = mysql_query("SELECT * from tempcart");
	if(mysql_num_rows($selque)>0)
	{
		
	$seltemp=mysql_query("Select Tempid From tempcart where session_id='".$sessionid1."'");
	
	if(mysql_num_rows($seltemp)>0)
	{
		$_SESSION["tempuser"] = $_SESSION["tempuser"];
	}
	else 
	{ 
	$seltemp2=mysql_query("Select MemId,Tempid From tempcart order by Tempid DESC limit 1");
	$memid2=mysql_fetch_array($seltemp2);
	 
	 $memid = $memid2['MemId'];
	
	$explodeTM=explode('TM',$memid); 
	 $expldeval=$memid2['Tempid']+1;  
	$mid="TM" .$expldeval;
	$_SESSION["tempuser"]=$mid;
	} 
	//else $_SESSION["tempuser"] = $_SESSION["tempuser"]; }
	
	
}
else
	{
	$mid="TM1";
	 $_SESSION["tempuser"]=$mid;
	}
	
	return $_SESSION["tempuser"]; 
	//echo $_SESSION["tempuser"]; exit;
}



function createOrderno()
{
	
	$seloid=mysql_query("Select cartorderid From `orderform` order by OrderId desc limit 1");
	if(mysql_num_rows($seloid)>0)
	{
	$fetchoid=mysql_fetch_array($seloid);
	$explodePSOD=substr($fetchoid[0],5);
	$explodeoid=$explodePSOD+1;
	 $oid="VNZLN" .$explodeoid; 
	 $_SESSION["orderID"] = $oid;
	}
	else
	{
	 $oid="VNZLN1";
	 $_SESSION["orderID"] = $oid;
	}
}

	

		$tUnixTime = time();
		$sGMTMySqlString = gmdate("Y-m-d H:i:s", $tUnixTime);
		$tParsedTime = strtotime($sGMTMySqlString);
		$fUTCOffset = +5.50;
		$tt=gmdate("Y-m-d H:i", $tUnixTime + $fUTCOffset * 3600);
		$arrval = explode(' ',$tt);
		$time = $arrval[1];
		$today=$arrval[0];
		$dateandtime=$today . "" .$time;
	    
		/* $rs_price=mysql_query("SELECT * FROM applicationthree WHERE pid ='$ItmId'"); 
	   	 if($prow=mysql_fetch_array($rs_price)) { // LOOP 1
           $MRP = $prow[2];
		   $discount_MRP = $prow[3];
		   $stock = $prow[7];
		   } */
		
		createOrderno();
		 $tmpid = createUser($sessionid1); 
         
 	$psql =mysql_query("Insert into tempcart(MemId, OrderId, session_id, ItemID, OrderDate, Qty, Checkout)values
	('" . $tmpid ."','" . $_SESSION["orderID"] . "','".$sessionid."','$ItmId','$tt','$qty','$Checkout')");

 
 $_SESSION['cartid'] = mysql_insert_id(); 

echo "1";
}
?>
