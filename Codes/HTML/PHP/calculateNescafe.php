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
		$db = mysql_select_db('xxxx');
		if(!$db)
		{
			die("Unable to select database");
		}
		//Prepare query
		$bill = 0;
		$Coffee = $_POST['Coffee'];
		$Hot_Chocolate = $_POST['Hot_Chocolate'];
		$Mochaccino = $_POST['Mochaccino'];
		$Ice_Tea = $_POST['Ice_Tea'];
		$Frappe = $_POST['Frappe'];
		$Black_Coffee = $_POST['Black_Coffee'];
		$Cappuccino = $_POST['Cappuccino'];
		$Chocolate_Shake = $_POST['Chocolate_Shake'];
		$Double_Coffee = $_POST['Double_Coffee'];
		$Double_Hot_Chocolate = $_POST['Double_Hot_Chocolate'];
		$Hot_Cup_Soup = $_POST['Hot_Cup_Soup'];
		$Latte = $_POST['Latte'];
		//$Lemon_Tea = $_POST['Lemon_Tea'];
		$Masala_Tea = $_POST['Masala_Tea'];
		$Maggi = $_POST['Maggi'];
		$Masala_Maggi = $_POST['Masala_Maggi'];
		$Tomato_Maggi = $_POST['Tomato_Maggi'];
		$Cheese_Maggi = $_POST['Cheese_Maggi'];
		$Cheese_Pasta = $_POST['Cheese_Pasta'];
		$Tomato_Pasta = $_POST['Tomato_Pasta'];
		$Masala_Pasta = $_POST['Masala_Pasta'];
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Coffee'
				  AND shop_name = 'Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Coffee);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Hot Chocolate' and shop_name = 'Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Hot_Chocolate);
		
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Mochaccino' and shop_name='Nescafe'";
		$result = mysql_query($query);
	
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Mochaccino);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Ice Tea'and shop_name='Nescafe'";
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Ice_Tea);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Frappe'and shop_name='Nescafe'";
		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Frappe);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Black Coffee'and shop_name='Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Black_Coffee);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Cappuccino'and shop_name='Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Cappuccino);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Chocolate Shake'and shop_name='Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Chocolate_Shake);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Double Coffee'and shop_name='Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Double_Coffee);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Double Hot Chocolate'and shop_name='Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Double_Hot_Chocolate);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Hot Cup Soup'and shop_name='Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Hot_Cup_Soup);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Latte'and shop_name='Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Latte);
		
		/*$query = "SELECT price
				  FROM shop_details
				  WHERE item_name = 'Lemon Tea'";
		$result = mysql_query($query);
		$bill = $bill + ($result*$Lemon_Tea);*/
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Masala Tea'and shop_name='Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Masala_Tea);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Maggi'and shop_name='Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Maggi);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Masala Maggi'and shop_name='Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Masala_Maggi);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Tomato Maggi'and shop_name='Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Tomato_Maggi);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item= 'Cheese Maggi'and shop_name='Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Cheese_Maggi);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item= 'Cheese Pasta'and shop_name='Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Cheese_Pasta);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Tomato Pasta'and shop_name='Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Tomato_Pasta);
		
		$query = "SELECT price
				  FROM shop_details
				  WHERE item = 'Masala Pasta'and shop_name='Nescafe'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$rate = $row['price'];
		$bill = $bill + ($rate*$Masala_Pasta);
		echo $bill;
	}
//}
?>

		
