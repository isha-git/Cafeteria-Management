/*
github.com/isha-git
github.com/jagriti04
github.com/shripriyamaheshwari
*/

<html>
  <head>
    <style type="text/css">
    div.main {
	color: #8B4513; 
    font-size: 25px;
     text-align: center; 
    height: 18px;
    font-family:Jazz LET, fantasy;
	}
	table.drink{font-size: 26;}
	table.meal{font-size: 26;}
	
   body{font-size: 35px; font-family:Marker Felt, fantasy;}
   body{background-image: url('coffee2.jpg'); font-weight: 1100; }
   table.drink{margin-left:35px; margin-bottom:45px;}
   .class3{margin-left:500px; margin-top:15px; height:55px; width: 120px; background-color:#F0E68C; font-style: }
   </style>
  </head>
  
  <body bgcolor="#C0C0C0">
 <form action = "calculatenes.php" method = "post">
  <div class="main">
  <h1 color="#8B4513"><marquee> WELCOME TO NESCAFE </marquee></h1> 
  
  </div>  </br>
  <div>
  
  <table class="drink" align="left" >
  
  <caption> <h2>  Choose Your Favourite Drink </h2> </caption>
  <tr>
    <th> <h3> We Have </h3> </th> 
	<th> <h3> Price(Rs.) </h3></th>
	<th width="50px"> <h3> Quantity </h3> </th>
  </tr>
  <tr> 
     
     <td> <b> Coffee </b></label>
	 </td> 
	 <td><center> 10 </center></td>
	 <td> <input type="text" name="Coffee" /></label>
  </tr>
   <tr> 
     <td> <b> Hot Chocolate </b></label>
	 </td> 
	 <td><center> 10 </center> </td>
	 <td><input type="text" name="Hot_Chocolate" /> </td>
  </tr>
   <tr> 
     <td> <b> Mochaccino </b> </label>
	 </td> 
	 <td> <center> 15 </center></td>
	 <td><input type="text" name="Mochaccino" /> </td>
  </tr>
     <tr> 
     <td><b> Ice Tea</b> </label>
	 </td> 
	 <td><center> 15 </center></td>
     <td><input type="text" name="Ice_Tea" /></td>
  </tr>
     <tr> 
     <td>  <b> Frappe </b></label>
	 </td> 
	 <td><center> 25 </center></td>
     <td><input type="text" name="Frappe" /></td>
  </tr>
     <tr> 
     <td> <b>Black Coffee </b></label>
	 </td> 
	 <td><center> 10 </center></td>
	 <td><input type="text" name="Black_Coffee" /></td>
  </tr>
     <tr> 
     <td> <b>Cappuccino </b></label>
	 </td> 
	 <td><center> 15 </center></td>
	 <td><input type="text" name="Cappuccino" /></td>
  </tr>
  
    <tr> 
     <td> <b>Chocolate Shake </b></label>
	 </td> 
	 <td><center> 25 </center></td>
	 <td><input type="text" name="Chocolate_Shake" /></td>
  </tr>
   <tr> 
     <td> <b> Double Coffee </b> </label><br>
	 </td> 
	 <td><center> 20</center></td>
	 <td><input type="text" name="Double_Coffee" /> </td>
  </tr>
     <tr> 
     <td>  <b> Double Hot Chocolate </b></label>
	 </td> 
	 <td><center> 20</center></td>
	 <td><input type="text" name="Double_Hot_Chocolate" /></td>
  </tr>
   <tr> 
     <td> <b> Hot Cup Soup </b></label>
	 </td> 
	 <td><center> 10 </center></td>
	 <td><input type="text" name="Hot_Cup_Soup" /></td>
  </tr>
   <tr> 
     <td><b> Latte</b></label>
	 </td> 
	 <td><center> 15 </center></td>
	 <td><input type="text" name="Latte" /></td>
  </tr>
   <tr> 
     <td><b> Lemon Tea </b></label>
	 </td> 
	 <td><center> 10 </center></td>
	 <td><input type="text" name="Ice_Tea" /></td>
  </tr>
  <tr> 
     <td> <b>Masala Tea </b></label>
	 </td> 
	 <td><center> 8 </center></td>
	 <td><input type="text" name="Masala_Tea" /></td>
  </tr>
  
	 
 </table>  
 <table class="meal" align="center">
  <caption> <h2>  Pick your dish </h2> </caption>
  <tr>
    <th> <h3> We Have </h3> </th> 
	<th> <h3> Price(Rs.) </h3></th>
	<th> <h3> Quantity </h3> </th>
  </tr>
   <tr> 
     <td> <b>Maggi </b> </label>
	 </td> 
	 <td><center> 20 </center></td>
	 <td><input type="text" name="Maggi" /> </td>
  </tr>
 <tr> 
     <td><b> Masala Maggi </b></label>
	 </td> 
	 <td><center> 20 </center></td>
	  <td><input type="text" name="Masala_Maggi" /></td>
  </tr>
   <tr> 
     <td> <b> Tomato Maggi </b></label>
	 </td> 
	 <td><center> 25 </center> </td>
	  <td><input type="text" name="Tomato_Maggi" /></td>
  </tr>
   <tr> 
     <td> <b>Cheese Maggi </b> </label>
	 </td> 
	 <td><center> 25 </center></td>
	  <td><input type="text" name="Cheese_Maggi" /></td>
  </tr>
     <tr> 
     <td> <b> Cheese Pasta </b></label>
	 </td> 
	 <td><center> 35 </center></td>
	  <td><input type="text" name="Cheese_Pasta" /></td>
  </tr>
     <tr> 
     <td> <b> Tomato Pasta </b></label>
	 </td> 
	 <td><center> 35 </center> </td>
	 <td><input type="text" name="Tomato_Pasta" /></td>
  </tr>
     <tr> 
     <td>  <b> Masala Pasta </b></label>
	 </td> 
	 <td><center> 35 </center></td>
	 <td><input type="text" name="Masala_Pasta" /></td>
  </tr>	 
 </table></div> 
 <button class="class3" name="submit" type="submit" value="Place Order" align="right"><b> Place Order </b> </button>
 </form>
 
 </body>
</html>