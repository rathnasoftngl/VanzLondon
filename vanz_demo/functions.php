<?php
error_reporting(0);
include_once 'database/config.php';
class User
{
	//Database connect 
	public function __construct()
	{
		$db = new DB_Class();
	}
	//Registration process 
	/*public function register_user($name, $username, $password, $email)
	{
		$password = md5($password);
		$sql = mysql_query("SELECT uid from users WHERE username = '$username' or email = '$email'");
		$no_rows = mysql_num_rows($sql);
		if ($no_rows == 0)
		{
			$result = mysql_query("INSERT INTO users(username, password, name, email) values ('$username', '$password','$name','$email')") or die(mysql_error());
			return $result;
		}
		else
		{
			return FALSE;
		}
	} */
	// Login process
	public function check_login($username, $password)
	{
	 //$pwd = md5($password);
		
		 $result = mysql_query("SELECT * from login WHERE username='$uid' and password = '$pwd'");
		$user_data = mysql_fetch_array($result);
		$no_rows = mysql_num_rows($result);
		if ($no_rows == 1)
		{
			$_SESSION['login'] = true;
			$_SESSION['username'] = $user_data['username'];
			$_SESSION['role'] = $user_data['typ'];
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	// Getting name
	public function get_fullname($uid)
	{
		$result = mysql_query("SELECT name FROM users WHERE uid = $uid");
		$user_data = mysql_fetch_array($result);
		echo $user_data['name'];
	}
	// Getting session 
	public function get_session()
	{
		return $_SESSION['login'];
	}
	// Logout 
	public function user_logout()
	{
		$_SESSION['login'] = FALSE;
		session_destroy();
	}

}
?>