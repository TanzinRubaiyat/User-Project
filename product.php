<?php 

session_start();

if (isset($_SESSION['username'])) {
	echo "<h1>Welcome to product page</h1>";
	echo "<br><hr><a href='index.php'>Back</a><hr>";

}

else{
	header("location:login.php");
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Product</title>
 </head>
 <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
 <input type="text" id="search" placeholder="search" >
<center>
<br>
 	<table border="2" class="table table-striped table-hover">
 		<tr>
 			
 			<td>Name</td>
 			<td>Price</td>
 			<td>Action</td>
 		</tr>
<?php   

//$db = mysqli_connect('localhost', 'root', '', 'registration');
require 'db.php';
$query = "SELECT * FROM product";

          if ($result = $db->query($query)) {  
            while ($row = $result->fetch_assoc())   
                {  
				
					
                     echo '<tr>
                       
                        <td>'.$row["name"].'</td>
                        <td>'.$row["price"].'</td>
                        <td><a href="order.php">Buy</a></td>
                        </tr>'; 
					
                }
            }  
   ?>

 	</table>
	 <script>
       $("#search").on("keyup",function(){
          var value=$(this).val();
		  $("table tr").each(function(result){
             if(result!==0){
				 var id=$(this).find("td:first").text();
				 if(id.indexOf(value)!==0 && id.toLowerCase().indexOf(value.toLowerCase())<0)
				 {
					 $(this).hide();
				 }else{
                    $(this).show();
				 }	 
			 }
		  });
	   });
	 </script>
 </center>
 </body>
 </html>