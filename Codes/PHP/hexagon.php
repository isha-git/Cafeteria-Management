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
	color: black;
    margin-top: 25px; text-align: center;
     color:black;}
	body{background-image: url('25.jpg');
	background-repeat: repeat; }
	body{font-size:25px; color: black; font-family: Bradley Hand, cursive;}
   table.drink{font-size: 22px;  margin-left: 150px;}
	table.meal{font-size: 22px; margin-right: 150px;}
 td {text-align:center;}
 .class3{margin-left:500px; margin-top:15px; height:55px; width: 120px; background-color:#2E86C1; font-size: 15px; color:white;}
   
   </style>
  </head>
  
  <body>
   
   <form action = "calculatehex.php" method = "post">
  
  <div class="main">
 
  <h1><marquee> WELCOME TO HEXAGON CANTEEN</marquee> </h1> 
  
  </div>  </br> 
  <table class="drink" align="left">
  <caption> <h2>  Choose Your Favourite Drink </h2> </caption>
  <tr>
    <th> <h3> We Have </h3> </th> 
	<th> <h3>&nbsp Price(Rs.) </h3></th>
	<th><h3> &nbsp Quantity</h3></th>
  </tr>
  <tr> 
     
     <td> 
      Coffee<br>
	 </td> 
	 <td> 10 </td>
	 <td><input type = "text" name = "Coffee" size = "2"/><br/>
  </tr>
   <tr> 
     <td> 
     Single Tea <br>
	 </td> 
	 <td> 5 </td>
	  <td><input type = "text" name = "Single Tea" size = "2"/><br/>
  </tr>
   <tr> 
     <td> 
      Double Tea<br>
	 </td> 
	 <td> 10</td>
	  <td><input type = "text" name = "Double Tea" size = "2"/><br/>
  </tr>
  </table>
 <table class="meal" align="right">
  <caption> <h2>  Pick your dish </h2> </caption>
  <tr>
    <th> <h3> We Have </h3> </th> 
	<th> <h3> &nbsp Price(Rs.) </h3></th>
	<th> <h3> Quantity </h3></th>
  </tr>
 
 <tr> 
     <td> 
      Samosa<br>
	 </td> 
	 <td> 5</td>
	  <td><input type = "text" name = "Samosa" size = "2"/><br/>
  </tr>
   <tr> 
     <td> 
      Patty <br>
	 </td> 
	 <td> 15 </td>
	  <td><input type = "text" name = "Patty" size = "2"/><br/>
  </tr>
   <tr> 
     <td> Stuffed Patty<br>
	 </td> 
	 <td> 20 </td>
	  <td><input type = "text" name = "Stuffed Patty" size = "2"/><br/>
  </tr>
     <tr> 
     <td>  Aaloo vada<br>
	 </td> 
	 <td> 10 </td>
	  <td><input type = "text" name = "Aaloo Vada" size = "2"/><br/>
  </tr>
     <tr> 
     <td>  Sandwich<br>
	 </td> 
	 <td> 20 </td>
	  <td><input type = "text" name = "Sandwich" size = "2"/><br/>
  </tr>
     <tr> 
     <td>  Parantha<br>
	 </td> 
	 <td> 20 </td>
	  <td><input type = "text" name = "Parantha" size = "2"/><br/>
  </tr>
      <tr> 
     <td>  Maggi<br>
	 </td> 
	 <td> 20 </td>
	  <td><input type = "text" name = "Maggi" size = "2"/><br/>
  </tr>
      <tr> 
     <td>  Schezwan Rice<br>
	 </td> 
	 <td> 25 </td>
	  <td><input type = "text" name = "Schezwan Rice" size = "2"/><br/>
  </tr>
       <tr> 
     <td>  Schezwan Noodles<br>
	 </td> 
	 <td> 25 </td>
	 <td><input type = "text" name = "Schezwan Noodles" size = "2"/><br/>
  </tr>
	  
  </tr>	 
 <tr> <td> </td> <td> </br> </br>
<td> <button class="class3" name="submit" type="submit" value="Place Order" align="right"> Place Order </button><br/></td>
 </tr>
 </table>
 </form>
 </body>
</html>