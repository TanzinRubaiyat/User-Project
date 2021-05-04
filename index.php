
<?php 

session_start(); 

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
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
<center>
      <h1>User Home page</h1>
			<h1>Welcome home! <?= $_SESSION['username']?></h1>
</center>

    <hr>
<div class="topManu">
	<center>

<strong>

	 <a href='index.php'>Home</a>
	 <a href='product.php'>Product</a>
	 <a href='personalinfo.php'>Personal info</a>
	 <a href='history.php'>Order History</a>
	 <a href="index.php?logout='1'" style="color: red;">Logout</a>

	 </strong>
	</center>
</div>
<hr>
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

  </body>
  	
</html>





