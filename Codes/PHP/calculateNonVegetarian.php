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
		$Anda_Bhurji = $_POST['Anda_Bhurji'];
		$Boiled_Egg = $_POST['Boiled_Egg'];
		$Bread_Omelette = $_POST['Bread_Omelette'];
		$Chicken_Biryani = $_POST['Chicken_Biryani'];
		$Chicken_Momo = $_POST['Chicken_Momo'];
		$Chicken_Noodles = $_POST['Chicken_Noodles'];
		$Chicken_Rice = $_POST['Chicken_Rice'];
		$Chicken_Roll = $_POST['Chicken_Roll'];
		$Egg_Roll = $_POST['Egg_Roll'];
		$Omelette = $_POST['Omelette'];
		$Veg_Biryani = $_POST['Veg_Biryani'];
		$Veg_Manchurian = $_POST['Veg_Manchurian'];
		$Veg_Momo = $_POST['Veg_Momo'];
		$Veg_Noodles = $_POST['Veg_Noodles'];
		$Veg_Rice = $_POST['Veg_Rice'];
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Anda Bhurji'
				  AND shop_name = 'Non Veg Shop'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Anda_Bhurji);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Boiled Egg' and shop_name = 'Non Veg Shop'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Boiled_Egg);
		
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Bread Omelette' and shop_name='Non Veg Shop'";
		$result = mysql_query($query);
	
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Bread_Omelette);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Chicken Biryani'and shop_name='Non Veg Shop'";
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Chicken_Biryani);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Chicken Momo'and shop_name='Non Veg Shop'";
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Chicken_Momo);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Chicken Noodles'and shop_name='Non Veg Shop'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Chicken_Noodles);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Chicken Rice'and shop_name='Non Veg Shop'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Chicken_Rice);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Chicken Roll'and shop_name='Non Veg Shop'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Chicken_Roll);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Egg Roll'and shop_name='Non Veg Shop'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Egg_Roll);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Omelette'and shop_name='Non Veg Shop'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Omelette);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Veg Biryani'and shop_name='Non Veg Shop'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Veg_Biryani);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Veg Manchurian'and shop_name='Non Veg Shop'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Veg_Manchurian);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Veg Momo'and shop_name='Non Veg Shop'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Veg_Momo);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Veg Noodles'and shop_name='Non Veg Shop'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Veg_Noodles);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Veg Rice'and shop_name='Non Veg Shop'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Veg_Rice);
		
		echo $bill;
	}
//}
?>

		
