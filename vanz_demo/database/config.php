<?php
/*define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'vanz_londondb');  */
//Online Data :

/*define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'rathn9ry_vanzlon');
define('DB_PASSWORD', 'VanzLondon#123');
define('DB_DATABASE', 'rathn9ry_vanzdb');*/

define('DB_SERVER', 'db676206635.db.1and1.com');
define('DB_USERNAME', 'dbo676206635');
define('DB_PASSWORD', 'VanzLondon#123');
define('DB_DATABASE', 'db676206635'); 

class DB_Class
{
	function __construct()
	{
		$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or
		die('Oops connection error -> ' . mysql_error());
		mysql_select_db(DB_DATABASE, $connection)
		or die('Database error -> ' . mysql_error());
	}
	
}

?>
