<?php 

session_start();

if (isset($_SESSION['username'])) {
	echo "<h2>Welcome to Purchase History</h2>";
	echo "<br><hr><a href='index.php'>Back</a><hr>";

}

else{
	header("location:login.php");
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Order History</title>
 </head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
 			<td>Username</td>
 			<td>Name</td>
 			<td>Price</td>
 			<td>Quantity</td>
 			<td>Total</td> 
 		</tr>
<?php   
         //$data = file_get_contents("../controller/goods.json");  
         // $data = json_decode($data, true);  
            //foreach($data as $row) 
           // $db = mysqli_connect('localhost', 'root', '', 'registration');
           require 'db.php';

        
           $username=$_SESSION['username'];
  
           $query = "SELECT * FROM order_history where username='$username'";


          if ($result = $db->query($query)) {  
            while ($row = $result->fetch_assoc())  
                {  
                     echo '<tr>
                        <td>'.$row["username"].'</td>
                        <td>'.$row["name"].'</td>
                        <td>'.$row["price"].'</td>
                        <td>'.$row["quantity"].'</td>
                        <td>'.$row["total"].'</td>
                        </tr>';  
                } 
            } 
   ?>
 	</table>
 </center>
 </body>
 </html>