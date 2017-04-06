<?php
//include("database/db.php");
 $r="truncate table tempproducttable";
$sq2=mysql_query($r);
 $val = 6; 
 $sql="select p.* from product_details as p ";
$sql2=mysql_query($sql);
while($rs=mysql_fetch_array($sql2))
{
	 $sq="insert into tempproducttable(prid,cid,scid,MRP,stock) values('$rs[0]','$rs[1]','$rs[2]','$rs[12]','$rs[10]')";
	$sq2=mysql_query($sq);
	
	
}

$sessionid = session_id();

?>