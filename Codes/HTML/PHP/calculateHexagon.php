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
		$bill = 0;
		$Coffee = $_POST['Coffee'];
		$Single_Tea = $_POST['Single_Tea'];
		$Double_Tea = $_POST['Double_Tea'];
		$Samosa = $_POST['Samosa'];
		$Patty = $_POST['Patty'];
		$Stuffed_Patty= $_POST['Stuffed_Patty'];
		$Aaloo_Vada = $_POST['Aaloo_Vada'];
		$Sandwich = $_POST['Sandwich'];
		$Parantha = $_POST['Parantha'];
		$Maggi = $_POST['Maggi'];
		$Schezwan_Rice = $_POST['Schezwan_Rice'];
		$Schezwan_Noodles = $_POST['Schezwan_Noodles'];
		
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Coffee'
				  AND shop_name = 'Hexagon'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Coffee);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Single Tea' and shop_name = 'Hexagon'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Single_Tea);
		
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Double Tea' and shop_name='Hexagon'";
		$result = mysql_query($query);
	
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Double_Tea);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Samosa' and shop_name='Hexagon'";
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Samosa);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Patty' and shop_name='Hexagon'";
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Patty);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Stuffed Patty' and shop_name='Hexagon'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Stuffed_Patty);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Aaloo Vada' and shop_name='Hexagon'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Aaloo_Vada);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Sandwich' and shop_name='Hexagon'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Sandwich);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Parantha' and shop_name='Hexagon'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Parantha);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Maggi' and shop_name='Hexagon'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Maggi);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Schezwan Rice' and shop_name='Hexagon'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Schezwan_Rice);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Schezwan Noodles' and shop_name='Hexagon'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Schezwan_Noodles);
	
		
		
		
		echo $bill;
	}
//}
?>

		
