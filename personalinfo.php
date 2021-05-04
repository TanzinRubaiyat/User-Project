<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Personal Info</title>
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
  <body style="background-color: #white">

  <table class="table table-striped table-hover">
      <tr>
        <td width="20%"><img src="img/raka.jpg" alt="Raka"height="260px" width="250px"></td>
         <td></td>

    <td>
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

  
  
    <form>
    <fieldset>
      <legend>Personal Info</legend>
      <table width="90%">
<?php
 // $db = mysqli_connect('localhost', 'root', '', 'registration');
 require 'db.php';
  $username=$_SESSION['username'];
  
  $query = "SELECT * FROM users where username='$username'";

          if ($result = $db->query($query)) {  
            while ($row = $result->fetch_assoc())   {

        echo '<tr>
        <td>'.$row["username"].'</td>
        
      </tr>
      <tr>
        <td>'.$row["email"].'</td>
      
      </tr>
      <tr>
        <td>'.$row["password"].'</td>
      
      </tr>';
 
            }
          }
?>
      <tr>
        <td></td>
        <td>
					  <input type="button" onclick="location.href='updateinfo.php';" value="Change Info">
					  <input type="button" onclick="location.href='index.php';" value="Back">
        </td>
      </tr>
                
                </table>
                
    
    </fieldset>
    </form>
    </td>
      </table>
  </body>
</html>