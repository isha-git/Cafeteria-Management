/*
github.com/isha-git
github.com/jagriti04
github.com/shripriyamaheshwari
*/
 
 <?php
session_start();

//if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
//{
	//if ($_POST['submit'] == 'Sign in')
	//{
		//require('firstpage.php'); 
		$link = mysql_connect('dbms.iiitdmj.ac.in', 'xxxxx', 'xxxxx');
		if(!$link)
		{
			die('Failed to connect to server: ' . mysql_error());
		}
		//Select database
		$db = mysql_select_db('xxxxx');
		if(!$db)
		{
			die("Unable to select database");
		}
		//Prepare query
		
		$roll = $_POST['roll'];
		$pass = $_POST['pass'];
		
		$query = "SELECT roll_no
				  FROM user
				  WHERE roll_no = '$roll'
				  AND password = '$pass'";
				  
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);

			if($row == FALSE)
			{
				include('Incorrect.php');
			}
			else
			{
				include("firstpagelater.php");
			} 
	//}
//}
?>
