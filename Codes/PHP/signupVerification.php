/*
github.com/isha-git
github.com/jagriti04
github.com/shripriyamaheshwari
*/

<?php
session_start();

//if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
//{
	//if ($_POST['submit'] == 'Sign Up')
	
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
		$Name = $_POST['Name'];
		$Roll_no = $_POST['Roll_no'];
		$password = $_POST['password'];
		$query = "select roll_no from user where roll_no = '$Roll_no' ";
		$result = mysql_query($query);
		
		
		 //if($result == true)
		 //{
			//include('signin.php');
			//echo'Roll No already exists. Please Sign in with a different roll no';
		 //}
		
		
		
						
			
		
		// else
		 //{
			$query = "INSERT INTO user(roll_no,name,shop_name,amount,password) VALUES ('$Roll_no','$Name','unknown',0,'$password')"; 
			 $results = mysql_query($query);
			 if($results == false)
			 {
				 include('signin.php');
				 echo'Roll no already exists. Please try again.';
				 
			 }
			 else{
            include('signin.php');
			 echo'You have successfully registered. Kindly sign up to process further.';}				
		 //}
	
	
		/*else
		{
			header("location: signin.php"); 
            exit(); 
		}*/
		?>