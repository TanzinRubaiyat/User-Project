<?php 

session_start();

if (isset($_SESSION['username'])) {
	echo "<h2>Order page</h2>";
	echo "<br><hr><a href='product.php'>Back</a><hr>";

}

else{
	header("location:login.php");
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Order</title>
 </head>   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 <style media="screen">
a{
	margin:10px 10px;
	text-decoration: none;
	font-family: 'Merriweather', serif;
	color: #f25287;
}
a:hover
{
	color: #424874;
}

</style>
  <body style="background-color: #edffec">
<center>
 	<table class="table table-striped table-hover">
 		<tr>
 			<td>Product ID</td>
 			<td>Name</td>
 			<td>Price</td>
 			<td>Quantity</td>
 			<td rowspan="6"></td>
 		</tr>
 		<tr>
		
 			<td>01</td>
 			<td>Chips</td>
 			<td>10</td>
 			<td><input type="number" name=""></td>
 			<td><input type="submit" name="confirm" value="Confirm" onclick="location.href='index.php';"></td>
 		</tr>
 	</table>
 </center>
 </body>
 </html>