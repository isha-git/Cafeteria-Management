/*
github.com/isha-git
github.com/jagriti04
github.com/shripriyamaheshwari
*/

<html>
  <head>
    <style type="text/css">
    div.main {
    font-size: 19px;
    margin-top: 25px; text-align: center; 
    border-bottom: 5px solid black;
    background: #20B2AA;}
	td{text-align:center;}

     .bgimg {
   position: relative;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

  background-image: url("AlsoHall3.jpeg");
  }
  .container {
    position: relative;
    text-align: center;
    color: white;
	font-size:28px;
}
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
   </style>
  </head>

  <body>
  <form action = "calcullatehall3.php" method = "post">
    <div class="container">
  <img src="Hall3.jpeg" alt="Navbar" width = "100%" height = "35%">
  <div class="centered"> <marquee><h1>WELCOME TO HALL-III CANTEEN</h1> </marquee></div>
</div>
    <div class = "bgimg">
 </br> 
  <table class="drink" align="center">
  <caption> <h2>  Choose Your Favourite Drink </h2> </caption>
  <tr>
    <th> <h3> We Have... </h3> </th> 
	<th> <h3> Price(Rs.) </h3></th>
	<th><h3> Quantity </h3></th>
  </tr>
  <tr> 
     
     <td><b> Coffee</b><br>
	 </td> 
	 <td> <b>10 </b></td>
	 <td><input type="text" name="Coffee" value="" size = "2"/></td>
  </tr>
  
   <tr> 
     <td><b> Single Tea</b><br>
	 </td> 
	 <td><b> 5 </b></td>
	 <td><input type="text" name="Single Tea" value="" size = "2"/></td>
  </tr>
   <tr> 
     <td><b>Double Tea</b><br>
	 </td> 
	 <td> <b>10</b></td>
	 <td><input type="text" name="Double Tea" value="" size = "2"/></td>
  </tr>
  </table>
 <table class="meal" align="center">
  <caption> <h2>  Pick your dish </h2> </caption>
  <tr>
    <th> <h3> We Have... </h3> </th> 
	<th> <h3> Price(Rs.) </h3></th>
	<th><h3> Quantity </h3></th>
  </tr>
 
 <tr> 
     <td><b>Samosa</b><br>
	 </td> 
	 <td> <b>5</b></td>
	 <td><input type="text" name="Samosa" value="" size = "2"/></td>
  </tr>
   <tr> 
     <td><b> Patty</b><br>
	 </td> 
	 <td> <b>15 </b></td>
	 <td><input type="text" name="Patty" value="" size = "2"/></td>
  </tr>
   <tr> 
     <td><b>Stuffed Patty</b><br>
	 </td> 
	 <td> <b>20 </b></td>
	 <td><input type="text" name="Stuffed Patty" value="" size = "2"/></td>
  </tr>
  
     <tr> 
     <td> <b>Parantha </b><br>
	 </td> 
	 <td><b> 20</b> </td>
	 <td><input type="text" name="Parantha" value="" size = "2"/></td>
  </tr>
      <tr> 
     <td><b>Maggi</b><br>
	 </td> 
	 <td><b> 20</b> </td>
	 <td><input type="text" name="Maggi" value="" size = "2"/></td>
  </tr>
      <tr> 
     <td><b> Schezwan Rice</b><br>
	 </td> 
	 <td><b> 80</b> </td>
	 <td><input type="text" name="Schezwan Rice" value="" size = "2"/></td>
  </tr>
       <tr> 
     <td><b>Schezwan Noodles</b><br>
	 </td> 
	 <td> <b>80 </b></td>
	 <td><input type="text" name="Schezwan Noodles" value="" size = "2"/></td>
  </tr>	 
 </table> </br> </br>
 <table class="sandwich" align="center">
  <Caption><h2> Sandwich Of Your Choice<h2> </caption>
 <tr> <th><h3>We Have...<h3></th>
       <th><h3>Price(Rs.)</h3></th>
	   <th><h3> Quantity </h3></th>
	   </tr>
 <tr> 
     <td><b>Bombay Sandwich</b><br>
	 </td> 
	 <td> <b>40</b> </td>
	 <td><input type="text" name="Bombay Sandwich" value="" size = "2"/></td>
  </tr>	 
   <tr> 
     <td><b>Punjabi Sandwich</b><br>
	 </td> 
	 <td> <b>40 </b></td>
	 <td><input type="text" name="Punjabi Sandwich" value="" size = "2"/></td>
  </tr>	
   <tr> 
     <td><b>Cheese Sandwich</b><br>
	 </td> 
	 <td><b> 40</b> </td>
	 <td><input type="text" name="Cheese Sandwich" value="" size = "2"/></td>
  </tr>	
   	
   <tr> <td> </td> <td> </br> </br>
<td> <button class="class3" name="submit" type="submit" value="Place Order" align="right"> Place Order </button><br/></td>
 </tr>
	 </table> 
 </div>
 </form>
 </body>
</html>