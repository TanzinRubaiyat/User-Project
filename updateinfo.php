<!DOCTYPE html>
<html>
<head>
	<title>Information Form</title>
</head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 <style media="screen">
 	.error {color: #FF0000;}
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
<?php 

$nameErr = $emailErr = $contactErr = $passwordErr = "";
		 $name = $email = $contact  = $password = "";

		 if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["username"])) {
					 $nameErr = "Name is required";
				}else {
					 $name = test_input($_POST["username"]);
				}

				if (empty($_POST["password"])) {
					 $passwordErr = "Password is required";
				}else {
					 $password = test_input($_POST["password"]);
				}

			

				if (empty($_POST["email"])) {
					 $emailErr = "Email is required";
				}else {
					 $email = test_input($_POST["email"]);
				}


		 }

		 function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
		 }

 ?>




<center>
<h2>Change Information</h2>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

	<table class="table table-striped table-hover">
		<?php if(isset($msg)){?>
		    <tr>
		      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
		    </tr>
    	<?php } ?>
		<tr>
			 <td>Name:</td>
			 <td><input type = "text" name = "uname" >
			 	<span class = "error">* <?php echo $nameErr;?></span>
			 </td>
		</tr>
		<tr>
			 <td>Password:</td>
			 <td> <input type = "text" name = "password" >
			 	<span class = "error">*<?php echo $passwordErr;?></span>
			 </td>
		</tr>
	
		<tr>
			 <td>E-mail: </td>
			 <td><input type = "text" name = "email" >
			 	<span class = "error">* <?php echo $emailErr;?></span>
			 </td>
		</tr>
		<tr>
			<td>Picture:</td>
			<td><input type="file" name=""></td>
		</tr>

		<tr>
			<td></td>
			<td>
				 <input type = "submit" name = "submit" value = "Submit">
				<input type="button" onclick="location.href='personalinfo.php';" value="Back">
			</td>
		</tr>
	</table>
		</center>

	</form>


</body>
</html>



