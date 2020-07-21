/*
github.com/isha-git
github.com/jagriti04
github.com/shripriyamaheshwari
*/

<?php
session_start();

//if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
//{
	if ($_POST['submit'] == 'Place Order')
	{
		//require('firstPage.php');
		$link = mysql_connect('dbms.iiitdmj.ac.in', 'xxxxxx', 'xxxxxx');
		if(!$link)
		{
			die('Failed to connect to server: ' . mysql_error());
		}
		//Select database
		$db = mysql_select_db('xxxxxx');
		if(!$db)
		{
			die("Unable to select database");
		}
		//Prepare query
		$bill = 0;
		$Coffee = $_POST['Coffee'];
		$Single_Tea = $_POST['Single_Tea'];
		$Double_Tea = $_POST['Double_Tea'];
		$Milk = $_POST['Milk'];
		$Haldi_Milk = $_POST['Haldi_Milk'];
		$Yippie = $_POST['Yippie'];
		$Patty = $_POST['Patty'];
		$Parantha = $_POST['Parantha'];
		$Aaloo_Sabji = $_POST['Aaloo_Sabji'];
		$Bhindi_Sabji = $_POST['Bhindi_Sabji'];
		$Tawa_Roti = $_POST['Tawa_Roti'];
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Coffee'
				  AND shop_name = 'Hall 1 Canteen'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Coffee);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Single Tea' and shop_name = 'Hall 1 Canteen'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Single_Tea);
		
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Double Tea' and shop_name='Hall 1 Canteen'";
		$result = mysql_query($query);
	
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Double_Tea);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Milk'and shop_name='Hall 1 Canteen'";
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Milk);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Haldi Milk'and shop_name='Hall 1 Canteen'";
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Haldi_Milk);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Yippie'and shop_name='Hall 1 Canteen'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Yippie);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Patty'and shop_name='Hall 1 Canteen'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Patty);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Parantha'and shop_name='Hall 1 Canteen'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Parantha);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Aaloo Sabji'and shop_name='Hall 1 Canteen'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Aaloo_Sabji);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Bhindi Sabji'and shop_name='Hall 1 Canteen'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Bhindi_Sabji);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Tawa Roti'and shop_name='Hall 1 Canteen'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Tawa_Roti);
		
		echo $bill;
	}
//}
?>