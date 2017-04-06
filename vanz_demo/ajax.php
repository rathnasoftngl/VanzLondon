<?php
    //database configuration
   /* $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'vanz_londondb'; */
    
    $dbHost = 'db676206635.db.1and1.com';
    $dbUsername = 'dbo676206635';
    $dbPassword = 'VanzLondon#123';
    $dbName = 'db676206635';



    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT * FROM product_category WHERE product_name LIKE '".$searchTerm."%' 
	ORDER BY pid ASC") or die(mysql_error());
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['product_name'];
    }
    
    //return json data
    echo json_encode($data);
?>