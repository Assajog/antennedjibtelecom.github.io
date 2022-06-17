<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="for.css">
</head>
<body>


	<p style="">Espace d'Administrateur</p>
	<img src="image/admin1.jpg" style="width: 100px;">

	<form method="POST">

	<button name="logout">Déconnexion</button>
	
</form>
<h1>Bienvenue sur la page d'administration<p style="color: green;font-size:22px;font-family:Arial;"> <?php echo $_SESSION['AdminLoginId']?></p></h1><br> 


	<div id="b">Les commentaires reçus :</div> 
	<?php
$server_name="localhost";
$user="root";
$pass="";
$db="djibtelecom";

$db= new mysqli($server_name,$user,$pass,$db)
or die("unnable to connect");

$sql="select * from commentaire";
$result=mysqli_query($db,$sql) or  die("bad query");

echo "<table border='1'";
echo "<tr><td>Id</td><td>Nom</td><td>Email</td><td>Téléphone</td><td>Commentaire</td></tr><br>";

while ($row=mysqli_fetch_assoc($result)) {
	echo"<tr><td>{$row['id']}</td><td>{$row['nom']}</td><td>{$row['email']}</td><td>{$row['tel']}</td><td>{$row['commen']}</td></tr><br>";
}

echo "</table>";



?>



<?php

if(isset($_POST['logout'])){

	session_destroy();
	header("location:form.php");
}

?>


<style>
	

	body{
	background-image: url(image/fond0.jpg);
	background-size: cover;
	background-attachment: fixed;
}
p{
	color:red;
	font-size:18px;
	font-family: "Roboto",sans-serif;

}

h1{

	color: black;
	text-align: center;
}
 button{
 font-family: "Roboto",sans-serif;
  font-size:18px;
  font-weight: bold;
  background: #1E90FF;
  width: 160px;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
  color: #fff;
  border-radius: 5px;
  cursor:pointer;
  box-shadow: 0px 0px 10px  rgba(0, 0,   0, 0.1);
  -webkit-transition-duration:0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property:box-shadow,transform;
  transition-property: box-shadow,transform;
  margin-left: 1180px;
  margin-bottom:0px;
}
button:hover,button:focus,button:active{
	box-shadow: 0px 0px 20px  rgba(0, 0,   0, 0.5);
	-webkit-transform:scale(1.1);
	transform: scale(1.1);

}
#b{

	color:yellow;
	font-size:18px;
	font-family: "Roboto",sans-serif;

}

table{


	width: 70%;

}

table tr{
	

	width: 100%;
}


</style>


</body>
</html>